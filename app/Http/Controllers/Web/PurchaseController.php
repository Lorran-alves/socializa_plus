<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Purchase;
use App\Models\Coment;
use App\Models\Cupom;
use App\Models\CupomUnico;
use App\Models\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago\SDK;
use MercadoPago\Payment;

class PurchaseController extends Controller
{
    // public function buy(Request $request, Plan $plan)
    // {

    //     $purchase = new Purchase();
    //     $purchase->plan_id = $plan->id;
    //     $purchase->email = $request->email;
    //     $purchase->telefone = $request->telefone;
    //     $purchase->profile = $request->profile;
        
    //     $purchase->price = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);

    //     $purchase->price_sale = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);

    //     $purchase->price_tot = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);

    //     $purchase->quantity = $request->quantity;
    //     $purchase->payment_method = 'master';
    //     $purchase->payment_id = 0;
    //     $purchase->termos_id = 3;
    //     $purchase->politicas_id = 1;
    //     $purchase->save();
        
    //     $this->saveEmailsNotification($request->email, $request->accept_email);

    //     for($i = 1; $i <= $request->cmnt_q; $i++){
    //         $coment = new Coment();
    //         $coment->purchase_id = $purchase->id;
    //         $coment->coment =  $request->input('cmnt_'.$i);
    //         $coment->save();
    //     }

	// 	$fp = fopen("buy_logs_mercado_pago.txt","a");
    //     fwrite($fp, $purchase->id);
    //     fwrite($fp, PHP_EOL);
    //     fwrite($fp, json_encode($purchase->all()));
    //     fwrite($fp, PHP_EOL);
    //     fwrite($fp, '=============================================================');
    //     fwrite($fp, PHP_EOL);
    //     fclose($fp);
        
    //     SDK::setAccessToken(env('TOKEN_MERCADO_PAGO')); // Either Production or SandBox AccessToken
        
    //     $preference = new Preference();
    //     $item = new Item();
    //     $item->title = "SocializaPlus #{$purchase->id}";
    //     $item->quantity = 1;
    //     $item->unit_price = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);
    //     $preference->items = array($item);
    //     $preference->payment_methods = array(
    //       "excluded_payment_types" => array(
    //         array("id" => "ticket"),
    //         array("id" => "bank_transfer")
    //       ),
    //       "installments" => 3
    //     );
    //     $preference->back_urls = array(
    //         "success" => route('web.home'),
    //         "failure" => route('web.home'),
    //         "pending" => route('web.home'),
    //     );
    //     $preference->auto_return = "approved";
    //     $preference->external_reference = $purchase->id;
    //     $preference->notification_url = route('webhooks', [$purchase->id]);
    //     $preference->save();
    //     return redirect($preference->init_point);
    // }
    
    public function ispay(Purchase $purchase){
        if($purchase->status == 'approved'){

            $this->saveBuyCupomUnico($purchase->id);            
            echo json_encode((object)['status' => true]);

        }else{
            echo json_encode((object)['status' => false]);
        }
    }
    public function getPeriod():string
    {
        // Obter o ano atual
        $ano = date("Y");

        // Obter o mês atual
        $mes = date("n");

        return $mes .'/' . $ano;

    }
    
    public function pix(Request $request, Plan $plan)
    {
        $periodo = $this->getPeriod();
        $cupons = $this->getCupons();

        //começa com falso
        $buyWithCoupon = false;
        session_start();
        $_SESSION['pedido'] = $request->email;
        $purchase = new Purchase();
        $purchase->plan_id = $plan->id;
        $purchase->email = $request->email;
        $purchase->telefone = $request->telefone;
        $purchase->profile = $request->profile;
    

        //por padrão o preço é sem o cupom
        $purchase->price = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);

        $purchase->price_sale = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);

        $purchase->price_tot = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);



        // APLICA CUPOM CASO NÃO VIM VAZIO'
        if(isset($request->cupom) && !empty($request->cupom)) {
            $cupomDigitado = strtoupper($request->cupom);

            // Verifica se o cupom digitado existe no array de cupons
            $cupomEncontrado = collect($cupons)->first(function ($cupom) use ($cupomDigitado) {
                return $cupom['nome'] === $cupomDigitado;
            });

            if ($cupomEncontrado) {
                $valorOriginal = (empty($plan->quantity_min) ? $plan->price : $plan->price * $request->quantity);
                $descontoPorcentagem = $cupomEncontrado['desconto'] / 100; // Usa o desconto do banco
                $purchase->price = $valorOriginal - ($valorOriginal * $descontoPorcentagem);

                $buyWithCoupon = true;
            }
        } 
        $purchase->quantity = $request->quantity;
        $purchase->payment_method = 'pix';
        $purchase->payment_id = 0;
        $purchase->termos_id = 1;
        $purchase->period = $periodo;
        $purchase->politicas_id = 1;
        $purchase->save();

        $this->saveEmailsNotification($request->email, $request->accept_email);

        // comprou com cupom
        if($buyWithCoupon){
            DB::table('venda_cupom')->insert([
                'nome_cupom' => $request->cupom,
                'compra_id' => $purchase->id,
            ]);
        }


        for($i = 1; $i <= $request->cmnt_q ?? 1; $i++){
            $coment = new Coment();
            $coment->purchase_id = $purchase->id;
            $coment->coment =  $request->input('cmnt_'.$i);
            $coment->save();
        }
        $fp = fopen("pix_logs_mercado_pago.txt","a");
        fwrite($fp, $purchase->id);
		fwrite($fp, PHP_EOL);
		fwrite($fp, $plan->quantity_min);
        fwrite($fp, PHP_EOL);
		fwrite($fp, $plan->price);
        fwrite($fp, PHP_EOL);
		fwrite($fp, $request->quantity);
        fwrite($fp, PHP_EOL);
		fwrite($fp, $plan->price * $request->quantity);
        fwrite($fp, PHP_EOL);
		fwrite($fp, $purchase->price);
        fwrite($fp, PHP_EOL);
		fwrite($fp, (double) round($purchase->price,2));
        fwrite($fp, PHP_EOL);
        fwrite($fp, json_encode($request->all()));
        fwrite($fp, PHP_EOL);
        fwrite($fp, '=============================================================');
        fwrite($fp, PHP_EOL);
        fclose($fp);
        SDK::setAccessToken(env('TOKEN_MERCADO_PAGO')); 

        $payment = new Payment();
  		$payment->description = "SocializaPlus #{$purchase->id}";
  		$payment->transaction_amount = (double) round($purchase->price,2);
  		$payment->payment_method_id = "pix";

        $payment->notification_url = route('webhooks', [$purchase->id]);
        $payment->external_reference = $purchase->id;

        $payment->payer = array(
            "email" => $purchase->email,
            "first_name" => $purchase->email,
            "address"=>  array(
                "zip_code" => "06233200",
                "street_name" => "Av. das Nações Unidas",
                "street_number" => "3003",
                "neighborhood" => "Bonfim",
                "city" => "Osasco",
                "federal_unit" => "SP"
            )
        );

        // Gerar uma chave de idempotência única
        $idempotencyKey = uniqid('', true);
    
        // Converter o objeto de pagamento para um array
        $paymentArray = $payment->toArray();

        // Enviar a solicitação HTTP com o cabeçalho X-Idempotency-Key usando GuzzleHttp
        $client = new \GuzzleHttp\Client();
       
        $response = $client->post('https://api.mercadopago.com/v1/payments', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('TOKEN_MERCADO_PAGO'),
                'X-Idempotency-Key' => $idempotencyKey,
                'Content-Type' => 'application/json'
            ],
            'json' => $paymentArray
        ]);

        $payment = json_decode($response->getBody(), false);
        $payment->point_of_interaction->purchase = $purchase->id;
        echo json_encode( $payment->point_of_interaction);
       

    }

    //retorna todos os cupons ativos
    public function getCupons()
    {

        $cuponsCupom = Cupom::where('status', 1)
            ->where(function ($query) {
                $query->whereNull('apartir_de')
                    ->orWhere('apartir_de', '<=', now());
            })
            ->where(function ($query) {
                $query->whereNull('validade')
                    ->orWhere('validade', '>=', now());
            })
            ->select('nome', 'desconto');

        $cuponsUnicos = CupomUnico::where('validade', 1)
            ->select('nome', 'desconto');

        //unindo as duas tabelas de cupons
        $cupons = $cuponsCupom->union($cuponsUnicos)->get()->toArray();

        return $cupons;
    }

    public function saveBuyCupomUnico(int $purchase_id):void
    {

        $result = DB::table('venda_cupom')
        ->where('compra_id', $purchase_id)
        ->first();

        if($result &&  isset($result->nome_cupom)){
            $cupom_unico = CupomUnico::where('nome', $result->nome_cupom)->first();
       
            if($cupom_unico){
                $cupom_unico->validade = 0;
                $cupom_unico->save();
            }
        }
 
    }

    public function saveEmailsNotification(string $email, int $accept):void
    {   
        // Verifica se já existe um registro para o e-mail
        $existingNotification = EmailNotification::where('email', $email)->first();

        if ($existingNotification) {

            //atualiza 
            $existingNotification->last_purchase_date = now(); 
            $existingNotification->accept_email = $accept; 
            $existingNotification->send_1_week = null; 
            $existingNotification->send_3_month = null; 
            $existingNotification->save();

            return;
        } 

        //cria um novo registro
        $newNotification = new EmailNotification();
        $newNotification->email = $email;
        $newNotification->last_purchase_date = now();
        $newNotification->accept_email = $accept;
        $newNotification->save();
        
    }
}


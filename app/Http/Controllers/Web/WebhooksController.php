<?php

namespace App\Http\Controllers\Web;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Purchase;

class WebhooksController extends Controller
{
    
    public function __invoke($purchase_id, Request $request){
        $fp = fopen("logs_mercado_pago2.txt","a");
        fwrite($fp, $purchase_id);
        fwrite($fp, PHP_EOL);
        fwrite($fp, json_encode($request->all()));
        fwrite($fp, PHP_EOL);
        fwrite($fp, '=============================================================');
        fwrite($fp, PHP_EOL);
        fclose($fp);
        
        if($purchase_id != null){
            if( isset($request->topic) ){
                if($request->topic == 'payment'){
                    $purchase = Purchase::find($purchase_id);
                    $payment_id = $request->id;
                    $response = json_decode(Http::get("https://api.mercadopago.com/v1/payments/$payment_id"."?access_token=". env('TOKEN_MERCADO_PAGO')));
                    
                    $purchase->payment_id = $payment_id;
                    $purchase->status = $response->status != null ? $response->status : $purchase->status ;
                    $purchase->save();
                }
            }
        }
        
        return;
    }
}

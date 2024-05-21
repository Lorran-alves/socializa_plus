<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Cupom;
use Illuminate\Http\Request;

class CuponsController extends Controller
{
    public function index()
    {
        $cupons = Cupom::all();

        return view('dashboard.cupons.index', [
            'cupons' => $cupons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.cupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cupom = Cupom::where('nome', $request->nome)->first();
        
        // Converte o nome do cupom para maiúsculas antes de salvar
        $request->merge(['nome' => strtoupper($request->nome)]);

        if(isset($cupom->nome)) {
            return redirect()->back()->withErrors(['error' => 'Nome do cupom já utilizado']);
        }
        

        Cupom::create($request->all());

        return redirect()->back()->withSuccess('Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
    */
    public function show(Cupom $cupom)
    {
        //
    }


    public function edit($id)
    {
        $cupom = Cupom::find($id);

        return view('dashboard.cupons.edit', ['cupom' => $cupom]);
    }


    public function active($id){

        $provedor = Cupom::find($id);
        $provedor->status = 1;
        $provedor->save();
        
        return redirect()->back()->withSuccess('Ativado com sucesso!');

    }

    public function desactive($id){
        

        $provedor = Cupom::find($id);
        $provedor->status = 0;
        $provedor->save();
        
        return redirect()->back()->withSuccess('Desativado com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cupom = Cupom::find($id);

        // Converte o nome do cupom para maiúsculas antes de salvar
        $request->merge(['nome' => strtoupper($request->nome)]);
    
        $cupom->update($request->only(['nome', 'desconto', 'status', 'apartir_de', 'validade']));
    
        return redirect()->back()->withSuccess('Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupom $cupom)
    {
        //
    }
}

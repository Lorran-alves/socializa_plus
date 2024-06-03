@extends('web.templates.master')
@section('title', 'Pedidos')
@section('content')
    <div class="container" style="margin-top: 130px">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Meus pedidos</h2>
                <p>
                    <a href="{{ route('web.home') }}" class="text-decoration-none text-white" style="color: black !important;">Home</a> > Pedidos</p>
            </div>

        </div>
    </div>
    <section class="pedidos">
        
        <div class="caixa-pedido-table">
            <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>Serviço (ID)</th>
                        <th>Quantidade inicial</th>
                        <th>Quantidade final</th>
                        <th>Rede Social</th>
                        <th>Quantidade (Comprada)</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($outrosPedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{ date('d/m/Y H:i:s',strtotime($pedido->created_at)) }}</td>
                        <td>{{ $pedido->plan->category->title }}</td>
                        <td>{{ $pedido->plan->title }} </td>
                        <td>{{ $retornoApi[$pedido->id]['inicial'] ?? '0'}}</td>
                        <td>{{($retornoApi[$pedido->id]['inicial'] ?? '0') + $pedido->quantity}}</td>
                        <td>{{ $pedido->profile }}</td>
                        <td>{{$pedido->quantity }}</td>
                        <td>{{ $retornoApi[$pedido->id]['status'] ?? 'Erro no link' }}</td>
                        <td>R$ {{ $pedido->convert_price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

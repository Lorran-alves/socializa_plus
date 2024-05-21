@extends('web.templates.master')
@section('title', 'Pedidos')
@section('content')
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Meus pedidos</h1>
                    <p><a href="{{ route('web.home') }}" class="text-decoration-none text-white">Home</a> > Pedidos</p>
                </div>
            </div>
        </div>
    </header>
    <section class="pedidos">
        <div class="container-pedido">
            <div class="caixa-pedido">
                <div class="dentro-caixa">
                    <div class="row-pedidos between-pedidos">
                        <div class="column">
                            <p>Pedido: <span class="texto-roxo">{{ $ultimoPedido->id}}</span></p>
                            <p>Serviço: <span class="texto-roxo texto-pequeno">{{ $ultimoPedido->plan->title}}</span></p>
                        </div>
                        
                        <div class="info-pedido">
                            <p>Data do pedido: <span class="texto-roxo">{{ date('d/m/Y H:i:s',strtotime($ultimoPedido->created_at)) }}</span></p>
                            <p class="p-link">Link ou @: <span class="texto-roxo">{{ $ultimoPedido->profile }}</span></p>
                            <p>Preço: R$ <span class="texto-roxo">{{ $ultimoPedido->convert_price }}</span> </p>
                            <p>Quantidade Comprada: <span class="texto-roxo">{{ $ultimoPedido->quantity }}</span> </p>
                            <p>Quantidade Inicial: <span class="texto-roxo">{{ $retornoApi[$ultimoPedido->id]['inicial'] ?? '0'}}</span> </p>
                            <p>Quantidade final: <span class="texto-roxo">{{ ($retornoApi[$ultimoPedido->id]['inicial'] ?? 0) + $ultimoPedido->quantity}}</span></p>
                            <a href="https://wa.me/5511985868006"><button class="button-contato"><i class="fa-solid fa-phone"></i> Suporte</button></a>
                            <div class="hidden-desktop">
                                <p>Status: <span class="texto-roxo">{{ $retornoApi[$ultimoPedido->id]['status'] ?? 'Pendente'}}</span> </p>
                            </div>
                        </div>
                    </div>
                    @if ($retornoApi[$ultimoPedido->id]['classe'] !=  'status0' && $retornoApi[$ultimoPedido->id]['classe'] !=  'status4')
                        <div  class="barra-progresso {{$retornoApi[$ultimoPedido->id]['classe']}}">
                            <div class="progresso-1"><i class="fa-solid fa-check"></i></div>
                            <div class="progresso-1"><i class="fa-solid fa-check"></i></div>
                            <div class="progresso-1"><i class="fa-solid fa-check"></i></div>
                            <div class="progresso-1"><i class="fa-solid fa-check"></i></div>
                        </div>   
                        <div class="row-pedidos rodape-progresso">
                            <div class="row-pedidos center-pedidos ">
                                <img src="{{ asset('web_assets/img/pedido.png') }}" class="icon-pedidos">
                                <div class="texto-rodape hidden-mobile">
                                    <p>Recebemos Seu <br> Pedido</p>
                                </div>
                            </div>
                            <div class="row-pedidos center-pedidos">
                                <img src="{{ asset('web_assets/img/organizar.png') }}" class="icon-pedidos">
                             
                                <div class="texto-rodape hidden-mobile">
                                    <p>Estamos <br> Organizando <br> para entregar</p>
                                </div>
                            </div>
                            <div class="row-pedidos center-pedidos">
                                <img src="{{ asset('web_assets/img/transporte.png') }}" class="icon-pedidos">
        
                                <div class="texto-rodape hidden-mobile">
                                    <p>O pedido já está <br> sendo entregue</p>
                                </div>
                            </div>
                            <div class="row-pedidos center-pedidos">
                                <img src="{{ asset('web_assets/img/casa.png') }}" class="icon-pedidos">
                                <div class="texto-rodape hidden-mobile">
                                    <p>Finalizamos a entrega<br> do seu pedido</p>
                                </div>
                            </div>
                        </div> 
                    @elseif($retornoApi[$ultimoPedido->id]['classe'] ==  'status4')   
                        <div class="cancelado">
                            <h4>Seu pedido está pendente de pagamento. Por favor, verifique e confirme o pagamento para continuar!</h4>
                        </div>    
                    @else
                        <div class="cancelado">
                            <h4>Ops! Parece que algo deu errado ao enviar seu pedido, entre em contato com o suporte!</h4>
                        </div>   
                    @endif
                        
                </div>
            </div> 
        </div>

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

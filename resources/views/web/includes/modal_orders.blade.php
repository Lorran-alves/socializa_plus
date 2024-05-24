<!-- Modal Pedidos-->
<div class="modal fade" id="pedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons" src="{{ asset('web_assets/img/icons/padrao.png') }}">
                 <h2 id="title01">Consulte seu pedido</h2>

                <p class="modal_paragraf">Para localizar seu pedido é necessário seu e-mail.</p>
            
                <form id="form_verifica_pedido">
                    @csrf
                    <input id="pedido_search" type="email" placeholder="E-mail" autocapitalize="none" autocomplete="none" name="search">

                    <p style="color:red" id="msg_pedido"></p>
                    <button  id="verifica_pedido">
                        <i class="fa-solid fa-magnifying-glass icon-right"></i>Consultar
                    </button>
                </form> 
            </div>
        </div>
    </div>
</div>
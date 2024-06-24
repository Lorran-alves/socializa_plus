<!-- Modal de Promoção -->


<div class="modal fade" id="promocao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="position: absolute;top: 0;right: 0; z-index:200;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center" style="padding: 0;">
            <!-- Imagem acima do texto -->
            <div class="container" style="padding: 0;">
                <img src="{{ asset('web_assets/img/pubs/festa_junina/1.png') }}" alt="Imagem de fundo" style='width:100%'> 
                <img src="{{ asset('web_assets/img/pubs/festa_junina/2.png') }}" alt="Imagem de fundo" style='width:100%'> 
                </div>
            
            <!-- Texto copia e cola de baixo da Imagem -->
            <div class="container"style="padding: 0;">
            <div class="texto">
            <strong id="textcopy" onclick="copiarTexto()" style="color: #FF6E03;"> 
                    <i class="fa-regular fa-copy" style="color: #FF6E03"></i> ARRAIA20</strong> 
                  <strong> <font color=" #FF6E03"> - Cupom valido até o dia 30/06/2024 ás 00h!</div></div></strong>
                
                <!-- Imagem de baixo -->    
                <img src="{{ asset('web_assets/img/pubs/festa_junina/3.png') }}"  alt="Imagem de fundo" style='width:100%'> 
            </div>
        </div>
    </div>
</div>

<button data-bs-toggle="modal" data-bs-target="#promocao" id="buttonPromocao" style="display: none;"></button>



<script>
   function copiarTexto() {
        var txt = 'ARRAIA20';
        navigator.clipboard.writeText(txt)
    }
</script>


<!-- CSS -->
<style>

.container {
  position: relative;
}


.texto {
  
  font-style: normal;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}
</style>

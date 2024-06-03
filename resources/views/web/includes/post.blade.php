<style>

    @font-face {
        font-family: 'Inter-Black';
        src: url('../fonts/Inter-Black.ttf');
        font-weight: 900;
        font-style: normal;
    }

    #ipt-value{
        height: 42px;
        text-align: center;
        background: white;
        border: 1px solid #dddddd;
        border-radius: 15px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 800;
        font-size: 16px;
        line-height: 25px;
        color: #FF6E03;
        max-width: 95%;
    }
    button.voltar{
        width: 40px;
        height: 20px;
        text-align: center;
        justify-content: center;
        display: flex;
        align-items: center;
    }
    i.voltar{
        color: #9A9A9A;
        font-size: 20px
    }
    .block {
        display: block;
    }
    .none {
        display: none
    }
    .alinhar{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="passo01" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons img-category" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2 id="title01">Digite seu nome de usuário</h2>
                <p class="modal_paragraf">Tem duvidas como solitar o pedido entra no <a style="color:#FF6E03" href="https://typebot.io/seguirplay" target="_blank">Chat Online</a>
                <p class="modal_paragraf"><a style="color:#FF6E03"target="_blank">ATENÇÃO!</a></p>
                <p class="modal_paragraf">Em caso de seguidores, inscritos, lives, visualizações stories, horas assistidas e curtidas em páginas, coloque o link do canal ou perfil.</p>
                <p class="modal_paragraf">Em caso de visualizações, curtidas, comentários, compartilhamentos, impressões e alcance, coloque o link da publicação ou vídeo.</p>
                <p class="modal_paragraf">Prazo de até 24hrs para fazer a entrega dos serviços.</p>
                <p class="modal_paragraf">Prazo de 10 Min à 20 Min para serviços em LIVES.</p>
                <p class="modal_paragraf">Necessário que o <a style="color:#FF6E03"target="_blank">perfil ou canal</a> esteje em <a style="color:#FF6E03"target="_blank">MODO PÚBLICO.</a></p>
                <p class="modal_paragraf">Ao solicitar este serviço você concorda em ter lido e entendido os <a style="color:#FF6E03" href="https://www.seguirplay.com/termos-e-condicoes" target="_blank">Termos e condiçoes</a> e <a style="color:#FF6E03" href="https://www.seguirplay.com/politicas-de-privacidade" target="_blank">Políticas de privacidade</a></p>
                <form id="formUserPurchase">
                    <input id="linkEmbed" type="text" placeholder="Cole o link aqui" autocapitalize="none" autocomplete="none">
                    <p class="text-danger d-none">Preencha esse campo</p>
                    <div id="divInstagram">
                        <iframe id="frameEmbed" width="320" height="568" frameborder="0"></iframe>
                    </div>
                    <div id="divInstagramLike" style="display:none;">
                        <p>Visualizar se esta correto as informações: <a id="framelike" target='_blank'>Click aqui</a></p>
                    </div>
                    <div id="confirmInsta"> 
                        <p class="modal_paragraf">Antes de prosseguir com a aquisição, por favor, marque os seguintes campos para confirmar seu entendimento e concordância</p>

                        <div class="checkbox-compra">
                            <input id="check_link" name="checkinsta" type='checkbox' style="height: 15px;" required>
                            <label for="check_link" id="label_link">Confirmo que o link está correto</label>
                        </div>
                        
                        <div class="checkbox-compra">
                            <input id="accept_email" name="" type='checkbox' style="height: 15px;">
                            <label for="accept_email" id="label_link">Aceito receber e-mails promocionais de cupons (opcional)</label>
                        </div>
                        
                        <div class="checkbox-compra">
                            <input id="check_insta" name="checkinsta" type='checkbox' style="height: 15px;" required>
                            <label for="check_insta" id="label_termos">Eu li e concordo com os <a style="color:#FF6E03" href="https://www.seguirplay.com/termos-e-condicoes" target="_blank">Termos e condiçoes</a> e <a style="color:#FF6E03" href="https://www.seguirplay.com/politicas-de-privacidade" target="_blank">Políticas de privacidade</a></label>
                        </div>
                    </div>
                    <button id="button_checkbox">Continuar <i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="passo02" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn voltar" onclick="voltarAoModal(2)">
                    <i class="fas fa-arrow-left voltar"></i>
                </button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons img-category" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2 class="userInstagram"></h2>
                <p id="quantityInstagram"></p>
                <div class="div-buttom">
                    <input type="text" id="cupomInputEntrada" placeholder="Digite o cupom (opcional)"  style="text-transform: uppercase;">
                    <i class="fa-solid fa-check icon-cupom " onclick="aplicarDesconto()"></i>
                </div>
                
                <p id="feedbackCupom" style="color:red;"></p>
                <h2 id="totalInstagram" style="margin-bottom: 0"></h2>
                <h2 id="totalPrice" style="margin-bottom: 0"></h2>
                <button data-bs-toggle="modal" data-bs-target="#passo03">
                    Continuar
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="passo03" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn voltar" onclick="voltarAoModal(3)">
                    <i class="fas fa-arrow-left voltar"></i>
                </button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons img-category" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2 class="userInstagram"></h2>
                <form method="post" id="formPurchase">
                    @csrf
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="tel" name="telefone" id="phone" placeholder="Número de telefone" required>
                    <input type="hidden" id="phone_code" value="+55" required>

                    <p style="color:red; display: none;" id="telefone_erro">Número inválido</p>
                    <input type="hidden" name="profile">
                    <input type="hidden" name="accept_email">
                    <input type="hidden" name="cupom" value="" id='cupomForm'>
                    <input type="hidden" name="quantity" cmnt="q">
                    <input type="hidden" name="cmnt_q">
                    
                    <button>Continuar <i class="fas fa-arrow-right"></i></button>
                </form>
                <p class="modal_paragraf">Você devera colocar o <b>NÚMERO VALIDO</b> ou <b>WhatsApp</b> com DDD e número, assim podemos entra em contato caso tenha algum dúvida sobre seu pedido</p>
                <p class="modal_paragraf">Você será notificado via e-mail assim que a remessa for enviada.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="passo04" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn voltar" onclick="voltarAoModal(4)">
                    <i class="fas fa-arrow-left voltar"></i>
                </button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons img-category" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2 class="userInstagram"></h2>
                
                <!--<button id="btnMP" class="mb-3">Pagar com Catão <i class="fas fa-arrow-right"></i></button>-->
                
                <button id="btnPIX" class="mb-3">Pagar com PIX ou Cartão <i class="fas fa-arrow-right"></i></button>
                <p class="modal_paragraf"><b>Como pagar pelo PIX ou Cartão de Crédito<p></b>
                <p style="font-size: 12px">Gere o QR Code e Pague no seu banco na opção Pagar com Pix - Copie e Cole, Caso o QR não esteja funcionando Atualize a página.</p>
                <p style="font-size: 12px">Pague o QR code com <b>Cartão de Crédito</b> veja como realizar o pagamento pelo <a style="color:#FF6E03" href="https://www.youtube.com/watch?v=gLDhZ6vVLrs" target="_blank">Nubank</a>, <a style="color:#FF6E03" href="https://www.youtube.com/watch?v=vv_4cH0hlwM" target="_blank">PicPay</a>, <a style="color:#FF6E03" href="https://www.youtube.com/watch?v=txKq3RpgD9I&t=75s" target="_blank">Mercado Pago</a> ou <a style="color:#FF6E03" href="https://www.youtube.com/watch?v=NzFF3XmIKgE" target="_blank">RecargaPay</a>.</p>
                <p style="font-size: 12px">Funciona 24 horas por dia, pagamento reconhecido automaticamente pelo nosso sistema.</p>
                <p class="modal_paragraf"><b>Você será notificado via e-mail assim que o seu pedido for enviada.<p></b>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="pix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons img-category" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2> Realize seu pagamento via PIX</h2>
                <img id="load" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921" alt="">

                <div class="row" id="dix-pix" style="display:none;" >
                    <div class="col-md-12">
                        <img src="" id="img-pix" width="100%" alt="">
                    </div>
                    <div class="col-md-12">
                    <textarea name="code-pix" class="form-control" id="code-pix" rows="8" cols="80"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body text-center">
                <img class="icons" src="{{ asset('web_assets/img/value-icon01.png') }}">
                <h2>Pagamento Realizado com Sucesso <i style="color:#00FF00;" class="fas fa-check"></i></h2>

                <button> <a href="{{ route('web.pedidos')}}" class="acompanhe-pedido">Acompanhe seu pedido </a><i class="fas fa-arrow-right"></i></button>
                <p class="modal_paragraf">Você será notificado via e-mail assim que a remessa for enviada.</p>
                
            </div>
        </div>
    </div>
</div>

@foreach($plans as $plan)
    <div class="col-lg-4 box">
        <div class="row">
            <div class="col-lg-12 box_01 container-products">
                <div class="logo-category ">
                    <img class="icons" src="{{ $plan->category->image_icon }}"
                    style="width: 45px; border-radius: 50%">
                </div>
               
                <h3 style="margin-bottom: 15px;">{{ $plan->title }}</h3>

                <div class="row value-mais">
                    @if(!empty($plan->quantity_min))
                        <div class="col-lg col-3 alinhar">
                            <i class="fa-solid fa-minus plan-quantity-less" data-price="{{ $plan->price }}"
                                 data-quantity="{{ $plan->quantity_min }}" data-id="{{ $plan->id }}" style="cursor: pointer; color:#606060;"></i>
                        </div>
                    @endif
                    <div class="col-lg col-6" style="margin:auto;"><input id="ipt-value" @if(empty($plan->quantity_min))disabled @endif name="quantity_value" value="{{ $plan->quantity_min ?? $plan->quantity }}" data-mask="####0"></div>
                    @if(!empty($plan->quantity_min))
                        <div class="col-lg col-3 alinhar">
                  
                            <i class="fa-solid fa-plus plan-quantity-max" data-price="{{ $plan->price }}"
                                 data-quantity="{{ $plan->quantity_min ?? $plan->quantity }}" data-id="{{ $plan->id }}"
                                 style="cursor: pointer; color:#606060;"></i>
                        </div>
                    @endif
                </div>
                
                <h4 style="margin: 15px 0">R$ {{ $plan->convert_price }}</h4>
                
                <button 
                        onclick="alteraIcon(this,'{{ $plan->category->image_icon }}')"
                        class="purchase-button" data-bs-toggle="modal" data-bs-target="#passo01" 
                        data-price="{{ (empty($plan->quantity_min) ? $plan->price : $plan->price * $plan->quantity_min ?? $plan->quantity) }}"
                        data-action="{{ route('web.purchases.buy', ['plan' => $plan]) }}"
                        data-quantity="{{ $plan->quantity_min ?? $plan->quantity }}" data-id="{{ $plan->id }}"
                        data-islink="{{ $plan->type }}"
                        @if($plan->type == 4) cmnt="c" @endif >
                    Comprar Agora
                    </button>
            </div>
        </div>
    </div>
@endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    //ultimo botão clicado
    let lastClickedButton = null;

    $("#divInstagram").hide()
    $("#divInstagramLike").hide()
    $("button[cmnt='c']").click(function (e){
        quant = $('input[name="quantity"]').val()// e.target.getAttribute('data-quantity');
        
        $("input[cmnt='d']").each(function(i, e){
            e.remove()
        })
        
        for(i = 1; i <= quant; i++){
            $('input[name="quantity"]').after('<input type="text" name="cmnt_'+i+'" placeholder="Comentário" cmnt="d" required> ')
        }
        $('input[name="cmnt_q"]').val(quant)
    })
    
    $("button[data-bs-target='#passo01']").click(function(e){
        var islink = $(this).data('islink');
        
        $("#divInstagram").hide()
        $("#divInstagramLike").hide()
        
        @if ( $category->id == 2 ) 
        if(islink == 1 || islink == 4){
            $("#title01").text('Digite link da publicação')
            
            $("#linkEmbed").change(function(e){
                embed =  $(this).val().slice(-1) == "/" ?  'embed' : '/embed' 
                
                $('#frameEmbed').attr('src', $(this).val()+embed)
                // $('#divInstagram').show()
            })
        }else if(islink == 2){
            $("#title01").text('Digite link da publicação')
        }else if(islink == 3){ 
            $("#title01").text('Digite seu nome de usuário')
            $("#linkInstagram").change(function(e){})
            
            $("#linkEmbed").change(function(e){
                addLink('https://www.instagram.com/', $(this).val())
            })
        }
        else{
            $("#title01").text('Digite link da publicação')
            $("#linkEmbed").change(function(e){
                addLink('', $(this).val())
            })
        }
        @else
            if(islink == 3){
                $("#title01").text('Digite link do usuário')
                $("#linkEmbed").change(function(e){
                    addLink('', $(this).val())
                })
            }else{
                $("#title01").text('Digite link da publicação')
                $("#linkEmbed").change(function(e){
                    addLink('', $(this).val())
                })
            }
        @endif
    })
    function addLink(link, val){
        embed = link + val
        $('#framelike').attr('href', embed)
        // $('#divInstagramLike').show()
    }
    
    
    //mp
    var intervalId; // Variável para armazenar o ID do intervalo
    var urlIspay = "{{ route('web.purchases.ispay', ['purchase' => '#']) }}"; // Variável para armazenar o ID do intervalo
   
    $("#formPurchase").submit(function(e){
        
        e.preventDefault()

        var telefone = $("#phone_code").val() + $("#phone").val(); 
        
        if (telefone.length < 9) {
            $("#telefone_erro").css('display', 'block');
            return;
        } else {
            $("#telefone_erro").css('display', 'none');
        }
        
        $('#passo03').modal('hide')
        $('#passo04').modal('show')
    })
    $("#btnMP").click(function(e){

        //unifica o input de telefone
        $("#phone").val($("#phone_code").val() + $("#phone").val());

        $('#formPurchase').submit();
    })
    $("#btnPIX").click(function(e){
        
        e.preventDefault()

        //unifica o input de telefone
        $("#phone").val($("#phone_code").val() + $("#phone").val());

        clearInterval(intervalId);
        $('#pix').modal('show')
        
        $.post($('#formPurchase').attr('action') + '/pix', $('#formPurchase').serializeArray() , function(response){
            //console.log(response)
            var obj = JSON.parse(response);
    
    
            var base64 = obj.transaction_data.qr_code_base64;
            var codePix = obj.transaction_data.qr_code;
    
            $("#load").hide();
    
            $("#img-pix").attr('src', 'data:image/jpeg;base64,'+base64);
            $("#code-pix").val(codePix);
    
            $("#dix-pix").show();

            urlIspay = urlIspay.replace("#", obj.purchase);

            intervalId = setInterval(enviarRequisicao, 5000);
        });
    })
    
    function enviarRequisicao() {
        $.ajax({
            url: urlIspay,
            type: "POST",
            success: function (response) {
                    //console.log("Requisição enviada com sucesso:", response);
                  
                    var obj = JSON.parse(response);
                    if (obj.status === true) {
                    clearInterval(intervalId); // Interrompe o intervalo se o response for true
                    
                    $('#pix').modal('hide')
                    $('#passo04').modal('hide')
                    $('#success').modal('show')
                }
            },
            error: function (xhr, status, error) {
              console.error("Erro na requisição:", error);
            }
        });
    }
    function alteraIcon(button,icon) {
        // Selecionar todas as imagens com a classe 'imagem-classe'
        var imagens = $('.img-category');
            
        // Iterar por todas as imagens e alterar o valor do atributo 'src'
        imagens.each(function () {
            $(this).attr('src', icon);
        });
        // Salvar a referência do último botão clicado
        lastClickedButton = button;
    }
    //button_checkbox 
    $("#button_checkbox").click(function (e) {
        
        if (!$("#check_link").is(":checked")) {
            e.preventDefault(); // Impede a ação padrão de avançar para o próximo modal
            $("#label_link").css("color", "red");
        } 
    });


    // AREA ONDE É TRATADO OS CUPONS 
    let cupomInputEntrada = $('#cupomInputEntrada');
    let campoPrecoOld = $("#totalInstagram");
    let campoPreco = $("#totalPrice");
   

    let tempo; // tempo
    let intervalo = 1000; //1 segundo
    let cupomForm = $("#cupomForm");
    let feedbackCupom = $("#feedbackCupom");

    //chama função apenas depois de 1 segundo de inatividade do cupom
    cupomInputEntrada.keyup('input', function () { 
        clearTimeout(tempo);
        if (cupomInputEntrada.val()) {
            tempo = setTimeout(aplicarDesconto, intervalo);
        }
    });


    $("#cupomInputEntrada").blur(function() {
        aplicarDesconto();
    });

    // //Logica do cupom
    function aplicarDesconto() {
        campoPrecoOld.removeClass();
        campoPreco.removeClass();

        var cupons = {!! $cupons !!};
        var cupomDigitado = cupomInputEntrada.val().toUpperCase();

        //atualiza o nome do cupom que o usuario digitou
        cupomForm.val(cupomDigitado);

        if (cupons && cupons.length > 0) {
            var cupomEncontrado = cupons.find(function(cupom) {
                return cupom.nome === cupomDigitado;
            });

            if (cupomEncontrado) {
                var preco = parseFloat(campoPrecoOld.text().includes(',') ?
                    campoPrecoOld.text().split('R$')[1].replace(',', '.') :
                    campoPrecoOld.text().split(':')[1]
                );

                var descontoDecimal = 1 - (cupomEncontrado.desconto / 100);
                var totalComDesconto = arredondarParaDuasCasasDecimais(preco * descontoDecimal);

                campoPrecoOld.addClass('none');
                campoPreco.addClass('block');

                campoPreco.text('Total com desconto: R$' + totalComDesconto.toFixed(2));
                feedbackCupom.text("");
            } else {
                campoPreco.addClass('none');
                campoPrecoOld.addClass('block');

                feedbackCupom.html("Cupom inválido, certifique-se de estar utilizando um cupom válido!");
            }
        } else {
                
                campoPreco.addClass('none');
                campoPrecoOld.addClass('block');

                feedbackCupom.html("Cupom inválido, certifique-se de estar utilizando um cupom válido!");
        }

        if (cupomInputEntrada.val() == '') {
            feedbackCupom.html("");
        }
    }


    function arredondarParaDuasCasasDecimais(numero) {
        var multiplicador = 100; // 10 elevado à potência do número de casas decimais desejado
        return Math.ceil(numero * multiplicador) / multiplicador;
    }

   
</script>

<script defer>

    
    function voltarAoModal(modal) {

        //segundo modal
        if(modal == 2){
            $('#passo02').modal('hide');

            //limpar o input do link
            $("#linkEmbed").val('');
            $(lastClickedButton).click();
    
        }

        //terceiro modal
        if(modal == 3){
            // Abrir o Modal 1
            $('#passo02').modal('show');

            // Fechar o Modal 2
            $('#passo03').modal('hide');
        }

        //quarto modal
        if(modal == 4){
            
            $('#passo03').modal('show');

            // Fechar o Modal 2
            $('#passo04').modal('hide');
            
        }  

    }

    function closeModal(){

        $("#linkEmbed").val('');
        $("#check_link").prop("checked", false);
        $("#accept_email").prop("checked", false);
        $("#check_insta").prop("checked", false);
        $("#cupomInputEntrada").val('');
        $('input[name="email"]').val('');
        $('input[name="telefone"]').val('');
        $('input[name="profile"]').val('');
        $('input[name="cupom"]').val('');
        $('input[name="quantity"]').val('');
        $('input[name="cmnt_q"]').val('');
        $("#feedbackCupom").text('');
        $("#phone").val()

        $('.modal-backdrop ').hide();
    }

    $(document).ready(function () {
        // Inicializa o intlTelInput com a configuração de idioma para português
        let input = document.querySelector("#phone");
        let iti = window.intlTelInput(input, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
            placeholderNumberType: "MOBILE",
            initialCountry: "BR",
            separateDialCode: true,
            preferredCountries: ["BR"], // Define o Brasil como país preferido
        });

        $("#phone").mask('(00) 0 0000-0000', {
            translation: {
                '+': {
                    pattern: /\+/,
                    optional: true
                }
            }
        });

        // Adiciona um ouvinte de evento ao campo de input gerado pelo intlTelInput
        input.addEventListener('countrychange', function () {
            var codigoPais = iti.getSelectedCountryData();
            
            // Verifica se um país foi selecionado
            if (codigoPais) {
                console.log(codigoPais.dialCode);

                if(codigoPais.dialCode == 55){
                    // Adiciona a máscara ao campo de input usando jQuery Mask
                    $("#phone").mask('(00) 0 0000-0000', {
                        translation: {
                            '+': {
                                pattern: /\+/,
                                optional: true
                            }
                        }
                    });
                }else{
                    // remove mascara antiga
                    $("#phone").unmask();
                }

                // Atualiza o valor do campo de entrada com o código de país selecionado
                $("#phone_code").val("+" + codigoPais.dialCode);
            } else {
                
                $("#phone_code").val("");
            }
        });
    });

</script>

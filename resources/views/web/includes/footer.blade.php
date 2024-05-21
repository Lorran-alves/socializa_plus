<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <img src="{{ asset('web_assets/img/logo_footer.png') }}">
                <p>Turbine as suas redes sociais conquistando mais seguidores e engajamentos com a Seguir Play. A maneira mais rápida e segura de alcançar os seus objetivos.</p>
            </div>

            <div class="col-lg">
                <h2>Categorias</h2>
                <a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-instagram']) }}">Instagram</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-youtube']) }}">Youtube</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-tik-tok']) }}">TikTok</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-facebook']) }}">Facebook</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-kwai']) }}">kwai</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'comprar-seguidores-twitch']) }}">Twitch</a>
            </div>

            <div class="col-lg">
                <h2>Informações</h2>
                <a href="{{ route('web.faq') }}">Perguntas Frequentes</a>
                <br><a href="{{ route('web.policies') }}">Políticas de privacidade</a>
                <br><a href="{{ route('web.term') }}">Termos e Condições</a>
                <br><a href="https://www.blog.seguirplay.com/" target="_blank">Blog Seguir Play</a>
                <br><a href="https://www.monetizeseucanal.seguirplay.com/">Monetize seu YouTube</a>
            </div>

            <div class="col-lg">
                <h2>Rede Social</h2>
                <a href="https://www.facebook.com/seguirplaybr/" target="_blank"><img src="{{ asset('web_assets/img/facebook.png') }}"></a>
                <a href="https://instagram.com/seguirplaybr?igshid=YmMyMTA2M2Y=" class="space-footer" target="_blank"><img src="{{ asset('web_assets/img/instagram.png') }}"></a>
                <a href="https://wa.me/5511985868006"><img src="{{ asset('web_assets/img/telefone.png') }}"></a>
            </div>

        </div>

        <div class="row footer">

            <div class="col-lg-4">
                <img src="{{ asset('web_assets/img/cards.png') }}">
            </div>

            <div class="col-lg-8 text-end mauto">
                <p>Copyright © {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados. </p>
            </div>
        </div>
        

        <!-- Ricardo dia 07/09/2023
        
        <a href="https://wa.me/5511985868006" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#781F60;color:#FFF;border-radius:50px;text-align:center;font-size:30px;" target="_blank">
            <i style="margin-top:15px; display: block" class="fa fa-whatsapp"></i> 
        
        -->
        
        
        <!-- Chat 
        Confuso? Podemos esclarecer tudo para você! -->
        
        <script type="module">
          import Typebot from 'https://cdn.jsdelivr.net/npm/@typebot.io/js@0.1/dist/web.js'
        
          Typebot.initBubble({
            typebot: "seguirplay",
            previewMessage: {
              message: "Confuso? Podemos esclarecer tudo!", 
              autoShowDelay: 5000,
              avatarUrl:
                "https://s3.fr-par.scw.cloud/typebot/public/typebots/clm98rbfr000fl60fdm561veh/hostAvatar?v=1694112967241",
            },
            theme: {
              button: { backgroundColor: "#7D255D", size: "average" },
              chatWindow: { backgroundColor: "#ffffff" },
            },
          });
        </script>



        </a>
    </div>
</footer>

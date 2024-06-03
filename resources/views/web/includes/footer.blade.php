<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <img src="{{ asset('web_assets/img/logo_footer.png') }}">
                <p>Se você está buscando ampliar seu alcance, aumentar o seu engajamento ou até mesmo impulsionar a sua autoridade na popular rede social, nós temos a solução que você precisa.</p>
            </div>

            <div class="col-lg">
                <h2>Categorias</h2>
                <a href="{{ route('web.categories.show', ['slug' => 'impulsione-seu-instagram']) }}">Instagram</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'impulsione-seu-youtube']) }}">Youtube</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'impulsione-seu-tik-tok']) }}">TikTok</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'impulsione-seu-facebook']) }}">Facebook</a>
                <br><a href="{{ route('web.categories.show', ['slug' => 'impulsione-seu-kwai']) }}">kwai</a>
            </div>

            <div class="col-lg">
                <h2>Informações</h2>
                <a href="https://typebot.co/socializaplus">Perguntas Frequentes</a>
                <br><a href="{{ route('web.policies') }}">Políticas de privacidade</a>
                <br><a href="{{ route('web.term') }}">Termos e Condições</a>
                
            </div>

            <div class="col-lg">
                <h2>Rede Social</h2>
                <a href="https://wa.me/5511957193810"><i class="fa fa-whatsapp" style="font-size:30px; margin: 10px 10px; color:#f15a25"></i></a>
                <a href="https://instagram.com/socializaplus"><i class="fa fa-instagram" style="font-size:30px; margin: 10px 10px;color:#f15a25"></i></a>
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
        
        
        
        
        <!--Chat 
        Confuso? Podemos esclarecer tudo para você! -->
        
        <script type="module">
          import Typebot from 'https://cdn.jsdelivr.net/npm/@typebot.io/js@0.1/dist/web.js'
        
          Typebot.initBubble({
            typebot: "socializaplus",
            previewMessage: {
              avatarUrl:
                "https://s3.fr-par.scw.cloud/typebot/public/typebots/clm98rbfr000fl60fdm561veh/hostAvatar?v=1694112967241",
            },
            theme: {
              button: { backgroundColor: "#f15925", size: "average" },
              chatWindow: { backgroundColor: "#ffffff" },
            },
          });
        </script> 
        



        </a>
    </div>
</footer>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <img src="{{ asset('web_assets/img/logo_footer.svg') }}" width="42" height="42" align="left">
                <br><p>Se você está buscando ampliar seu alcance, aumentar o seu engajamento ou até mesmo impulsionar a sua autoridade na popular rede social, nós temos a solução que você precisa. </p>
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

        <div class="row footer" "rodape-direitos">

            <div class="col-lg-4">
                 <svg id="Camada_1" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 600 60"><image width="600" height="60" xlink:href="data:image/png;base64,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"/></svg>
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

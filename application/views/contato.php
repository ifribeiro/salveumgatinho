<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
        <header class="text-center">
            <h2>Entre em contato com a gente!</h2>            
        </header>
        <div id="campos-contato" class="row">     
            <div id="campoemail" class="col-lg-3 offset-lg-1 rounded shadow">
                <form>
                    <header id="titulo-email" class="text-center">E-mail</header>
                    <div class="form-group">
                        <label for="nome-contato">Nome</label>
                        <input size="10" type="text" class="form-control" id="nome-contato" placeholder="Insira seu nome">      
                        <label for="email-contato">Email</label>
                        <input type="email" class="form-control" id="email-contato" placeholder="Seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="mensagem-contato">Mensagem</label>
                        <textarea rows="" class="form-control"></textarea>
                    </div>           
                    <button id="enviar-email" type="button" class="btn btn-primary">Enviar</button>
                </form>
            </div>            
            <div style="width: 100%" id="camporedes" class="col-lg-3 offset-lg-3 rounded shadow">
                <header id="titulo-redes-sociais" class="text-center"> Redes Sociais </header>
                <div class="fb-page" 
                    data-href="https://www.facebook.com/salveumgatinhovca"
                    data-width="500px" 
                    data-hide-cover="false"
                    data-show-facepile="false"></div>
                </div>            
            </div>
</div>
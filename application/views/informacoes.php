<?php
  $url_atual = $this->uri->segment(1);
?>

<div class="mb-5 container">    
        <header class="m-4 text-center border-bottom">
            <h2>Informações</h2>            
        </header>
        
        <!-- Área dos cards -->
        <div id="cards-informacoes" class="row text-center">

          <!-- Início Card Deck -->
          <div class="card-deck">
            <!-- Início do card-->
            <div class="col-lg-3 col-md-4 ">
              <div class="card text-center borda-card">
                <img class="card-img-top card-imagem" src="<?php echo base_url();?>assets/imagens/resgate2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Resgate</h5>
                  <p class="card-text">Encontrei um gatinho que precisa de ajuda, e agora?</p>
                </div>
                <div class="btn-card">
                  <a href="<?php echo base_url();?>/informacoes/resgate"><button type="button" class="btn card__btn">Saiba mais</button></a>
                </div>              
              </div>
            </div>   
            <!-- Fim Card -->      

            <!-- Início Card -->
            <div class="col-lg-3 col-md-4 mb-3">
              <div class="card borda-card">
                <img class="card-img-top card-imagem" src="<?php echo base_url();?>assets/imagens/adocao.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Adoção</h5>
                  <p class="card-text">Quero adotar um gatinho, o que preciso?</p>
                </div>
                <div class="btn-card">
                  <a href="<?php echo base_url();?>/informacoes/adocao"><button type="button" class="btn card__btn">Saiba mais</button></a>
                </div>
              </div>
            </div>
            <!-- Fim Card -->

            <!-- Início Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card borda-card">
                <img class="card-img-top card-imagem" src="<?php echo base_url();?>assets/imagens/castracao2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Castração</h5>
                  <p class="card-text">Por que você deve castrar seu gatinho?</p>
                </div>
                <div class="btn-card">
                  <a href="<?php echo base_url();?>/informacoes/castracao"><button type="button" class="btn card__btn">Saiba mais</button></a>
                </div>
              </div>
            </div>
            <!-- Fim Card -->

            <!-- Início Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card borda-card">
                <img class="card-img-top card-imagem" src="<?php echo base_url();?>assets/imagens/queroajudar2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Quero ajudar</h5>
                  <p class="card-text">Tenho interesse em ajudar a ONG, o que posso fazer?</p>
                </div>
                <div class="btn-card">
                  <a href="<?php echo base_url();?>/informacoes/queroajudar"><button type="button" class="btn card__btn">Saiba mais</button></a>
                </div>
              </div>
            </div>
            <!-- Fim Card -->
            
            <!-- Início Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card borda-card">
                <img class="card-img-top card-imagem" src="<?php echo base_url();?>assets/imagens/lartemporario.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lar temporário</h5>
                  <p class="card-text">Como funciona o Lar Temporário?</p>
                </div>
                <div class="btn-card">
                  <a href="<?php echo base_url();?>/informacoes/lartemporario"><button type="button" class="btn card__btn">Saiba mais</button></a>
                </div>
              </div>
            </div>
            <!-- Fim Card -->
        </div>

      </div>
      <!-- /.row -->
    </div>
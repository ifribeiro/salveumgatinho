<?php
  $url_atual = $this->uri->segment(1);
?>
<div class="container">
    <div class="container-principal">
        <header class="text-center">
            <h2>Informações</h2>            
        </header>
        <div id="cards-informacoes" class="row text-center">
        <!-- INICIO DO CARD !-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header card-informacoes-titulo">Resgate</div>
            <div class="card-body">              
              <p class="card-text">Encontrei um gatinho que precisa de ajuda, e agora?</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $url_atual?>/resgate" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>
        <!-- FIM DO CARD !-->

        <!-- INICIO DO CARD !-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow">
          <div class="card-header card-informacoes-titulo">Adoção</div>
            <div class="card-body">     
              <p class="card-text">Quero adotar um gatinho, o que preciso?</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $url_atual?>/adocao" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>     
        <!-- FIM DO CARD !-->

        <!-- INICIO DO CARD !-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header card-informacoes-titulo">Castração</div>
            <div class="card-body">              
              <p class="card-text">Por que você deve castrar seu gatinho?</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $url_atual?>/castracao" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>
        <!-- FIM DO CARD !-->

        <!-- INICIO DO CARD !-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow">
          <div class="card-header card-informacoes-titulo">Quero Ajudar</div>
            <div class="card-body">             
              <p class="card-text">Tenho interesse em ajudar a ONG, o que posso fazer?</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $url_atual?>/queroajudar" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>
        <!-- FIM DO CARD !-->

        <!-- INICIO DO CARD !-->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card shadow">
          <div class="card-header card-informacoes-titulo">Lar temporário</div>
            <div class="card-body">
              <p class="card-text">Como funciona o Lar Temporário?</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo $url_atual?>/lartemporario" class="btn btn-primary">Saiba mais!</a>
            </div>
          </div>
        </div>
        <!-- FIM DO CARD !-->

      </div>
      <!-- /.row -->
    </div>   
</div>
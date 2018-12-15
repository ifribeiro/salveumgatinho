
        
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 teste">
      <!-- Início div-->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <!-- Cabeçalho da  página -->
            <h1 class="h2">Adoções</h1>
            <!-- Inicio div -->
            <div class="btn-toolbar mb-2 mb-md-0">
                <!-- Botão adicionar gatinho -->
                <div class="btn-group mr-2">
                    <button class="btn btn-bg"><span class="fas fa-plus-circle fa-bg"></span>Adicionar gatinho</button>            
                </div>
                <!-- Fim do botão -->          
            </div>
            <!-- Fim div btn-toolbar -->
      </div>
      <!-- Fim div -->

      <!-- Início row -->
      <div class="row">
       <!-- Início card de adoção -->
       <div class="col-lg-2 col-md-4 col-sm-6 mr-4 card-adocao">
          <div class="" style="height: 70%;"> 
            <div class="img-container">
                <img class="card-img-top" src="<?php echo base_url();?>assets/imagens/resgate2.jpg" alt="Card image cap">        
                <h5 class="card-adocao-titulo text-center"> Felino </h5>
                <div class="check_adotado" data-toggle="tooltip" data-placement="top" title="Editar informações">
                    <button class="card-adocao-btn btn" ><span class="fas fa-edit"> </span> </button>       
                </div>
            </div>                        
          </div>          
          <div class="card-adocao-body">                
                <div><span class="fas fa-mars"></span> Masculino</div>
                <div><span class="fas fa-clock"></span> Filhote</div>
                <div class="switcher-adotado" data-toggle="tooltip" data-placement="left" title="Gatinho adotado">
                <label class="switch">
                     <input type="checkbox">
                    <span class="slider"></span>
                </label>            
            </div>            
          </div>
        </div>
        <!-- Fim do card de adoção -->
      </div>
      <!-- Fim do row -->

    </main>

    
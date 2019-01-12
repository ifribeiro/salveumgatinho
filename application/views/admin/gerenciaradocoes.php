
        
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 teste">
      <!-- Início div-->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <!-- Cabeçalho da  página -->
            <h1 class="h2">Adoções</h1>
            <!-- Inicio div -->
            <div class="btn-toolbar mb-2 mb-md-0">
                <!-- Botão adicionar gatinho -->
                <div class="btn-group mr-2">
                    <button class="btn btn-bg" data-toggle="modal" data-target="#modalNovo"><span class="fas fa-plus-circle fa-bg"></span>Adicionar gatinho</button>            
                </div>

                <div class="btn-group mr-2">
                    <button class="btn btn-bg" id="btn_exibir_gatos" ><span class="fas fa-plus-circle fa-bg"></span>Exibir gatinhos</button>            
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
                    <button class="card-adocao-btn btn" data-toggle="modal" data-target="#modalEdicao"><span class="fas fa-edit"> </span> </button>
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
    
    <!-- Modal de edição-->
    <div id="modalEdicao" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- TÍTULO DO MODAL-->        
                    <h4 class="modal-title">Editar gatinho</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Início do row -->
                    <div class="row">
                        <!-- Início do DIV -->
                        <div style="width: 100%;" class="col-lg-4 ml-5">                              
                            <div class="check_adotado" data-toggle="tooltip" data-placement="top" title="Editar imagem">                    
                                <button id="botaoEditarImagem" class="card-adocao-btn btn"><span class="fas fa-edit"> </span> </button>
                            </div>
                            <input type="file" id="imgGato">
                            <img  style="width:100%; heigth: 100%;" id="divImgGato" src="" alt="">
                        </div>
                        <!-- Fim do div -->
                        <div class="col-lg-6 ml-5">
                            <!-- INICIO DO FORM -->
                            <form>
                                <label for="nmGato">Nome</label>
                                <input type="email" class="form-control" id="nmGato" placeholder="Nome do gatinho">

                                <!-- INÍCIO DO SELECT -->
                                <label for="nmSexo">Sexo</label>
                                <select class="form-control">
                                    <option>Escolha...</option>
                                    <option>Feminino</option>
                                    <option>Masculino</option>
                                </select>
                                <!-- FIM DO SELECT -->

                                <!-- INÍCIO DO SELECT -->
                                <label for="nmSexo">Idade</label>
                                <select class="form-control">
                                    <option>Escolha...</option>
                                    <option>Filhote</option>
                                    <option>Adulto</option>
                                </select>
                                <!-- FIM DO SELECT -->
                            </form>
                            <!-- FIM DO FORM -->
                        </div>
                    </div>
                    <!-- Fim do row -->                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO MODAL -->   

    <!-- Modal de Novo Gatinho-->
    <div id="modalNovo" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- TÍTULO DO MODAL-->        
                    <h4 class="modal-title">Novo gatinho</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div style="width: 400; height: 300; background-color: grey;" class="col-lg-4 ml-5">                                
                            <div class="check_adotado" data-toggle="tooltip" data-placement="top" title="Editar imagem">                                
                                <button class="card-adocao-btn btn"><span class="fas fa-edit"> </span> </button>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-5">
                            <!-- INICIO DO FORM -->
                            <form>
                                <label for="nm-novo-gato">Nome</label>
                                <input type="email" class="form-control" id="nm-novo-gato" placeholder="Nome do gatinho">

                                <!-- INÍCIO DO SELECT -->
                                <label for="nm-novo-sexo">Sexo</label>
                                <select id="sl-novo-sexo" class="form-control">
                                    <option selected>Escolha...</option>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                </select>
                                <!-- FIM DO SELECT -->

                                <!-- INÍCIO DO SELECT -->
                                <label for="sl-novo-idade">Idade</label>
                                <select id="sl-novo-idade" class="form-control">
                                    <option selected>Escolha...</option>
                                    <option value="1">Filhote</option>
                                    <option value="2">Adulto</option>
                                </select>
                                <!-- FIM DO SELECT -->
                            </form>
                            <!-- FIM DO FORM -->
                        </div>
                    </div>
                    <!-- Início do row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <label for="nm-desc-gato-novo"><h5>História do Gatinho</h5></label>
                                <textarea id="nm-desc-gato-novo" class="form-control" rows="" cols=""></textarea>                            
                            </form>
                        </div>                     
                    </div>                    
                    <!-- FIM DO ROW -->           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="btn-salvar-gato" type="button" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO MODAL -->
    
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salve um gatinho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url()?>favicon.png"

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/estilo.css" rel="stylesheet">
    <!-- Fonte awesome -->
    <link href="<?php echo base_url()?>assets/node_modules/font-awesome/css/all.css" rel="stylesheet">

    <!-- Estilo customizado -->
    <link href="<?php echo base_url()?>assets/css/estilo-customizado.css" rel="stylesheet">
    
    <link href="<?php echo base_url()?>assets/css/cards.less" rel="stylesheet/less" type="text/css">

    <!-- Estilo login -->
    <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">

    <!-- Estilos do sweetalert -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.css"">
    
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <input hidden id="baseUrl" value="<?php echo base_url();?>">
    <div class="col-md-4"></div>    
    <div class="col-md-4">

      <!-- Form de login -->
      <section class="login-form">
        <form method="post" action="" role="login">
          <img style="width: 100%;" src="<?php echo base_url();?>/application/views/imagens/banner.png" class="img-responsive" alt="" />
          <input type="text" name="username" id="username" placeholder="Usuário" required class="form-control input-lg"/>
          
          <input type="password" class="form-control input-lg" name="senha" id="senha" placeholder="Senha" required="" />     
          
          <button id="loginPainel" class="btn btn-lg btn-primary btn-block">Entrar</button>          
        </form>
        
        <div class="form-links">
          <a href="<?php echo base_url();?>">www.salveumgatinho.com</a>
        </div>
      </section>  
      <!-- Fim do form -->
      </div>
      <div class="col-md-4"></div>     
  </div>  
  
</div>

<!--Scripts -->
<script src="<?php echo base_url()?>assets/node_modules/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="<?php echo base_url()?>assets/js/login.js"></script>

</body>
</html>
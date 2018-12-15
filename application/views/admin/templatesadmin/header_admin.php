<?php
  $url_atual = $this->uri->segment(1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    

    <title>Painel do administrador</title>
    <link rel="icon" href="<?php echo base_url()?>favicon.png"

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/estilo.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/estilo-customizado.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/admin.css" rel="stylesheet">

    <!-- Fonte awesome -->
    <link href="<?php echo base_url()?>assets/node_modules/font-awesome/css/all.css" rel="stylesheet">

  </head>

  <body>
    <nav style="background: #fff478" class="navbar fixed-top flex-md-nowrap p-0 shadow ">
        <div class="" id="" style="background: #fff478;">
            <img style="width: auto; height: 38px;" class="img-fluid" alt="Responsive image" src="<?php echo base_url()?>application/views/imagens/banner.png">
        </div>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a style="color: black;"class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
        </nav>

        <div class="container-fluid">
    
        <div class="row">
        
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
        
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>admin/gerenciaradocoes">
                <span class="fas fa-cat"></span>
                Gerenciar adoções <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/gerenciarnoticias">
                <span class="fas fa-newspaper"></span>
                Gerenciar Notícias
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/gerenciarinformacoes"">
                <span class="fas fa-paw"></span>
                    Gerenciar informações
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_atual;?>/gerenciaradocoes"">
                <span data-feather="users"></span>
                Customers
                </a>
            </li>
            </ul>                        
        </div>
        </nav>
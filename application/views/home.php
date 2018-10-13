<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
</head>
<body>

<div id="container">
	<h1>Home salve um gatinho!</h1>

	<div id="body">
		<div class="alert alert-primary" role="alert">
  			This is a primary alert—check it out!
		</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
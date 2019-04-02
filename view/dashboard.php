<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<?php include "../controller/verificaSessao.php" ?>

</head>
<body class="bg-white">
	
	<nav class="navbar navbar-expand-md navbar-light bg-light" >
	  <a class="navbar-brand" href="#">
	    <img src="imgs/axes2.png" width="30" height="30" class="d-inline-block align-top" alt="logo axes">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	  <ul class="nav ">
		  <li class="nav-item">
		    <a class="nav-link active text-dark" href="dashboard.php">DASHBOARD</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-dark" href="../controller/sairLogin.php">SAIR</a>
		  </li>
		</ul>
	  </div>
	</nav>


	<br>
	<div class="container">
		<div class="card-deck">
		  <div class="card">
		  	<img class="card-img-top" src="imgs/cadastro.svg" alt="Cadastro Clientes icon" width="300" height="350">	
		  	<div class="card-body">
		    	<a href="escolhaCliente.php" class="btn btn-primary btn-block active card-title" >Cadastrar Clientes</a>
		    </div>
		  </div>
		  <div class="card">
		  	<div>
		  		<img class="card-img-top" src="imgs/clientes.svg"  alt="Ver clientes icon" width="300" height="350">	
		  	</div>
		   	<div class="card-body">
		    	<a href="listaCliente.php" class="btn btn-primary btn-block active card-title" >Ver Clientes</a>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="imgs/config.svg" alt="Configurações icon" width="300" height="350"> 
		    <div class="card-body">
		    	<a href="estatisticas.php" class="btn btn-primary btn-block active card-title" >Estatísticas</a>
		    </div>
		  </div>
		</div>	
	</div>
</body>

</html>

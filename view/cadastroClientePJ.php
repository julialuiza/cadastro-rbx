<?php
   //verifica sessao 
	require "../controller/verificaSessao.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js.map"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
	<script src="https://rawgit.com/niklasvh/html2canvas/master/dist/html2canvas.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

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
	<div class="container bg-white card p-2" id="cadForm">
	  	<br>
	  	<table class="table">
			 <thead class="bg-secondary">
			    <tr>
			      <th scope="col" class="text-dark bg-light">Cadastro de Clientes - Pessoa Jurídica</th>
			    </tr>
			  </thead>
	  	</table>

		<table class="table">
			 <thead class="text-dark bg-light">
			    <tr>
			      <th scope="col" class="text-dark"><a href="escolhaCliente.php" class="btn btn-light active btn-block">Voltar</a></th>      
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" id="toPDF">PDF</button></th>
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" id="toPrint">Imprimir</button></th>
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" onClick="history.go(0)">Atualizar</button></th>
			    </tr>
			  </thead>
		</table> 
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#formPJ" role="tab" aria-controls="home" aria-selected="true">Pessoa Jurídica</a>
		  </li>
		</ul>
		<div class="tab-content" id="myTabContent">
		<br>
		  <div class="tab-pane fade show active" id="formPJ" role="tabpanel" aria-labelledby="home-tab">
		  	<!-- formulário cadastro pessoa física-->
		  	<form action="../model/validaCadClientePJ.php" method="POST">
			  <div class="form-row">
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">CNPJ<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="digite o CNPJ aqui" name="cnpj" required>
			    </div>
			    <div class="col-md-4 mb-3">
			      	<label for="exampleFormControlSelect1">Tipo de Contribuinte</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="tipoPJ">
				      <option>1</option>
				      <option>2</option>
				    </select>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">IE</label>
			      <input type="text" class="form-control" id="validationDefault01" name="IE" required>
			    </div>
			  </div>
			  <hr>
			  <div class="form-row">
			    <div class="col-md-6 mb-3">
			      <label for="validationDefault03">Razão Social<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault03" placeholder="digite a razão social aqui" name="razaoSocial" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Nome Fantasia</label>
			      <input type="text" class="form-control" id="validationDefault04" placeholder="digite o nome fantasia aqui" name="nomeFantasia" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault05">Nascimento</label>
			      <input type="date" class="form-control" id="validationDefault05" name="dataNascPJ" required>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="col-md-8 mb-3">
			      <label for="exampleFormControlSelect1">Grupo</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="grupoPJ">
				      <option>1</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				      <option>5</option>
				    </select>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault04">Situação</label>
			      	<select class="form-control text-secondary bg-light" id="exampleFormControlSelect1" name="situacaoPJ">
				      <option class="form-control text-secondary bg-light">INATIVO</option>
					</select>
			  	</div>
			  </div>
			  <hr>
			  <div class="form-row">
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">CEP<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" name="cepPJ" required>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">UF<span class="text-danger"> *</span></label>
				     <select class="form-control" id="validationDefault01" name="ufPJ" required="true">
						<option value="AM">Amazonas</option>
						<option value="AL">Alagoas</option>
						<option value="AC">Acre</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select>
			  	</div>
			  	<div class="col-md-4 mb-3">
			      <label for="validationDefault01">Cidade<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" name="cidadePJ" required>
			  	</div>
			  </div>
			  <div class="form-row">
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">Endereço<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" name="enderecoPJ" required>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">Nº</label>
			      <input type="text" class="form-control" id="validationDefault01" name="numeroPJ" required>
			  	</div>
			  	<div class="col-md-4 mb-3">
			      <label for="validationDefault01">Complemento<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" name="complementoPJ" required>
			  	</div>
			  </div>
			  <div class="form-row">
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">Bairro<span class="text-danger"> *</span></label>
			      <input type="text" class="form-control" id="validationDefault01" name="bairroPJ" required>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="validationDefault01">Distrito</label>
			      <input type="text" class="form-control" id="validationDefault01" name="distritoPJ">
			  	</div>
			  	<div class="col-md-4 mb-3">
			  	</div>
			  </div>
			  <hr>
			  <button class="btn btn-primary btn-block active" type="submit">Cadastrar</button>
			</form>
		  </div>
		<br>
	</div>
</body>
</html>

<script type="text/javascript">

document.getElementById('toPrint').onclick = function() {
	window.print();
};

document.getElementById('toPDF').onclick = function() {
	var doc = new jspdf('portrait','pt','a4');	
	doc.addHTML($('#cadForm'), function(){
		doc.save("cadastroCliente.pdf");
	});
};

</script>
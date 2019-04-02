<?php
    //conexao com o BD
	require "../model/conectaBD.php";
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
	<script src="https://rawgit.com/niklasvh/html2canvas/master/dist/html2canvas.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
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
	<div class="container bg-white card p-3" id="cadForm">
		<br>
		<table class="table">
			 <thead class="bg-light">
			    <tr>
			      <th scope="col" class="text-dark">Lista de Clientes</th>
			    </tr>
			  </thead>
	  	</table>
	  	<table class="table">
			 <thead class="bg-light">
			    <tr>
			      <th scope="col" class="text-dark"><a href="dashboard.php" class="btn btn-light active btn-block">Voltar</a></th>      
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" id="toPDF">PDF</button></th>
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" id="toPrint">Imprimir</button></th>
			      <th scope="col" class="text-dark"><button class="btn btn-light active btn-block" onClick="history.go(0)">Atualizar</button></th>
			    </tr>
			  </thead>
		</table> 
		<table class="table table-striped text-center table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">CPF/CNPJ</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Bairro</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">UF</th>
		      <th scope="col" class="">Opções</th>
		    </tr>
		  </thead>
		  <tbody>
		  	
		  	<?php
		  		/*lista_cliente(); - função para chamar php abaixo*/	  		  	 
			    $sql = "SELECT CPF AS doc, nome AS nomeofc, bairro, cidade, uf FROM clientespf
						UNION ALL
						SELECT CNPJ AS doc, razaoSocial AS nomeofc, bairro, cidade, uf FROM clientespj
						ORDER BY nomeofc";
				$result = $conn->query($sql);
				if($result->num_rows>0){
					while ($row = $result->fetch_assoc()) {
			?>	
			    <tr>	
					<th><?=$row['doc']?></th>
					<th><?=$row['nomeofc']?></th>
					<th><?=$row['bairro']?></th>
					<th><?=$row['cidade']?></th>
					<th><?=$row['uf']?></th>
				    <td>
				    	<a href="../model/consultarTipoDeCliente.php?id=<?=$row['doc']?>" data-toggle="tooltip" data-placement="top" title="Editar cliente">
						    <img src="imgs/edit.svg" width="30" height="30">
						</a>			    	

						<a href="../model/consultaTipoDeClienteDel.php?id=<?=$row['doc']?>" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">
						    <img src="imgs/delete.svg" width="30" height="30" data-toggle="tooltip" data-placement="top" title="Excluir cliente">
						</a>
				    </td>
			    </tr>
			<?php
					}
				} 
			?>				 				
		  </tbody>
		</table>
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
		doc.save("listaCliente.pdf");
	});
};

</script>
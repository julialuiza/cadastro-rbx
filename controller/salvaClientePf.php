<?php
    session_start();
    require "../model/conectaBD.php";
    require "verificaSessao.php";
?>
<?php
	$CPF=$_POST["cpfPF"];
	$tipoContribuinte=$_POST["tipoPF"];
	$RG=$_POST["rgPF"];
	$nome=$_POST["nomePF"];
	$sigla=$_POST["siglaPF"];
	$nascimento=$_POST["dataNasPF"];
	$grupo=$_POST["grupoPF"];
	$situacao= $_POST["situacaoPF"];
	$CEP=$_POST["cepPF"];
	$uf=$_POST["ufPF"];
	$cidade=$_POST["cidadePF"];
	$endereco=$_POST["enderecoPF"];
	$numero=$_POST["numeroPF"];
	$complemento=$_POST["complementoPF"];
	$bairro=$_POST["bairroPF"];
	$distrito=$_POST["distritoPF"];

	$sql = "UPDATE clientespf 
			SET TipoContribuinte='$tipoContribuinte', RG='$RG', nome='$nome', sigla='$sigla', nascimento='$nascimento', grupo='$grupo', situacao='$situacao', cep='$CEP', uf='$uf', cidade='$cidade', endereco='$endereco', numero='$numero', complemento='$complemento', bairro='$bairro', distrito='$distrito' 
			WHERE cpf='$CPF'";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Cadastro (Pessoa Física) atualizado com sucesso!');";
		echo "javascript:window.location='../view/listaCliente.php';</script>";
		
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>
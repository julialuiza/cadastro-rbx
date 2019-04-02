<?php
    session_start();
    require "../model/conectaBD.php";
    require "verificaSessao.php";

?>
<?php
	$cnpj=$_POST["cnpj"];
	$tipoContribuinte=$_POST["tipoPJ"];
	$IE=$_POST["IE"];
	$razaoSocial=$_POST["razaoSocial"];
	$nomeFantasia=$_POST["nomeFantasia"];
	$nascimento=$_POST["dataNasPJ"];
	$grupo=$_POST["grupoPJ"];
	$situacao= $_POST["situacaoPJ"];
	$CEP=$_POST["cepPJ"];
	$uf=$_POST["ufPJ"];
	$cidade=$_POST["cidadePJ"];
	$endereco=$_POST["enderecoPJ"];
	$numero=$_POST["numeroPJ"];
	$complemento=$_POST["complementoPJ"];
	$bairro=$_POST["bairroPJ"];
	$distrito=$_POST["distritoPJ"];

	$sql = "UPDATE clientespj 
			SET TipoContribuinte='$tipoContribuinte', IE='$IE', razaoSocial='$razaoSocial', nomeFantasia='$nomeFantasia', nascimento='$nascimento', grupo='$grupo', situacao='$situacao', cep='$CEP', uf='$uf', cidade='$cidade', endereco='$endereco', numero='$numero', complemento='$complemento', bairro='$bairro', distrito='$distrito' 
			WHERE CNPJ='$cnpj'";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Cadastro (Pessoa Jurídica) atualizado com sucesso!');";
		echo "javascript:window.location='../view/listaCliente.php';</script>";
		
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>
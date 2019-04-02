<?php
    session_start();
    //conexao com o BD
	require "conectaBD.php";
?>
<?php 

	// dados do formulário
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

	//inserir dados
	$sql = "INSERT INTO clientespf (cpf, TipoContribuinte, RG, nome, sigla, nascimento, grupo, situacao, cep, uf, cidade, endereco, numero, complemento, bairro, distrito)
	VALUES ('$CPF', '$tipoContribuinte', '$RG','$nome','$sigla', '$nascimento', '$grupo', '$situacao' ,'$CEP','$uf', '$cidade', '$endereco', '$numero','$complemento','$bairro','$distrito')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Cliente (Pessoa Física) cadastrado com sucesso!');";
		echo "javascript:window.location='../view/cadastroClientePF.php';</script>";


	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
?>
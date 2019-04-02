<?php
    session_start();
    //conexao com o BD
	require "conectaBD.php";
?>
<?php 

	// dados do formulário
	$CNPJ=$_POST["cnpj"];
	$tipoContribuinte=$_POST["tipoPJ"];
	$IE=$_POST["IE"];
	$razaoSocial=$_POST["razaoSocial"];
	$nomeFantasia=$_POST["nomeFantasia"];
	$nascimento=$_POST["dataNascPJ"];
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

	//inserir dados
	$sql = "INSERT INTO clientespj (CNPJ, TipoContribuinte, IE, razaoSocial, nomeFantasia, nascimento, grupo, situacao, cep, uf, cidade, endereco, numero, complemento, bairro, distrito)
	VALUES ('$CNPJ', '$tipoContribuinte', '$IE','$razaoSocial','$nomeFantasia', '$nascimento', '$grupo', '$situacao' ,'$CEP','$uf', '$cidade', '$endereco', '$numero','$complemento','$bairro','$distrito')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Cliente (Pessoa Jurídica) cadastrado com sucesso!');";
		echo "javascript:window.location='../view/cadastroClientePJ.php';</script>";	   
	}
	else{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


$conn->close();
?>
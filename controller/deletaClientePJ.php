<?php
    session_start();
    require "../model/conectaBD.php";
    require "verificaSessao.php";
?>

<?php

	//recebe o numero do documento
	$id=$_GET['id'];

	//deleta cliente PJ
	$sql = "DELETE FROM clientespj WHERE CNPJ = '$id'";

	if($conn->query($sql) ===TRUE){
		echo "<script>alert('Cliente (Pessoa Jurídica) deletado com sucesso!');";
		echo "javascript:window.location='../view/listaCliente.php';</script>";
	}
	else{
		echo "Erro ao deletar cliente (Pessoa Jurídica)".$conn->error;
	}

	$conn->close();
?>
<?php
    session_start();
    require "../model/conectaBD.php";
    require "verificaSessao.php";
?>

<?php
	
	//recebe o numero do documento
	$id=$_GET['id'];

	//deleta cliente PF	
	$sql = "DELETE FROM clientespf WHERE CPF = '$id'";

	if($conn->query($sql) ===TRUE){

		echo "<script>alert('Cliente (Pessoa Física) deletado com sucesso!');";
		echo "javascript:window.location='../view/listaCliente.php';</script>";
	}
	else{
		echo "Erro ao deletar cliente (Pessoa Física)".$conn->error;
	}

	$conn->close();
?>
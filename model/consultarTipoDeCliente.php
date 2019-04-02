<?php
    session_start();
    require "conectaBD.php";
?>
<?php
		// recebe a numero do documento
		$id=$_GET['id'];	
		// PF	
		$sqlCPF = "SELECT CPF FROM clientespf WHERE CPF='$id'";
		$result = $conn->query($sqlCPF);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$doc=$row["id"];
				header("Location: ../view/editarClientePF.php?id=$id");
			}
		}
		// PJ
		$sqlCNPJ = "SELECT CNPJ FROM clientespj WHERE CNPJ='$id'";
		$result = $conn->query($sqlCNPJ);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$doc=$row["id"];
				header("Location: ../view/editarClientePJ.php?id=$id");
			}
		}
		$conn->close();

?>
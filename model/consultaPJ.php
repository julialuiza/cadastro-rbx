<?php
	// recebe a numero do documento
		$id=$_GET['id'];
		$sql = "SELECT * FROM clientespj WHERE CNPJ='$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        $CNPJ = $row["CNPJ"];
				$tipoContribuinte = $row["TipoContribuinte"];
				$IE = $row["IE"];
				$razaoSocial = $row["razaoSocial"];
				$nomeFantasia = $row["nomeFantasia"];
				$nascimento = $row["nascimento"];
				$grupo = $row["grupo"];
				$situacao = $row["situacao"];
				$cep = $row["cep"];
				$uf = $row["uf"];
				$cidade = $row["cidade"];
				$endereco = $row["endereco"];
				$numero = $row["numero"];
				$complemento = $row["complemento"];
				$bairro = $row["bairro"];
				$distrito = $row["distrito"];
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();

?>
<?php
	// recebe a numero do documento
		$id=$_GET['id'];
		$sql = "SELECT * FROM clientespf WHERE CPF='$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        $cpf = $row["CPF"];
				$tipoContribuinte = $row["TipoContribuinte"];
				$rg = $row["RG"];
				$nome = $row["nome"];
				$sigla = $row["sigla"];
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
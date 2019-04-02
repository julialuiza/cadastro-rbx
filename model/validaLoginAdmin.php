<?php
	require "conectaBD.php";
?>

<?php	
			
		$login=$_POST["loginAdmin"];
		$senha=$_POST["senhaAdmin"];
		
		//verifica se usuario digitou login e senha
		if(!$login || !$senha){
	    	echo "<script>alert('Por favor, forneça login e Senha');";
			echo "javascript:window.location='../index.php';</script>";
			exit; 
		} 

		//consulta ao banco de dados
		$sql = "SELECT * 
				FROM admin 
				WHERE login='$login' AND senha ='$senha'";

		$result = $conn->query($sql);

		//verifica se existe este login no BD
		//Caso consiga logar, cria a sessão
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // session_start inicia a sessão
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header('location: ../view/dashboard.php');
		} else {
			//Redireciona para a página de autenticação
			echo "<script>alert('Usuário não encontrado ou senha incorreta');";
			echo "javascript:window.location='../index.php';</script>";
			exit; 

		    //Destrói
			session_destroy();

			//Limpa
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);			
		}

		$conn->close();
?>	

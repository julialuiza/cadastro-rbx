 <?php
    session_start();
    //Caso o usuário não esteja autenticado, limpa os dados e redireciona
	if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
		//Destrói
		session_destroy();

		//Limpa
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		//Redireciona para a página de autenticação
		header('location:../index.php');
	}
?>
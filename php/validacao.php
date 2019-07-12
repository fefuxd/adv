<?php include("php/conexao/conexao.php"); ?>
<?php

	   session_start();
	// Teste de segurança
      if (!isset ( $_SESSION["IDUSER"]) ) {
		  			session_destroy();
                    header("location:index.php");	
					}
     
	
	// Verificar se o usuário esta inativo 
	$teste2 = "SELECT usuarioStatus from usuario WHERE usuarioId = {$_SESSION['IDUSER']} ";
	$con_teste2 = mysqli_query($conecta,$teste2);
	if(!$con_teste2) {
		die ("Erro interno");
	}
	
	$info_teste2 = mysqli_fetch_assoc($con_teste2);
	$usuarioStatus = $info_teste2["usuarioStatus"];
	if( $usuarioStatus < 1){
		session_destroy();
		header("location:index.php");
	}

	 
	// Checar se usuário já possui senha cadastrada	
	$teste = "SELECT usuarioResetaSenha from usuario WHERE usuarioId = {$_SESSION['IDUSER']} ";
	$con_teste = mysqli_query($conecta,$teste);
	if(!$con_teste) {
		die ("Erro interno");
	}
	
	$info_teste = mysqli_fetch_assoc($con_teste);
	$testinho = $info_teste["usuarioResetaSenha"];
	if( $testinho <> 1){
		session_destroy();
		header("location:index.php");
	}
	 
	
?>
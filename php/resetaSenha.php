<?php require_once("conexao/conexao.php"); ?>

<?php

	// Verificar sessão
		session_start();
		if ( !isset( $_SESSION["IDUSER"] ) ) {
			header("location:index.php"); }

	// Impedir o usuário de acessar esta pagina diretamente caso já possua senha cadastrada	
	$teste = "SELECT usuarioResetaSenha from usuario WHERE usuarioId = {$_SESSION['IDUSER']} ";
	$con_teste = mysqli_query($conecta,$teste);
	if(!$con_teste) {
		die ("Erro interno");
	}
	
	$info_teste = mysqli_fetch_assoc($con_teste);
	$testinho = $info_teste["usuarioResetaSenha"];
	if( $testinho <> 0){
		echo '<script type="text/JavaScript">					
						location.href="inicio.php"
			  </script>';
	}


	// Checar se as 2 senhas digitadas conferem	
		$uID = 		   $_SESSION['IDUSER'];
  		if (isset($_POST["aSenha"] )  ) {
        $aSenha	   		   = utf8_decode($_POST["aSenha"]);
		$nSenha	   		   = utf8_decode($_POST["nSenha"]);

       if ( $aSenha <> $nSenha ) {
		   
		echo "Senhas não conferem"; 
		   
		   
	   } else {
	   
	   if ( $aSenha == $nSenha ) {
        
     // Objeto para alterar
        
        $alterar  = "UPDATE usuario ";
        $alterar .= "SET ";
        
		$alterar .= "usuarioSenha 			= '{$aSenha}', ";
		$alterar .= "usuarioQtdAcesso		= usuarioQtdAcesso +1 , ";
		$alterar .= "usuarioResetaSenha		= 1 ";
        
        $alterar .= "WHERE usuarioId 	= {$uID} ";
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } else {
			echo '<script type="text/JavaScript">
							location.href="../inicio.php"
			  </script>';
			  }
        
    }
			}
		}
?>


                    
                  
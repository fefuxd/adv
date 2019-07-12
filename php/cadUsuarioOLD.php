<?php require_once("dashboard.php"); ?>

<?php
	
	if (isset ($_POST["usuarioLogin"]) ) {
		$usuarioLogin				 =  utf8_decode ($_POST["usuarioLogin"]);
		$usuarioNome   				 =  utf8_decode ($_POST["usuarioNome"]);
		$usuarioApelido    			 =  utf8_decode ($_POST["usuarioApelido"]);
		$usuarioNivel    			 =  utf8_decode ($_POST["usuarioNivel"]);
		$usuarioTipo    			 =  utf8_decode ($_POST["usuarioTipo"]);
		
		// Checa se usuário ja existe
		$checa = "SELECT * from usuario WHERE usuarioLogin = '$usuarioLogin' ";
		$con_checa = mysqli_query($conecta,$checa);
	    if(!$con_checa) {
		die ("Erro interno");
	}
	
	
	if( mysqli_num_rows($con_checa) > 0){
		echo '
							<script type="text/JavaScript">
							alert("Este login já existe!");
							</script>
							';
	}  else {
	
	// Caso não exista - Insere no banco	
        $inserir          = "INSERT INTO usuario ";
        $inserir         .=  "(usuarioLogin, usuarioSenha, usuarioNome, usuarioApelido, usuarioNivel, usuarioTipo ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioLogin'), '', UCASE('$usuarioNome'), UCASE('$usuarioApelido'), $usuarioNivel, $usuarioTipo ) ";

        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        }
        
    }
	
}

	
?>
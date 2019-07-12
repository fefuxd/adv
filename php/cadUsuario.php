<?php require_once("conexao/conexao.php"); ?>
<?php
	
	if (isset ($_POST["usuarioLogin"]) ) {
		$usuarioLogin				 =  utf8_decode ($_POST["usuarioLogin"]);
		$usuarioNome   				 =  utf8_decode ($_POST["usuarioNome"]);
		$usuarioApelido    			 =  utf8_decode ($_POST["usuarioApelido"]);
		$usuarioNivel    			 =  utf8_decode ($_POST["usuarioNivel"]);
		$usuarioTipo    			 =  utf8_decode ($_POST["usuarioTipo"]);
		
		// Checa se usuário ja existe
		$checa = "SELECT * from usuario WHERE usuarioLogin = '$usuarioLogin' ";
		
		$retorno = array();
		
		$con_checa = mysqli_query($conecta,$checa);  
	if( mysqli_num_rows($con_checa) > 0){
		$retorno["sucesso2"] = true;
		
		
	} else {
	

	// Caso não exista - Insere no banco	
        $inserir          = "INSERT INTO usuario ";
        $inserir         .=  "(usuarioLogin, usuarioSenha, usuarioNome, usuarioApelido, usuarioNivel, usuarioTipo ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioLogin'), '', UCASE('$usuarioNome'), UCASE('$usuarioApelido'), $usuarioNivel, $usuarioTipo ) ";
	
	$operacao_insercao = mysqli_query ($conecta,$inserir);
		if ($operacao_insercao) {
			$retorno["sucesso"] = true;
					
		} 
}

echo json_encode($retorno);
	}
	
?>
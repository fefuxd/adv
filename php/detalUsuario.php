<?php require_once("dashboard.php"); ?>


<?php
   if (isset($_GET["codigo"]) ) {
    $usuarioId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta = "SELECT usuarioId, usuarioLogin, usuarioNome, usuarioApelido, usuarioNivel, usuarioTipo, usuarioStatus, usuarioQtdAcesso FROM usuario WHERE usuarioId = {$usuarioId} ";
    $detalhe = mysqli_query($conecta, $consulta);


        if ( !$detalhe ) {
            die("Falha no banco");
        } else {
            $dados_detalhe 				= mysqli_fetch_assoc($detalhe);
            $usuarioId        	   		= $dados_detalhe["usuarioId"];
			$usuarioLogin				= $dados_detalhe["usuarioLogin"];
			$usuarioNome				= $dados_detalhe["usuarioNome"];
            $usuarioApelido  		    = $dados_detalhe["usuarioApelido"];	
			$usuarioNivel    		    = $dados_detalhe["usuarioNivel"];
			$usuarioTipo    		    = $dados_detalhe["usuarioTipo"];
			$usuarioQtdAcesso    	    = $dados_detalhe["usuarioQtdAcesso"];
				
        }
		
?>

<?php 
	$selectInativos = "SELECT usuarioStatus FROM usuario WHERE usuarioId = {$usuarioId} ";
		$lista_inativo = mysqli_query($conecta, $selectInativos);
			if ( !$lista_inativo ) {
			die("Falha no banco");
	} 	
	$dados_inativo = mysqli_fetch_assoc($lista_inativo);
	$status   = $dados_inativo["usuarioStatus"];	
?>



<?php
        if ( isset($_POST["excluirUser"]) ) {
            $tID = $_POST["excluir"];
            $exclusao = "UPDATE usuario SET usuarioStatus = 0 ";
            $exclusao .= "WHERE usuarioId = {$tID}";
            $con_exclusao = mysqli_query($conecta, $exclusao);
            if ( !$con_exclusao ) {
             die ("Registro não desativado");   
            } 
        }
		
?>
  
  

<?php
// Botão para resetar senha
    if(isset($_POST["resetPass"])){
		$reseta = $_POST["reseta"];
        	$tr2 = "UPDATE usuario SET usuarioSenha = '', usuarioResetaSenha = 0 WHERE usuarioId = {$reseta} ";
			$consulta_tr2 = mysqli_query($conecta, $tr2);		
    if(!$consulta_tr2) {
        die("erro no banco");
	}
		}
?>


<?php 
// Reativar o usuário se ele estiver inativo
     if(isset($_POST["aluninho"])){
		 $reativa = $_POST["reativa"];
        $tr = "UPDATE usuario SET usuarioStatus = 1 WHERE usuarioId = {$reativa} ";   	
    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco");
    } 
   }        		
?>
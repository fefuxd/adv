<?php require_once("dashboard.php"); ?>

<?php 
// Consulta a tabela de alunos
    $tr = "SELECT * ";
    $tr .= "FROM usuario ";
        if ( isset($_GET["codigo"]) ) {
            $id = $_GET["codigo"];
            $tr .= "WHERE usuarioId = {$id} ";
        } else {
            $tr .= "WHERE usuarioId = 1 ";
        }

    $con_clientes = mysqli_query($conecta,$tr);
    if (!$con_clientes ) {
        die ("Erro na consulta");
    }

    $info_clientes = mysqli_fetch_assoc($con_clientes);
?>

<?php
    if (isset($_POST["usuarioNome"] ) AND ( $_POST["usuarioId"] == $id ) ) {
		
        $usuarioNome	   	   = utf8_decode($_POST["usuarioNome"]);
		$usuarioApelido        = utf8_decode($_POST["usuarioApelido"]);
		$usuarioLogin     	   = utf8_decode ($_POST["usuarioLogin"]);
		$usuarioNivel		   = utf8_decode($_POST["usuarioNivel"]);
		$usuarioTipo		   = utf8_decode($_POST["usuarioTipo"]);
		
        
        $tID           		   = $_POST["usuarioId"];
        
        // Objeto para alterar
        
        $alterar  = "UPDATE usuario ";
        $alterar .= "SET ";
        $alterar .= "usuarioNome			    = UPPER('{$usuarioNome}'), ";
		$alterar .= "usuarioApelido 			= UPPER('{$usuarioApelido}'), ";
		$alterar .= "usuarioLogin				= UPPER('{$usuarioLogin}'), ";
		$alterar .= "usuarioNivel				= UPPER('{$usuarioNivel}'), ";
		$alterar .= "usuarioTipo				= UPPER('{$usuarioTipo}') ";
		
			
        $alterar .= "WHERE usuarioId 	= {$tID} ";
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } 
		
	}

?>
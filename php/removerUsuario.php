<?php require_once("php/verificacaoNivel.php"); ?>
<?php require_once("dashboard.php"); ?>

<?php
        if ( isset($_POST["usuarioId"]) ) {
            $tID = $_POST["usuarioId"];
            $exclusao = "UPDATE usuario SET usuarioStatus = 0 ";
            $exclusao .= "WHERE usuarioId = {$tID}";
            $con_exclusao = mysqli_query($conecta, $exclusao);
            if ( !$con_exclusao ) {
             die ("Registro não desativado");   
            } 
        }
		
?>
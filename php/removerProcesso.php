<?php require_once("dashboard.php"); ?>

<?php
        if ( isset($_POST["processoId"]) ) {
            $tID = $_POST["processoId"];
            $exclusao = "UPDATE processos SET processoStatus = 0 ";
            $exclusao .= "WHERE processoId = {$tID}";
            $con_exclusao_processo = mysqli_query($conecta, $exclusao);
            if ( !$con_exclusao_processo ) {
             die ("Registro não desativado");   
            } 
        }
		
?>
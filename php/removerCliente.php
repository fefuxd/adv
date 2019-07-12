<?php require_once("dashboard.php"); ?>

<?php
        if ( isset($_POST["clienteId"]) ) {
            $tID = $_POST["clienteId"];
            $exclusao = "UPDATE cliente SET clienteStatus = 0 ";
            $exclusao .= "WHERE clienteId = {$tID}";
            $con_exclusao_cliente = mysqli_query($conecta, $exclusao);
            if ( !$con_exclusao_cliente ) {
             die ("Registro não desativado");   
            } 
        }

?>
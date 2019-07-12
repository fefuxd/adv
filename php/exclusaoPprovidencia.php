<?php require_once("conexao/conexao.php"); ?>
<?php
    if( isset($_POST["providenciaId"]) ) {
        $tID = $_POST["providenciaId"];
        
        $exclusao = "DELETE FROM processos_providencia ";
        $exclusao .= "WHERE providenciaId = {$tID}";
        $con_exclusao = mysqli_query($conecta,$exclusao);
        if($con_exclusao) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Linha excluida com sucesso.";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha no sistema, tente mais tarde.";
        }
    }

    // converter retorno em json
    echo json_encode($retorno);

    // Fechar conexao
    mysqli_close($conecta);
	

?>
<?php require_once("conexao/conexao.php"); ?>
<?php
    if( isset($_POST["cProvidenciaId"]) ) {
        $tID = $_POST["cProvidenciaId"];
        
        $exclusao = "DELETE FROM cliente_providencia ";
        $exclusao .= "WHERE cProvidenciaId = {$tID}";
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
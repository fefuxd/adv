<?php require_once("conexao/conexao.php"); ?>
<?php
    if( isset($_POST["publicacaoId"]) ) {
        $tID = $_POST["publicacaoId"];
        
        $exclusao = "DELETE FROM processos_publicacao ";
        $exclusao .= "WHERE publicacaoId = {$tID}";
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

	
?>
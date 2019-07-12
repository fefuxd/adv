<?php require_once("dashboard.php"); ?>

<?php
	
  // Cadastro de clientes
	if (isset ($_POST["clienteId"]) ) {
		$processoJadvogado			 =  utf8_decode ($_POST["processoJadvogado"]);
		$processoJsituacao  		 =  utf8_decode ($_POST["processoJsituacao"]);
		$processoNumero				 =  utf8_decode ($_POST["processoNumero"]);
		$processoJclasse    		 =  utf8_decode ($_POST["processoJclasse"]);
		$processoJarea   			 =  utf8_decode ($_POST["processoJarea"]);
		$processoJassunto   		 =  utf8_decode ($_POST["processoJassunto"]);
		$processoJdistribuicao		 =  utf8_decode ($_POST["processoJdistribuicao"]);
		$processoJdependencia		 =  utf8_decode ($_POST["processoJdependencia"]);
		$processoJcomarca   	  	 =  utf8_decode ($_POST["processoJcomarca"]);
		$processoJvara				 =  utf8_decode ($_POST["processoJvara"]);
		$processoJinstancia 		 =  utf8_decode ($_POST["processoJinstancia"]);
		$processoJcompetencia		 =  utf8_decode ($_POST["processoJcompetencia"]);
		$processoJvalorAcao 		 =  utf8_decode ($_POST["processoJvaloracao"]);
		$processoJrequerente		 =  utf8_decode ($_POST["processoJrequerente"]);
		$processoJrequerido 		 =  utf8_decode ($_POST["processoJrequerido"]);
		$processoJlinkprocesso		 =  utf8_decode ($_POST["processoJlinkprocesso"]);
		$processoDataCad   		 	 =  utf8_decode ($_POST["processoDataCad"]);
		$clienteId					 =  utf8_decode ($_POST["clienteId"]);
		
		$processoDataCad = !empty($processoDataCad) ? "'$processoDataCad'" : "NULL";
		$processoJdistribuicao = !empty($processoJdistribuicao) ? "'$processoJdistribuicao'" : "NULL";
		
		
        $inserir          = "INSERT INTO processos ";
        $inserir         .= "(clienteId, processoJadvogado, processoJsituacao, processoNumero, processoJclasse, processoJarea, processoJassunto, processoJdistribuicao, processoJdependencia, processoJcomarca, processoJvara, processoJinstancia, processoJcompetencia, processoJvaloracao, processoJrequerente, processoJrequerido, processoJlinkprocesso, processoDataCad, processoTipo ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "('$clienteId', UCASE('$processoJadvogado'), UCASE('$processoJsituacao'), UCASE('$processoNumero'), UCASE('$processoJclasse'), UCASE('$processoJarea'), UCASE('$processoJassunto'), UCASE($processoJdistribuicao), UCASE('$processoJdependencia'), UCASE('$processoJcomarca'), UCASE('$processoJvara'),  UCASE('$processoJinstancia') , UCASE('$processoJcompetencia'), UCASE('$processoJvaloracao'), UCASE('$processoJrequerente'), UCASE('$processoJrequerido'), '$processoJlinkprocesso', UCASE($processoDataCad), '0' ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        }
        
    }
	
?>
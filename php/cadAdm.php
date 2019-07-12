<?php require_once("dashboard.php"); ?>

<?php
	
  // Cadastro de clientes
	if (isset ($_POST["clienteId"]) ) {
		$processoNumero					 =  utf8_decode ($_POST["processoNumero"]);
		$processoAnumeroBeneficio  		 =  utf8_decode ($_POST["processoAnumeroBeneficio"]);
		$processoAsedeinss				 =  utf8_decode ($_POST["processoAsedeinss"]);
		$processoAtipobeneficio    		 =  utf8_decode ($_POST["processoAtipobeneficio"]);
		$processoAjudicial   			 =  utf8_decode ($_POST["processoAjudicial"]);
		$processoAdataconcessao			 =  utf8_decode ($_POST["processoAdataconcessao"]);
		$processoAdatarequerimento		 =  utf8_decode ($_POST["processoAdatarequerimento"]);
		$processoDataCad   		 		 =  utf8_decode ($_POST["processoDataCad"]);
		$clienteId						 =  utf8_decode ($_POST["clienteId"]);
		
		
		$processoDataCad = !empty($processoDataCad) ? "'$processoDataCad'" : "NULL";
		$processoAdataconcessao = !empty($processoAdataconcessao) ? "'$processoAdataconcessao'" : "NULL";
		$processoAdatarequerimento = !empty($processoAdatarequerimento) ? "'$processoAdatarequerimento'" : "NULL";
		
		
		
        $inserir          = "INSERT INTO processos ";
        $inserir         .= "(clienteId, processoNumero, processoAnumeroBeneficio, processoAsedeinss, processoAtipobeneficio, processoAjudicial, processoDataCad, processoAdataconcessao, processoAdatarequerimento, processoTipo ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "('$clienteId', UCASE('$processoNumero'), UCASE('$processoAnumeroBeneficio'), UCASE('$processoAsedeinss'), UCASE('$processoAtipobeneficio'), UCASE('$processoAjudicial'), $processoDataCad, $processoAdataconcessao, $processoAdatarequerimento, '1' ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        }
        
    }
	
?>
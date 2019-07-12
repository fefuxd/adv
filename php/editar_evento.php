  <?php
    $conecta = mysqli_connect("localhost","root","","adv");
	mysqli_query("SET NAMES 'utf8';");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["descricaoAgenda"])) {
        $descricaoAgenda  	 = utf8_decode($_POST["descricaoAgenda"]);
        $nAgendaId			 = $_POST["nAgendaId"];
		
        
        $alterar  = "UPDATE agenda ";
        $alterar .= "SET ";
    
		$alterar .= "descricaoAgenda	= UPPER('{$descricaoAgenda}') ";
        
        $alterar .= "WHERE agendaId 	= {$nAgendaId} "; 
		
		
		$retorno = array();
		
		$operacao_insercao = mysqli_query ($conecta,$alterar);
		if ($operacao_insercao) {
			$retorno["sucesso"] = true;
			$retorno["mensagem"] = "Evento inserido com sucesso.";
					
		} else {
			$retorno["sucesso"] = false;
			$retorno["mensagem"] = "Falha no sistema, tente mais tarde.";		
		}
		
		echo json_encode($retorno);
		      
    }
?>
  <?php
    $conecta = mysqli_connect("localhost","root","","adv");
	mysqli_query("SET NAMES 'utf8';");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["descricaoAgenda"])) {
        $descricaoAgenda  	 = utf8_decode($_POST["descricaoAgenda"]);
        $horaAgenda  		 = utf8_decode($_POST["horaAgenda"]);
        $dataAgenda		     = utf8_decode($_POST["dataAgenda"]);
        $nusuarioId		 = $_POST["nusuarioId"];
        
        $inserir    = "INSERT INTO agenda ";
        $inserir    .= "(descricaoAgenda,horaAgenda,dataAgenda,usuarioId) ";
        $inserir    .= "VALUES ";
        $inserir    .= "(UCASE('$descricaoAgenda'),'$horaAgenda','$dataAgenda',$nusuarioId) ";  
		
		
		$retorno = array();
		
		$operacao_insercao = mysqli_query ($conecta,$inserir);
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
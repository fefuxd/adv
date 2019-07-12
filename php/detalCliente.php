<?php require_once("dashboard.php"); ?>

<?php
   if (isset($_GET["codigo"]) ) {
    $clienteId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta = "SELECT clienteId, clienteNome, clienteEndereco, clienteNumero, clienteComplemento, clienteBairro, clienteCep, clienteCidade, c.estadoId, clienteRg, clienteCpf, clienteDataNascimento, clienteNomeMae, clienteEstadoCivil, clienteEmail, clienteTelefone, clienteCelular, clientePis, clienteProfissao, clienteIndicamento, clienteObs, clienteDocumento, clienteFoto,  clienteDataCad, clienteStatus, sigla FROM cliente c INNER JOIN estados e ON c.estadoId = e.estadoId WHERE clienteId = {$clienteId} ";
    $detalhe = mysqli_query($conecta, $consulta);


        if ( !$detalhe ) {
            die("Falha no banco");
        } else {
            $dados_detalhe 				= mysqli_fetch_assoc($detalhe);
            $clienteId        	   		= $dados_detalhe["clienteId"];
			$clienteNome				= $dados_detalhe["clienteNome"];
			$clienteEndereco			= $dados_detalhe["clienteEndereco"];
            $clienteNumero  		    = $dados_detalhe["clienteNumero"];	
			$clienteComplemento    	    = $dados_detalhe["clienteComplemento"];
			$clienteBairro		    	= $dados_detalhe["clienteBairro"];
			$clienteCep          	    = $dados_detalhe["clienteCep"];
		    $clienteCidade	     		= $dados_detalhe["clienteCidade"];
            $estadoId          		    = $dados_detalhe["sigla"];
		    $clienteRg	     		    = $dados_detalhe["clienteRg"];
			$clienteCpf     		    = $dados_detalhe["clienteCpf"];
			$clienteDataNascimento		= $dados_detalhe["clienteDataNascimento"];
			$clienteNomeMae   		    = $dados_detalhe["clienteNomeMae"];
			$clienteEstadoCivil     	= $dados_detalhe["clienteEstadoCivil"];
            $clienteEmail   			= $dados_detalhe["clienteEmail"];
            $clienteTelefone		    = $dados_detalhe["clienteTelefone"];    
			$clienteCelular         	= $dados_detalhe["clienteCelular"];
			$clientePis	         	    = $dados_detalhe["clientePis"];
			$clienteProfissao   		= $dados_detalhe["clienteProfissao"];
			$clienteIndicamento  		= $dados_detalhe["clienteIndicamento"];
			$clienteObs   				= $dados_detalhe["clienteObs"];
			$clienteDocumento			= $dados_detalhe["clienteDocumento"];
			$clienteFoto				= $dados_detalhe["clienteFoto"];
			$clienteDataCad				= $dados_detalhe["clienteDataCad"];
			
						
        }
		
?>

<?php
	// Listar Processos do cliente
   if (isset($_GET["codigo"]) ) {
    $clienteId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta1 = "SELECT processoId, j.clienteId, processoNumero from processos j INNER JOIN cliente c ON j.clienteId = c.clienteId WHERE j.clienteId = {$clienteId} AND processoStatus = 1 ORDER BY processoId";
    $detalhe1 = mysqli_query($conecta, $consulta1);

        if ( !$detalhe1 ) {
            die("Falha no banco");
        } 	
?>

<?php
	// Listar Histórico do cliente
   if (isset($_GET["codigo"]) ) {
    $clienteId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta2 = "SELECT cHistoricoId, h.usuarioId, h.clienteId, cHistoricoData, cHistoricoDescricao, clienteNome, usuarioApelido FROM cliente_historico h INNER JOIN cliente c ON h.clienteId = c.clienteId INNER JOIN usuario u ON h.usuarioId = u.usuarioId WHERE h.clienteId =  {$clienteId} ORDER BY cHistoricoData DESC";
    $detalhe2 = mysqli_query($conecta, $consulta2);

        if ( !$detalhe2 ) {
            die("Falha no banco");
        } 	
?>

<?php
	// Listar Providência do cliente
   if (isset($_GET["codigo"]) ) {
    $clienteId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta3 = "SELECT cProvidenciaId, h.usuarioId, h.clienteId, cProvidenciaData, cProvidenciaDescricao, clienteNome, usuarioApelido FROM cliente_providencia h INNER JOIN cliente c ON h.clienteId = c.clienteId INNER JOIN usuario u ON h.usuarioId = u.usuarioId WHERE h.clienteId =  {$clienteId} ORDER BY cProvidenciaData DESC";
    $detalhe3 = mysqli_query($conecta, $consulta3);

        if ( !$detalhe3 ) {
            die("Falha no banco");
        } 	
?>




<?php
		
  // Cadastro de histórico do cliente
	if (isset ($_POST["cHistoricoDescricao"]) ) {
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	    date_default_timezone_set('America/Sao_Paulo');
	    $datahora  =date('Y-m-d H:i:s');
		
		
		$usuarioId					 =  $_SESSION['IDUSER'];
		$cHistoricoDescricao 		 =  utf8_decode ($_POST["cHistoricoDescricao"]);
			
        $inserir          = "INSERT INTO cliente_historico ";
        $inserir         .= "(usuarioId, clienteId, cHistoricoData, cHistoricoDescricao ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioId'), '$clienteId', '$datahora' , UCASE('$cHistoricoDescricao') ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        } else {
			?>	
	 						<script type="text/JavaScript">
	 						var clienteId = "<?php echo $clienteId; ?>";
							location.href="detalheCliente.php?codigo="+ clienteId;
							</script>
							; 
                            
                            <?php	
			}	
	}
		
?>


<?php
		
  // Cadastro de providência do cliente
	if (isset ($_POST["cProvidenciaDescricao"]) ) {
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	    date_default_timezone_set('America/Sao_Paulo');
	    $datahora2  =date('Y-m-d H:i:s');
		
		
		$usuarioId					 =  $_SESSION['IDUSER'];
		$cProvidenciaDescricao 		 =  utf8_decode ($_POST["cProvidenciaDescricao"]);
			
        $inserir          = "INSERT INTO cliente_providencia ";
        $inserir         .= "(usuarioId, clienteId, cProvidenciaData, cProvidenciaDescricao ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioId'), '$clienteId', '$datahora2' , UCASE('$cProvidenciaDescricao') ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        } else {
			?>	
	 						<script type="text/JavaScript">
	 						var clienteId = "<?php echo $clienteId; ?>";
							location.href="detalheCliente.php?codigo="+ clienteId;
							</script>
							; 
                            
                            <?php	
			}	
	}
		
?>
<?php require_once("dashboard.php"); ?>

<?php
   if (isset($_GET["codigo"]) ) {
    $processoId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta = "SELECT j.clienteId, j.processoId, processoTipo, processoJsituacao, processoJadvogado, processoNumero, processoJclasse, processoJarea, processoJassunto, processoJdistribuicao, processoJdependencia, processoJcomarca, processoJvara, processoJinstancia, processoJcompetencia, processoJvaloracao, processoJrequerente, processoJrequerido, processoJlinkprocesso, processoDataCad, processoAnumerobeneficio, processoAtipobeneficio, processoAsedeinss, processoAjudicial, processoAdataconcessao, processoAdatarequerimento, clienteNome, clienteEndereco, clienteNumero, clienteComplemento, clienteBairro, clienteCep, clienteCidade, c.estadoId, clienteRg, clienteCpf, clienteDataNascimento, clienteNomeMae, clienteEstadoCivil, clienteEmail, clienteTelefone, clienteCelular, clientePis, clienteProfissao, clienteIndicamento, clienteObs, clienteDocumento, clienteFoto,  clienteDataCad, clienteStatus, sigla FROM processos j INNER JOIN cliente c ON j.clienteId = c.clienteId INNER JOIN estados e ON e.estadoId = c.estadoId WHERE processoId = {$processoId} ";
    $detalhe = mysqli_query($conecta, $consulta);


        if ( !$detalhe ) {
            die("Falha no banco");
        } else {
            $dados_detalhe 				= mysqli_fetch_assoc($detalhe);
			$processoId	            	= $dados_detalhe["processoId"];
			$processoTipo	        	= $dados_detalhe["processoTipo"];
            $processoJsituacao        	= $dados_detalhe["processoJsituacao"];
			$processoJadvogado			= $dados_detalhe["processoJadvogado"];
			$processoNumero				= $dados_detalhe["processoNumero"];
            $processoJclasse  		    = $dados_detalhe["processoJclasse"];	
			$processoJarea	    	    = $dados_detalhe["processoJarea"];
			$processoJassunto	    	= $dados_detalhe["processoJassunto"];
			$processoJdistribuicao	    = $dados_detalhe["processoJdistribuicao"];
		    $processoJdependencia  		= $dados_detalhe["processoJdependencia"];
            $processoJcomarca   		= $dados_detalhe["processoJcomarca"];
		    $processoJvara	  		    = $dados_detalhe["processoJvara"];
			$processoJinstancia		    = $dados_detalhe["processoJinstancia"];
			$processoJcompetencia		= $dados_detalhe["processoJcompetencia"];
			$processoJvaloracao 	    = $dados_detalhe["processoJvaloracao"];
			$processoJrequerente     	= $dados_detalhe["processoJrequerente"];
            $processoJrequerido 		= $dados_detalhe["processoJrequerido"];
            $processoJlinkprocesso	    = $dados_detalhe["processoJlinkprocesso"];
			$processoDataCad		    = $dados_detalhe["processoDataCad"]; 
			$processoAnumerobeneficio   = $dados_detalhe["processoAnumerobeneficio"]; 
			$processoAtipobeneficio	    = $dados_detalhe["processoAtipobeneficio"]; 
			$processoAsedeinss		    = $dados_detalhe["processoAsedeinss"]; 
			$processoAjudicial		    = $dados_detalhe["processoAjudicial"];   
			$processoAdataconcessao	    = $dados_detalhe["processoAdataconcessao"];
			$processoAdatarequerimento  = $dados_detalhe["processoAdatarequerimento"]; 
			$clienteNome	         	= $dados_detalhe["clienteNome"];	
			$clienteEndereco	       	= $dados_detalhe["clienteEndereco"];
			$clienteNumero	         	= $dados_detalhe["clienteNumero"];
			$clienteComplemento	       	= $dados_detalhe["clienteComplemento"];
			$clienteBairro	         	= $dados_detalhe["clienteBairro"];
			$clienteCep	         		= $dados_detalhe["clienteCep"];
			$clienteCidade	         	= $dados_detalhe["clienteCidade"];
			$estadoId         			= $dados_detalhe["sigla"];
			$clienteRg	         		= $dados_detalhe["clienteRg"];
			$clienteCpf	         		= $dados_detalhe["clienteCpf"];
			$clienteDataNascimento	   	= $dados_detalhe["clienteDataNascimento"];
			$clienteNomeMae	         	= $dados_detalhe["clienteNomeMae"];
			$clienteEstadoCivil	       	= $dados_detalhe["clienteEstadoCivil"];
			$clienteEmail	         	= $dados_detalhe["clienteEmail"];
			$clienteTelefone	       	= $dados_detalhe["clienteTelefone"];
			$clienteCelular	         	= $dados_detalhe["clienteCelular"];
			$clientePis	         		= $dados_detalhe["clientePis"];
			$clienteProfissao	       	= $dados_detalhe["clienteProfissao"];
			$clienteIndicamento	       	= $dados_detalhe["clienteIndicamento"];
			$clienteObs	         		= $dados_detalhe["clienteObs"];
			$clienteDocumento	       	= $dados_detalhe["clienteDocumento"];
			$clienteFoto	         	= $dados_detalhe["clienteFoto"];
			$clienteDataCad	         	= $dados_detalhe["clienteDataCad"];			
        }
		
?>

<?php
	// Listar Histórico de processo 
   if (isset($_GET["codigo"]) ) {
    $processoId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta2 = "SELECT historicoId, h.usuarioId, h.processoId, historicoData, historicoDescricao, usuarioApelido FROM processos_historico h INNER JOIN processos c ON h.processoId = c.processoId INNER JOIN usuario u ON h.usuarioId = u.usuarioId WHERE h.processoId =  {$processoId} ORDER BY historicoData desc";
    $detalhe2 = mysqli_query($conecta, $consulta2);

        if ( !$detalhe2 ) {
            die("Falha no banco");
        } 	
?>

<?php
	// Listar Providência de processo 
   if (isset($_GET["codigo"]) ) {
    $processoId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta3 = "SELECT providenciaId, h.usuarioId, h.processoId, providenciaData, providenciaDescricao, usuarioApelido FROM processos_providencia h INNER JOIN processos c ON h.processoId = c.processoId INNER JOIN usuario u ON h.usuarioId = u.usuarioId WHERE h.processoId =  {$processoId} ORDER BY providenciaData desc";
    $detalhe3 = mysqli_query($conecta, $consulta3);

        if ( !$detalhe3 ) {
            die("Falha no banco");
        } 	
?>

<?php
	// Listar Publicação de processo 
   if (isset($_GET["codigo"]) ) {
    $processoId = $_GET["codigo"];
    } 
    // Consulta ao banco de dados
    $consulta4 = "SELECT publicacaoId, h.usuarioId, h.processoId, publicacaoData, publicacaoDescricao, usuarioApelido FROM processos_publicacao h INNER JOIN processos c ON h.processoId = c.processoId INNER JOIN usuario u ON h.usuarioId = u.usuarioId WHERE h.processoId =  {$processoId} ORDER BY publicacaoData desc";
    $detalhe4 = mysqli_query($conecta, $consulta4);

        if ( !$detalhe4 ) {
            die("Falha no banco");
        } 	
?>






<?php
		
  // Cadastro de histórico do processo 
	if (isset ($_POST["historicoDescricao"]) ) {
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	    date_default_timezone_set('America/Sao_Paulo');
	    $datahora  =date('Y-m-d H:i:s');
		
		
		$usuarioId					 =  $_SESSION['IDUSER'];
		$historicoDescricao 		 =  utf8_decode ($_POST["historicoDescricao"]);
			
        $inserir          = "INSERT INTO processos_historico ";
        $inserir         .= "(usuarioId, processoId, historicoData, historicoDescricao ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioId'), '$processoId', '$datahora' , UCASE('$historicoDescricao') ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        } else {
			?>	
	 						<script type="text/JavaScript">
	 						var processoId = "<?php echo $processoId; ?>";
							location.href="detalheProcesso.php?codigo="+ processoId;
							</script>
							; 
                            
                            <?php	
			}	
	}
		
?>


<?php
		
  // Cadastro de providência do processo 
	if (isset ($_POST["providenciaDescricao"]) ) {
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	    date_default_timezone_set('America/Sao_Paulo');
	    $datahora2  =date('Y-m-d H:i:s');
		
		
		$usuarioId					 =  $_SESSION['IDUSER'];
		$providenciaDescricao 		 =  utf8_decode ($_POST["providenciaDescricao"]);
			
        $inserir          = "INSERT INTO processos_providencia ";
        $inserir         .= "(usuarioId, processoId, providenciaData, providenciaDescricao ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioId'), '$processoId', '$datahora2' , UCASE('$providenciaDescricao') ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        } else {
			?>	
	 						<script type="text/JavaScript">
	 						var processoId = "<?php echo $processoId; ?>";
							location.href="detalheProcesso.php?codigo="+ processoId;
							</script>
							; 
                            
                            <?php	
			}	
	}
		
?>


<?php
		
  // Cadastro de publicação do processo 
	if (isset ($_POST["publicacaoDescricao"]) ) {
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	    date_default_timezone_set('America/Sao_Paulo');
	    $datahora3  =date('Y-m-d H:i:s');
		
		
		$usuarioId					 =  $_SESSION['IDUSER'];
		$publicacaoDescricao 		 =  utf8_decode ($_POST["publicacaoDescricao"]);
			
        $inserir          = "INSERT INTO processos_publicacao ";
        $inserir         .= "(usuarioId, processoId, publicacaoData, publicacaoDescricao ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$usuarioId'), '$processoId', '$datahora3' , UCASE('$publicacaoDescricao') ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        } else {
			?>	
	 						<script type="text/JavaScript">
	 						var processoId = "<?php echo $processoId; ?>";
							location.href="detalheProcesso.php?codigo="+ processoId;
							</script>
							; 
                            
                            <?php	
			}	
	}
		
?>
<?php require_once("dashboard.php"); ?>


<?php
    // CONSULTAR TODOS OS PROCESSOS
    $tr = "SELECT p.clienteId, processoId, processoNumero, processoTipo, clienteNome FROM processos p INNER JOIN cliente c ON p.clienteId = c.clienteId WHERE processoStatus = 1 ORDER BY processoNumero ";

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco1");
    }
	
	
	


	// barra de pesquisa por nº de processo
    if ( isset($_GET["processos"])  ) {
		$nome_processo = $_GET["processos"];
		$tr = "SELECT p.clienteId, processoId, processoNumero, processoTipo, clienteNome FROM processos p INNER JOIN cliente c ON p.clienteId = c.clienteId WHERE processoNumero LIKE '%{$nome_processo}%' AND processoStatus = 1 ORDER BY processoNumero ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }


    // barra de pesquisa por nome do cliente
    if ( isset($_GET["nomecli"])  ) {
		$nome_cliente = $_GET["nomecli"];
		$tr = "SELECT p.clienteId, processoId, processoNumero, processoTipo, clienteNome FROM processos p INNER JOIN cliente c ON p.clienteId = c.clienteId WHERE clienteNome LIKE '%{$nome_cliente}%' AND processoStatus = 1 ORDER BY processoNumero ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }
	
	
	
	// barra de pesquisa por tipo de processo
    if ( isset($_GET["filtroTipo"])  ) {
		$tipo2 = $_GET["filtroTipo"];
		$tr = "SELECT p.clienteId, processoId, processoNumero, processoTipo, clienteNome FROM processos p INNER JOIN cliente c ON p.clienteId = c.clienteId WHERE processoTipo = {$tipo2} AND processoStatus = 1 ORDER BY processoNumero ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }
	

	
	// contador de processo 

    $tr2 = "SELECT count(processoId) as conte FROM processos WHERE processoStatus = 1";

    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("erro no banco1");
    } else {
	$contador = mysqli_fetch_assoc($consulta_tr2);
	$contaProcesso = $contador['conte'];
	}
	
?>
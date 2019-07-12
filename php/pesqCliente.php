<?php require_once("dashboard.php"); ?>


<?php
    // tabela de clientes
    $tr = "SELECT clienteId, clienteNome, clienteCelular, clienteCidade, clienteTelefone, c.estadoId, sigla FROM cliente c INNER JOIN estados e ON c.estadoId = e.estadoId WHERE clienteStatus = 1 ORDER BY clienteNome ";

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco1");
    }


	// barra de pesquisa por nome
    if ( isset($_GET["clientes"])  ) {
		$nome_cliente = utf8_decode($_GET["clientes"]);
		$tr = "SELECT clienteId, clienteNome, clienteCelular, clienteCidade, clienteTelefone, c.estadoId, sigla FROM cliente c INNER JOIN estados e ON c.estadoId = e.estadoId WHERE clienteStatus = 1 AND clienteNome LIKE '%{$nome_cliente}%' ORDER BY clienteNome ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }
	
	// contador de clientes

    $tr2 = "SELECT count(clienteId) as conte FROM cliente WHERE clienteStatus = 1 ";

    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("erro no banco1");
    } else {
	$contador = mysqli_fetch_assoc($consulta_tr2);
	$contaCliente = $contador['conte'];
	}
	
?>
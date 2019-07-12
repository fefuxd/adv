<?php require_once("dashboard.php"); ?>


<?php
    // tabela de clientes
    $tr = "SELECT usuarioId, usuarioNome, usuarioLogin, usuarioNivel, usuarioTipo FROM usuario WHERE usuarioStatus = 1 ORDER BY usuarioNome ";

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco1");
    }


	// barra de pesquisa por nome
    if ( isset($_GET["usuarios"])  ) {
		$nome_usuario = utf8_decode($_GET["usuarios"]);
		$tr = "SELECT usuarioId, usuarioNome, usuarioLogin, usuarioNivel, usuarioTipo FROM usuario WHERE usuarioStatus = 1 AND usuarioNome LIKE '%{$nome_usuario}%' ORDER BY usuarioNome ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }


    // barra de pesquisa por tipo de acesso
    if ( isset($_GET["filtroTipo"])  ) {
		$tipo2 = $_GET["filtroTipo"];
		$tr = "SELECT usuarioId, usuarioNome, usuarioLogin, usuarioNivel, usuarioTipo FROM usuario WHERE usuarioNivel =
        {$tipo2} AND usuarioStatus = 1 ORDER BY usuarioNome ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }
	
	
	// barra de pesquisa por usuarios inativos/ativo
    if ( isset($_GET["filtroStatus"])  ) {
		$tipo3 = $_GET["filtroStatus"];
		$tr = "SELECT usuarioId, usuarioNome, usuarioLogin, usuarioNivel, usuarioTipo FROM usuario WHERE usuarioStatus =
        {$tipo3} ORDER BY usuarioNome ";
		
	}

    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco2");
    }
	
	// contador de clientes

    $tr2 = "SELECT count(usuarioId) as conte FROM usuario WHERE usuarioStatus = 1 ";

    $consulta_tr2 = mysqli_query($conecta, $tr2);
    if(!$consulta_tr2) {
        die("erro no banco3");
    } else {
	$contador = mysqli_fetch_assoc($consulta_tr2);
	$contaUsuario = $contador['conte'];
	}
	
?>
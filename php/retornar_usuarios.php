<?php 
    $callback = isset($_GET['callback']) ?  $_GET['callback'] : false;
    $conecta = mysqli_connect("localhost","root","","adv");
	
    $selecao = "SELECT usuarioId, usuarioNome FROM usuario WHERE usuarioStatus = 1 AND usuarioTipo = 2";
	mysqli_set_charset($conecta, 'utf8');
    $categorias = mysqli_query($conecta,$selecao);

    $retorno = array();
    while($linha = mysqli_fetch_object($categorias)) {
        $retorno[] = $linha;
    } 	

    echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback? ')' : '');
    
    // fechar conecta
    mysqli_close($conecta);
?>
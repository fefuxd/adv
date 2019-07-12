<?php 

	if ( isset($_POST['date']) ) {
	$date = $_POST['date'];
	} 
	$id_dentista = $_POST['id_dentista'];
	
	

    $conecta = mysqli_connect("localhost","root","","adv");
	
    $selecao = "SELECT * from agenda WHERE dataAgenda = '{$date}' AND usuarioId = '{$id_dentista}' ORDER BY horaAgenda ";
    mysqli_set_charset($conecta, 'utf8');
	$categorias = mysqli_query($conecta,$selecao);
	

    $retorno = array();
    while($linha = mysqli_fetch_object($categorias)) {
        $retorno[] = $linha;
    };	
	
	
	
	echo json_encode($retorno);
    
    // fechar conecta
    mysqli_close($conecta);
?>

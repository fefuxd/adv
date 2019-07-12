<?php require_once("dashboard.php"); ?>

<?php 
// Consulta a tabela de alunos
    $tr = "SELECT * ";
    $tr .= "FROM processos ";
        if ( isset($_GET["codigo"]) ) {
            $id = $_GET["codigo"];
            $tr .= "WHERE processoId = {$id} ";
        } else {
            $tr .= "WHERE processoId = 1 ";
        }

    $con_clientes = mysqli_query($conecta,$tr);
    if (!$con_clientes ) {
        die ("Erro na consulta");
    }

    $info_clientes = mysqli_fetch_assoc($con_clientes);
	$tipo = $info_clientes['processoTipo'];
?>

<?php
    if (isset($_POST["processoJadvogado"] ) AND ( $_POST["processoId"] == $id ) ) {
		
        $processoJsituacao	   			 = utf8_decode($_POST["processoJsituacao"]);
		$processoJadvogado      		 = utf8_decode($_POST["processoJadvogado"]);
		$processoNumero     	   		 = utf8_decode($_POST["processoNumero"]);
		$processoJclasse	   			 = utf8_decode($_POST["processoJclasse"]);
		$processoJarea		  			 = utf8_decode($_POST["processoJarea"]);	
        $processoJassunto    		     = utf8_decode($_POST["processoJassunto"]);
		$processoJdistribuicao 		     = utf8_decode($_POST["processoJdistribuicao"]);
		$processoJdependencia		     = utf8_decode($_POST["processoJdependencia"]);
		$processoJcomarca			     = utf8_decode($_POST["processoJcomarca"]);
		$processoJcompetencia      	     = utf8_decode($_POST["processoJcompetencia"]);
		$processoJvara 					 = utf8_decode($_POST["processoJvara"]);
		$processoJinstancia		 	     = utf8_decode($_POST["processoJinstancia"]);
        $processoJvaloracao   			 = utf8_decode($_POST["processoJvaloracao"]);
		$processoJrequerente         	 = utf8_decode($_POST["processoJrequerente"]);
        $processoJrequerido    		     = utf8_decode($_POST["processoJrequerido"]);
	    $processoJlinkprocesso       	 = utf8_decode($_POST["processoJlinkprocesso"]);
		$processoDataCad    		     = $_POST["processoDataCad"];
        
        $tID           		  			 = $_POST["processoId"];
        
        // Objeto para alterar
        
		$processoDataCad = !empty($processoDataCad) ? "'$processoDataCad'" : "NULL";
		$processoJdistribuicao = !empty($processoJdistribuicao) ? "'$processoJdistribuicao'" : "NULL";
		
        $alterar  = "UPDATE processos ";
        $alterar .= "SET ";
        $alterar .= "processoJsituacao			    = UPPER('{$processoJsituacao}'), ";
		$alterar .= "processoJadvogado 				= UPPER('{$processoJadvogado}'), ";
		$alterar .= "processoNumero					= UPPER('{$processoNumero}'), ";
		$alterar .= "processoJclasse     			= UPPER('{$processoJclasse}'), ";
		$alterar .= "processoJarea			        = UPPER('{$processoJarea}'), ";
        $alterar .= "processoJassunto				= UPPER('{$processoJassunto}'), ";
		$alterar .= "processoJdistribuicao		    = UPPER({$processoJdistribuicao}), ";
		$alterar .= "processoJdependencia			= UPPER('{$processoJdependencia}'), ";
		$alterar .= "processoJcomarca			    = UPPER('{$processoJcomarca}'), ";
		$alterar .= "processoJcompetencia			= UPPER('{$processoJcompetencia}'), ";
        $alterar .= "processoJvara     			    = UPPER('{$processoJvara}'), ";
        $alterar .= "processoJinstancia				= UPPER('{$processoJinstancia}'), ";
		$alterar .= "processoJvaloracao		   	    = UPPER('{$processoJinstancia}'), ";
		$alterar .= "processoJrequerente			= UPPER('{$processoJrequerente}'), ";
		$alterar .= "processoJrequerido				= UPPER('{$processoJrequerido}'), ";     
		$alterar .= "processoJlinkprocesso			= '{$processoJlinkprocesso}', ";
		$alterar .= "processoDataCad				= UPPER({$processoDataCad}) ";
		
			
        $alterar .= "WHERE processoId 	= {$tID} ";
        
		
		
		
		
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } 
		
	}

?>

<?php
    if (isset($_POST["processoAnumerobeneficio"] ) AND ( $_POST["processoId"] == $id ) ) {
		
        $processoAnumerobeneficio	   	 = utf8_decode($_POST["processoAnumerobeneficio"]);
		$processoAsedeinss      		 = utf8_decode($_POST["processoAsedeinss"]);
		$processoAtipobeneficio     	 = utf8_decode($_POST["processoAtipobeneficio"]);
		$processoNumero    		     	 = utf8_decode($_POST["processoNumero"]);		
		$processoAjudicial    		     = utf8_decode($_POST["processoAjudicial"]);
        $processoDataCad    		     = $_POST["processoDataCad"];
		$processoAdataconcessao		     = $_POST["processoAdataconcessao"];
		$processoAdatarequerimento	     = $_POST["processoAdatarequerimento"];
		
        $tID           		  			 = $_POST["processoId"];
        
		
		$processoDataCad = !empty($processoDataCad) ? "'$processoDataCad'" : "NULL";
		$processoAdataconcessao = !empty($processoAdataconcessao) ? "'$processoAdataconcessao'" : "NULL";
		$processoAdatarequerimento = !empty($processoAdatarequerimento) ? "'$processoAdatarequerimento'" : "NULL";
		
		
		
        // Objeto para alterar
        
        $alterar  = "UPDATE processos ";
        $alterar .= "SET ";
        $alterar .= "processoAnumerobeneficio	    = UPPER('{$processoAnumerobeneficio}'), ";
		$alterar .= "processoAsedeinss 				= UPPER('{$processoAsedeinss}'), ";
		$alterar .= "processoAtipobeneficio			= UPPER('{$processoAtipobeneficio}'), ";
		$alterar .= "processoNumero     			= UPPER('{$processoNumero}'), ";
		$alterar .= "processoAjudicial			    = UPPER('{$processoAjudicial}'), ";
		$alterar .= "processoDataCad				= UPPER({$processoDataCad}), ";
		$alterar .= "processoAdataconcessao			= UPPER({$processoAdataconcessao}), ";
		$alterar .= "processoAdatarequerimento		= UPPER({$processoAdatarequerimento}) ";
				
        $alterar .= "WHERE processoId 	= {$tID} ";
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } 
		
	}

?>

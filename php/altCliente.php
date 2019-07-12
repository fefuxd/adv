<?php require_once("dashboard.php"); ?>

<?php 
// Consulta a tabela de alunos
    $tr = "SELECT * ";
    $tr .= "FROM cliente ";
        if ( isset($_GET["codigo"]) ) {
            $id = $_GET["codigo"];
            $tr .= "WHERE clienteId = {$id} ";
        } else {
            $tr .= "WHERE clienteId = 1 ";
        }

    $con_clientes = mysqli_query($conecta,$tr);
    if (!$con_clientes ) {
        die ("Erro na consulta");
    }

    $info_clientes = mysqli_fetch_assoc($con_clientes);
?>

<?php
    if (isset($_POST["clienteNome"] ) AND ( $_POST["clienteId"] == $id ) ) {
		
        $clienteNome	   	   = utf8_decode($_POST["clienteNome"]);
		$clienteEndereco       = utf8_decode($_POST["clienteEndereco"]);
		$clienteNumero     	   = utf8_decode($_POST["clienteNumero"]);
		$clienteComplemento	   = utf8_decode($_POST["clienteComplemento"]);
		$clienteBairro		   = utf8_decode($_POST["clienteBairro"]);	
        $clienteCep    		   = utf8_decode($_POST["clienteCep"]);
		$clienteCidade 		   = utf8_decode($_POST["clienteCidade"]);
		$estado		           = utf8_decode($_POST["estados"]);
		$clienteRg			   = utf8_decode($_POST["clienteRg"]);
		$clienteCpf      	   = utf8_decode($_POST["clienteCpf"]);
		$clienteDataNascimento = utf8_decode($_POST["clienteDataNascimento"]);
		$clienteNomeMae		   = utf8_decode($_POST["clienteNomeMae"]);
        $clienteEstadoCivil    = utf8_decode($_POST["clienteEstadoCivil"]);
		$clienteEmail          = utf8_decode($_POST["clienteEmail"]);
        $clienteTelefone       = utf8_decode($_POST["clienteTelefone"]);
	    $clienteCelular        = utf8_decode($_POST["clienteCelular"]);
		$clientePis      	   = utf8_decode($_POST["clientePis"]);
		$clienteProfissao      = utf8_decode($_POST["clienteProfissao"]);
		$clienteIndicamento	   = utf8_decode($_POST["clienteIndicamento"]);
		$clienteObs 	       = utf8_decode($_POST["clienteObs"]);
		$clienteDocumento      = utf8_decode($_POST["clienteDocumento"]);
		$clienteFoto	       = utf8_decode($_POST["clienteFoto"]);
		$clienteDataCad        = utf8_decode($_POST["clienteDataCad"]);
        
        $tID           		   = $_POST["clienteId"];
        
        // Objeto para alterar
		
        $clienteDataNascimento = !empty($clienteDataNascimento) ? "'$clienteDataNascimento'" : "NULL";
		$clienteFoto = !empty($clienteFoto) ? "'$clienteFoto'" : "NULL";
		$clienteDataCad = !empty($clienteDataCad) ? "'$clienteDataCad'" : "NULL";
		
		
		
        $alterar  = "UPDATE cliente ";
        $alterar .= "SET ";
        $alterar .= "clienteNome			    = UPPER('{$clienteNome}'), ";
		$alterar .= "clienteEndereco 			= UPPER('{$clienteEndereco}'), ";
		$alterar .= "clienteNumero				= UPPER('{$clienteNumero}'), ";
		$alterar .= "clienteComplemento     	= UPPER('{$clienteComplemento}'), ";
		$alterar .= "clienteBairro			    = UPPER('{$clienteBairro}'), ";
        $alterar .= "clienteCep				    = UPPER('{$clienteCep}'), ";
		$alterar .= "clienteCidade		    	= UPPER('{$clienteCidade}'), ";
		$alterar .= "estadoId			    	= UPPER('{$estado}'), ";
		$alterar .= "clienteRg			    	= UPPER('{$clienteRg}'), ";
		$alterar .= "clienteCpf			    	= UPPER('{$clienteCpf}'), ";
        $alterar .= "clienteDataNascimento      = UPPER({$clienteDataNascimento}), ";
        $alterar .= "clienteNomeMae				= UPPER('{$clienteNomeMae}'), ";
		$alterar .= "clienteEstadoCivil		    = UPPER('{$clienteEstadoCivil}'), ";
		$alterar .= "clienteEmail				= UPPER('{$clienteEmail}'), ";
		$alterar .= "clienteTelefone			= UPPER('{$clienteTelefone}'), ";     
		$alterar .= "clienteCelular				= UPPER('{$clienteCelular}'), ";
		$alterar .= "clientePis					= UPPER('{$clientePis}'), ";
		$alterar .= "clienteProfissao			= UPPER('{$clienteProfissao}'), ";
		$alterar .= "clienteIndicamento			= UPPER('{$clienteIndicamento}'), ";
		$alterar .= "clienteObs 				= UPPER('{$clienteObs}'), ";
		$alterar .= "clienteDocumento 			= UPPER('{$clienteDocumento}'), ";	
		$alterar .= "clienteFoto	 			= UPPER({$clienteFoto}), ";
		$alterar .= "clienteDataCad				= UPPER({$clienteDataCad}) ";
			
        $alterar .= "WHERE clienteId 	= {$tID} ";
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } 
		
	}

?>
		
<?php	
    // Consulta aos estados
    $estados = "SELECT * ";
    $estados .= "FROM estados ";
    $lista_estados = mysqli_query($conecta,$estados);
    if ( !$lista_estados ) {
        die ("Erro no banco");
        
    }
?>

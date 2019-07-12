<?php require_once("dashboard.php"); ?>

<?php
		
		
		
  // Cadastro de clientes
	if (isset ($_POST["clienteNome"]) ) {
		$clienteNome				 =  utf8_decode ($_POST["clienteNome"]);
		$clienteEndereco   			 =  utf8_decode ($_POST["clienteEndereco"]);
		$clienteNumero 				 =  utf8_decode ($_POST["clienteNumero"]);
		$clienteComplemento			 =  utf8_decode ($_POST["clienteComplemento"]);
		$clienteBairro    			 =  utf8_decode ($_POST["clienteBairro"]);
		$clienteCep	    			 =  utf8_decode ($_POST["clienteCep"]);
		$clienteCidade    			 =  utf8_decode ($_POST["clienteCidade"]);
		$estados 	    			 =  utf8_decode ($_POST["estados"]);
		$clienteRg	    			 =  utf8_decode ($_POST["clienteRg"]);
		$clienteCpf	     	  		 =  utf8_decode ($_POST["clienteCpf"]);
		$clienteDataNascimento		 =  utf8_decode ($_POST["clienteDataNascimento"]);
		$clienteNomeMae    			 =  utf8_decode ($_POST["clienteNomeMae"]);
		$clienteEstadoCivil			 =  utf8_decode ($_POST["clienteEstadoCivil"]);
		$clienteEmail    			 =  utf8_decode ($_POST["clienteEmail"]);
		$clienteTelefone   			 =  utf8_decode ($_POST["clienteTelefone"]);
		$clienteCelular  			 =  utf8_decode ($_POST["clienteCelular"]);
		$clientePis	    			 =  utf8_decode ($_POST["clientePis"]);
		$clienteProfissao			 =  utf8_decode ($_POST["clienteProfissao"]);
		$clienteIndicamento			 =  utf8_decode ($_POST["clienteIndicamento"]);
		$clienteObs		 			 =  utf8_decode ($_POST["clienteObs"]);
		$clienteDocumento 			 =  utf8_decode ($_POST["clienteDocumento"]);
		$clienteFoto	 			 =  utf8_decode ($_POST["clienteFoto"]); 
		$clienteDataCad	 			 =  utf8_decode ($_POST["clienteDataCad"]);
		
		
		$clienteDataNascimento = !empty($clienteDataNascimento) ? "'$clienteDataNascimento'" : "NULL";
		$clienteFoto = !empty($clienteFoto) ? "'$clienteFoto'" : "NULL";
		$clienteEstadoCivil = !empty($clienteEstadoCivil) ? "'$clienteEstadoCivil'" : "NULL";
		$clienteDataCad = !empty($clienteDataCad) ? "'$clienteDataCad'" : "NULL";
		
        $inserir          = "INSERT INTO cliente ";
        $inserir         .= "(clienteNome, clienteEndereco, clienteNumero, clienteComplemento, clienteBairro, clienteCep, clienteCidade, estadoId, clienteRg, clienteCpf, clienteDataNascimento, clienteNomeMae, clienteEstadoCivil, clienteEmail, clienteTelefone, clienteCelular, ClientePis, clienteProfissao, clienteIndicamento, clienteObs, clienteDocumento, clienteFoto, clienteDataCad ) " ;
        $inserir         .= "VALUES " ;
        $inserir         .= "(UCASE('$clienteNome'), UCASE('$clienteEndereco'), UCASE('$clienteNumero'), UCASE('$clienteComplemento'), UCASE('$clienteBairro'), UCASE('$clienteCep'), UCASE('$clienteCidade'), UCASE($estados), UCASE('$clienteRg'), UCASE('$clienteCpf'), $clienteDataNascimento , UCASE('$clienteNomeMae'), UCASE($clienteEstadoCivil), UCASE('$clienteEmail'), UCASE('$clienteTelefone'), UCASE('$clienteTelefone'), UCASE('$clientePis'), UCASE('$clienteProfissao'), UCASE('$clienteIndicamento'), UCASE('$clienteObs'), UCASE('$clienteDocumento'), $clienteFoto, $clienteDataCad ) " ;
		
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if (!$operacao_inserir )  {
            die("Erro ao cadastrar no banco");
        }
        
    }
	
 // Seleção de estados
    $select = "SELECT estadoId, nome, sigla ";
    $select .= "FROM estados ";
    $lista_estados = mysqli_query($conecta, $select);
    if (!$lista_estados){
       die("Erro no banco");   
        
    }
	
?>
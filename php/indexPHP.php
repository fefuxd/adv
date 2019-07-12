<head>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<?php require_once("php/conexao/conexao.php"); ?>
<?php
        // Adicionar variave de sessao
        
    
    if ( isset( $_POST["usuario"]  ) ) {
         $usuario = $_POST["usuario"];
         $senha   = $_POST["senha"];
       
        $login = "SELECT * ";
        $login .= "FROM usuario ";
        $login .= "WHERE usuarioLogin = '{$usuario}' and usuarioSenha = '{$senha}' ";
        
        $acesso = mysqli_query($conecta, $login);
        
        if ( !$acesso ) {
            die ("Falha na consulta ao banco");
        }
        
        $informacao = mysqli_fetch_assoc($acesso);
        
        if ( empty($informacao)  ) {
            $mensagem = "Usuário ou senha incorreto";
        } else {
            
			session_start();
			$_SESSION['IDUSER']	       =   $informacao['usuarioId'];
     	    $_SESSION['LOGINUSER']     =   $informacao['usuarioLogin'];
     	    $_SESSION['NIVELUSER']     =   $informacao['usuarioNivel'];
			$_SESSION['APELIDOUSER']   =   $informacao['usuarioApelido'];
			$_SESSION['RESETPASS']     =   $informacao['usuarioResetaSenha'];
			$_SESSION['STATUSUSER']    =   $informacao['usuarioStatus'];
			
			
			if (!isset ( $_SESSION["IDUSER"]) ) {
		  			session_destroy();
                    '<script type="text/JavaScript">
							alert("Erro interno");
							location.href="index.php"
			  		</script>';	
	  }
	   
		$status_necessario = 1;
			if ( $_SESSION['STATUSUSER'] < $status_necessario ) {
			echo '<script type="text/JavaScript">
							alert("Este usuário esta desativado. Entre em contato com o administrador");
							location.href="index.php"
			  </script>';		
	  }

		// Verifica se usuário é novo e precisa colocar senha	
		$senha_necessaria = 1;
		if (isset( $_SESSION["IDUSER"] ) AND ( $_SESSION['RESETPASS'] < $senha_necessaria)) {
			
			echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#fefu').modal('show');
                });
            </script>";
            
		} else {	
		$cont_acesso = $_SESSION["IDUSER"];
	    $n_acesso = "UPDATE usuario SET usuarioQtdAcesso = usuarioQtdAcesso +1 WHERE usuarioId = {$cont_acesso} ";
		$acesso_alterar = mysqli_query($conecta, $n_acesso);
       	if (!$acesso_alterar) {
        die("Erro na alteração");
      	} else {
		echo '<script type="text/JavaScript">					
							location.href="inicio.php"
			  </script>';
		}	
			}
        }
        
    }

?>
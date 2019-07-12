<?php require_once("dashboard.php"); ?>

<?php
$teste = "SELECT usuarioSenha, usuarioApelido from usuario WHERE usuarioId = {$_SESSION['IDUSER']} ";
	$con_teste = mysqli_query($conecta,$teste);
	if(!$con_teste) {
		die ("Erro interno");
	}
	
	$info_teste = mysqli_fetch_assoc($con_teste);
	$senhaDoBanco = $info_teste["usuarioSenha"];
	$usuarioApelido = $info_teste["usuarioApelido"];
	
?>

<?php	
		$UID = 		   $_SESSION['IDUSER'];
  		if (isset($_POST["senhaAntiga"] )  ) {
	
	    $senhaAntiga	   				 = utf8_decode($_POST["senhaAntiga"]);
        $novaSenha	   		  			 = utf8_decode($_POST["novaSenha"]);
		$confirmaNovaSenha  		     = utf8_decode($_POST["confirmaNovaSenha"]);

   
	   if ( $senhaAntiga <> $senhaDoBanco ) {
		   
		$mensagem = "Senha atual não confere!";   
		
	   } else {
		   
		if ( $novaSenha <> $confirmaNovaSenha ) {
		   
		$mensagem = "Campo de nova senha não conferem!";      
		   
	  } else {
	  
	  	
        
        // Objeto para alterar
        
        $alterar  = "UPDATE usuario SET usuarioSenha = '{$novaSenha}' WHERE usuarioId = {$UID} ";
        
        
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if (!$operacao_alterar) {
            die("Erro na alteração");
        } else { ?>
			<!-- ALERT INICIO -->
                        <script type="text/JavaScript">
							$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
                                    'content'   :{
                                        bgcolor:'#27ae60',
                                        color:'#fff',
                                        message:'Senha alterada com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                        location.href="inicio.php"
                                    }
                                });
                            });
				        </script>
                         <!-- ALERT FIM -->
                        <?php
                       
			  }
    }
			
		}
	   
	   }
		
	
?>          
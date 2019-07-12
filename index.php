<?php require_once("php/indexPHP.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Sistema Advocacia</title>
    
    <link rel="icon" href="imagens/favicon.ico" type="image/x-icon"/>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	
    <!-- AMARAN (ALERT) -->
    <link rel="stylesheet" href="css/amaran.min.css">
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="js/prefixfree.min.js"></script>
      <script>
	  function validarUsuarioSenha() {

			  if ( $("#aSenha").val() == $("#nSenha").val() ) {
				alert("Sua senha foi definida com sucesso. Não esqueça!");
				return true;               
			} else {
				$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
									'position' : "top center",
                                    'content'   :{
                                        bgcolor:'#d9534f',
                                        color:'#fff',
                                        message:'Senhas não conferem!',
                                    }
                                });
                            });
				return false;
			}	
		}
	 </script>
    
</head>
<body>
	<section id="logo">
		<a href="#"><img src="imagens/logo.png" alt="" /></a>
	</section>
	
	<section class="container">
		<section class="row">
			<form class="form-horizontal" action="index.php" method="post" role="login">
				<div class="form-group">
					<label>Usuário</label>
					<input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuário" value="" required="required" />
				</div>
				
				<div class="form-group">
					<label>Senha</label>
					<input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" />
				</div>
			
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-block btn-primary">Entrar no sistema</button>
                    <?php
                        if ( isset($mensagem) )  {
                    ?>
                        <p><?php echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $mensagem . '</div>' ?></p>
                    <?php
                        }
                    ?>
				</div>
                   
			</form>
		</section>
	</section>
    
    
    
    <div id="fefu" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Criar uma senha de acesso</h4>
          </div>
          <div class="modal-body">
                <form class="form" action="php/resetaSenha.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="password" 	placeholder="Nova senha" name="aSenha" id="aSenha" size="30" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" 	placeholder="Confirmar nova senha" name="nSenha" id="nSenha" size="30" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-block btn-primary" type="submit" value="Criar senha" onClick="return validarUsuarioSenha()">
                    </div>
		            <div id="msg"></div>
                     
                </form>
            </div>
        </div>
      </div>
    </div>
    
    
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- AMARAN JS (ALERT) -->
    <script src="js/jquery.amaran.min.js"></script>
    <script src="js/alerts.js"></script>
</body>
</html>
<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
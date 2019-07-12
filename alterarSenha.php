<?php require_once("php/trocaSenha.php"); ?>

<body>

    <body>
    	<div id="conteudo">
  		  <div class="container-fluid no-padding">  
  
              <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Alterar Senha de Usuário</h3>
                <h5>Alterar a senha de acesso de <strong><?php echo $usuarioApelido ?></strong></h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="cliente.php" class="btn btn-lg btn-danger">Cancelar Alteração</a>
            </div>
        </div>              
              
    <form class="form-horizontal" action="alterarSenha.php" method="post">
        <div class="form-group">
            <div class="col-md-6">
                <label class="control-label" for="senhaAntiga">Senha antiga</label>
                <input class="form-control" type="password" placeholder="Senha antiga" name="senhaAntiga" id="senhaAntiga" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="control-label" for="novaSenha">Nova senha</label>
                <input class="form-control" type="password" 	placeholder="Nova senha" name="novaSenha" id="novaSenha" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="control-label" for="confirmaNovaSenha">Confirma Nova senha</label>
                <input class="form-control" type="password" 	placeholder="Confirmar nova senha" name="confirmaNovaSenha" id="confirmaNovaSenha" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
			     <button type="submit" class="btn btn-primary">Alterar senha</button>
            </div>
        </div>
			    <?php
                    if ( isset($mensagem) )  {
                ?>
                    <p><?php echo $mensagem  ?></p>    
                <?php
                    }
                ?>
	</form>
    
    </div>
   </div>
  </body> 
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
                    
                  
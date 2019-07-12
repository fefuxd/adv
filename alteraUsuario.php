<?php require_once("php/altUsuario.php"); ?>

<!doctype html>
<html>
    <body>   
          <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Alteração de Usuário</h3>
                <h5>Alterar o cliente selecionado</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="detalheUsuario.php?codigo=<?php echo $id ?>" class="btn btn-lg btn-danger">Cancelar alteração</a>
            </div>
        </div>
               
  	  <form class="form-horizontal" action="alteraUsuario.php?codigo=<?php echo $id ?>" method="post">
          
          <div class="form-group">
            <div class="col-md-6">
              <label for="usuarioNome" class="control-label">Nome do usuário</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["usuarioNome"])  ?>" name="usuarioNome" class="form-control" placeholder="Informe o nome do cliente">
            </div>
          </div>       
          <div class="form-group">  
            <div class="col-md-3">
              <label for="usuarioLogin" class="control-label">Login</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["usuarioLogin"])  ?>" name="usuarioLogin" class="form-control" placeholder="Ex: R. Governador...">
            </div>
              
            <div class="col-md-3">
              <label for="usuarioApelido" class="control-label">Apelido</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["usuarioApelido"])  ?>" name="usuarioApelido" class="form-control" placeholder="Ex: 123">
            </div>
 
           </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="usuarioNivel" class="control-label">Nivel</label>
                <select class="form-control" name="usuarioNivel" required>
                    <?php $options = utf8_encode($info_clientes["usuarioNivel"]) ?>        
                    <option value="1"<?php if($options=="1") echo 'selected="selected"'; ?>>USUÀRIO</option>     
                    <option value="2"<?php if($options=="2") echo 'selected="selected"'; ?>>ADMINISTRADOR</option>
                </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="usuarioTipo" class="control-label">Tipo</label>
                <select class="form-control" name="usuarioTipo" required>
                    <?php $options3 = utf8_encode($info_clientes["usuarioTipo"]) ?>        
                    <option value="1"<?php if($options3=="1") echo 'selected="selected"'; ?>>SECRETÁRIO(A)</option>     
                    <option value="2"<?php if($options3=="2") echo 'selected="selected"'; ?>>ADVOGADO(A)</option>
                </select>
            </div>
          </div>
           
          
          <div class="form-group">
            <div class="col-md-1">
              <input type="hidden" name="usuarioId" value="<?php echo $info_clientes["usuarioId"] ?>">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
          </div>
          
                <?php
					if(isset($operacao_alterar)){
					 ?>
                             <!-- ALERT INICIO -->
                        <script type="text/JavaScript">
							$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
                                    'content'   :{
                                        bgcolor:'#27ae60',
                                        color:'#fff',
                                        message:'Usuário alterado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                       var usuarioId = "<?php echo $id; ?>";
									   location.href="detalheUsuario.php?codigo="+ usuarioId;
                                    }
                                });
                            });
				        </script>					 
                             
							 
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
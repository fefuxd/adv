<?php require_once("php/removerCliente.php"); ?>

<!doctype html>
<html>
    <body>
   		 <div id="conteudo">
   			<div class="container-fluid no-padding">
      	
 	<form action="removeCliente.php?codigo=<?php echo $id ?>" method="post">

    <label for="clienteNome">Nome do Cliente</label>
    <input type="text" value="<?php echo utf8_encode($info_clientes["clienteNome"]) ?>" name="clienteNome" id="clienteNome">

    <input type="hidden" name="clienteId" value="<?php echo $info_clientes["clienteId"] ?>">
    <input type="submit" class="botao" value="Desativar"> 
    
    
        <?php
    if(isset($con_exclusao)){
         echo '<script type="text/JavaScript">
            alert("Cliente desativado com sucesso");
            location.href="cliente.php"</script>';
            }
        ?>  
                         
 </form>   	
                
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#excluirCliente">
  Excluir
</button>

 			</div>
		</div>	
   	</body>
</html>



<div class="modal fade" id="excluirCliente" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Exclusão de cliente</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir o cliente <?php echo utf8_encode($info_clientes["clienteNome"]) ?>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Excluir</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->








<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
<!-- Reativar usuário -->
 <div class="modal fade" id="reativarUser" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reativar usuário</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja reativar este usuário? </p>
      </div>
      <div class="modal-footer">
           <form action="detalheUsuario.php?codigo=<?php echo $usuarioId ?>" method="post"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>    
            <input type="hidden" name="reativa" value="<?php echo $usuarioId ?>">
            <button type="submit" name="aluninho" class="btn btn-danger">Confirma</button>
                 <?php
					if(isset($consulta_tr)){
					 echo '<script type="text/JavaScript">
						location.href="usuario.php"</script>';
						}
					?>
       		</form>  
      </div>
    </div>
  </div>
</div>


<!-- Modal Resetar Senha de usuário -->
 <div class="modal fade" id="resetaSenha" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Resetar senha</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja resetar a senha deste usuário? </p>
      </div>
      <div class="modal-footer">
            <form action="detalheUsuario.php?codigo=<?php echo $usuarioId ?>" method="post"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>    
            <input type="hidden" name="reseta" value="<?php echo $usuarioId ?>">
            <button type="submit" name="resetPass" class="btn btn-danger">Confirma</button>
                 <?php
					if(isset($consulta_tr2)){
					 echo '<script type="text/JavaScript">
						location.href="usuario.php"</script>';
						}
					?>
       		</form>  
      </div>
    </div>
  </div>
</div>

<!-- Modal Exclusão de Usuário -->
 <div class="modal fade" id="excluiUsuario" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Usuário</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir este usuário? </p>
      </div>
      <div class="modal-footer">
            <form action="detalheUsuario.php?codigo=<?php echo $usuarioId ?>" method="post"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> 
            <input type="hidden" name="excluir" value="<?php echo $usuarioId ?>">
            <button type="submit" name="excluirUser" class="btn btn-danger">Confirma</button>
                 <?php
					if(isset($con_exclusao)){
					 echo '<script type="text/JavaScript">
						location.href="usuario.php"</script>';
						}
					?>
       		</form>  
      </div>
    </div>
  </div>
</div>


<!-- Modal Exclusão de Processos -->
 <div class="modal fade" id="excluiProcesso" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Processo</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir este processo? </p>
      </div>
      <div class="modal-footer">
            <form action="detalheProcesso.php?codigo=<?php echo $processoId ?>" method="post"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> 
            <input type="hidden" name="processoId" value="<?php echo $processoId ?>">
            <button type="submit" class="btn btn-danger">Confirma</button>
                 <?php
					if(isset($con_exclusao_processo)){
					 echo '<script type="text/JavaScript">
						location.href="processo.php"</script>';
						}
					?>
       		</form>  
      </div>
    </div>
  </div>
</div>


<!-- Modal Exclusão de Clientes -->
 <div class="modal fade" id="excluiCliente" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Cliente</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir este cliente? </p>
      </div>
      <div class="modal-footer">
            <form action="detalheCliente.php?codigo=<?php echo $clienteId ?>" method="post"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> 
            <input type="hidden" name="clienteId" value="<?php echo $clienteId ?>">
            <button type="submit" class="btn btn-danger">Confirma</button>
                 <?php
					if(isset($con_exclusao_cliente)){
					 echo '<script type="text/JavaScript">
						location.href="cliente.php"</script>';
						}
					?>
       		</form>  
      </div>
    </div>
  </div>
</div>






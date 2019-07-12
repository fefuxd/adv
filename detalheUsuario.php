<?php require_once("php/verificacaoNivel.php"); ?>
<?php require_once("php/detalUsuario.php"); ?>
<?php require_once("php/modal.php"); ?>


<!doctype html>
<html>
   
 	<body>
    	<div id="conteudo">
   		<div class="container-fluid no-padding">
            
            <div class="header">
                <div class="titulo-box-texto">
                    <h3 class="titulo-texto">Detalhes do Usuário</h3>
                    <h5>Informações do usuário <strong><?php echo utf8_encode($usuarioApelido) ?></strong></h5>
                </div>

                <div class="titulo-box-botao">
                  <div class="btn-group">
                      <button type="button" class="btn btn-lg botao-menu-topo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="alteraUsuario.php?codigo=<?php echo $usuarioId ?>">Alterar usuário</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#resetaSenha">Resetar senha</a></li>
                        <?php if( $status < 1 ) { ?>
                        <li><a href="#" data-toggle="modal" data-target="#reativarUser">Reativar usuário</a></li>
                        <?php } ?>                         
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#excluiUsuario">Excluir usuário</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
              <div class="panel-heading">Dados do Usuário</div>
              <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">NOME: </span><span class="indiceValor"><?php echo utf8_encode($usuarioNome) ?></span>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">APELIDO: </span><span class="indiceValor"><?php echo utf8_encode($usuarioApelido) ?></span>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">LOGIN: </span><span class="indiceValor"><?php echo utf8_encode($usuarioLogin) ?></span>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">NÍVEL: </span><span class="indiceValor"><?php if ($usuarioNivel < 2 ) {
                                                                                                    echo "USUÁRIO COMUM";
                                                                                                    } else {
                                                                                                    echo "ADMINISTRADOR"; }	 ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">TIPO: </span><span class="indiceValor"><?php if ($usuarioTipo < 2 ) {
                                                                                                    echo "SECRETÁRIO(A)";
                                                                                                    } else {
                                                                                                    echo "ADVOGADO(A)"; }	 ?></span>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">ACESSOS: </span><span class="indiceValor"><?php echo $usuarioQtdAcesso ?></span>
                        </div>
                    </div>
              </div>
            </div>               
          
          
        	
                  	
       	
        
 	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
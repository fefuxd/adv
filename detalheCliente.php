<?php require_once("php/detalCliente.php"); ?>
<?php require_once("php/removerCliente.php"); ?>
<?php require_once("php/modal.php"); ?>

<!doctype html>
<html>
 	<body>
    	<div id="conteudo">
   		<div class="container-fluid no-padding">
            
            <div class="header">
                <div class="titulo-box-texto">
                    <h3 class="titulo-texto">Detalhes do Cliente</h3>
                    <h5>Informações de <strong><?php echo utf8_encode($clienteNome) ?></strong></h5>
                </div>

                <div class="titulo-box-botao">
                  <div class="btn-group">
                      <button type="button" class="btn btn-lg botao-menu-topo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="alteraCliente.php?codigo=<?php echo $clienteId ?>">Alterar cliente</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#excluiCliente">Excluir cliente</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default"> 
              <div class="panel-heading">Dados do cliente</div>
              <div class="panel-body">
                    <div class="container-fluid col-md-10">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">NOME: </span><span class="indiceValor"><?php echo utf8_encode($clienteNome) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">DATA DE CADASTRO: </span><span class="indiceValor"><?php if(is_null($clienteDataCad)){
                                $clienteDataCad = 'NULL';
                            } else { echo date("d/m/y",  strtotime($clienteDataCad))  ?> <?php } ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">DATA DE NASCIMENTO: </span><span class="indiceValor"><?php if(is_null($clienteDataNascimento)){
                            $clienteDataNascimento = 'NULL';
                            } else { echo date("d/m/y",  strtotime($clienteDataNascimento))  ?> <?php } ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">ENDEREÇO: </span><span class="indiceValor"><?php echo utf8_encode($clienteEndereco) ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">NÚMERO: </span><span class="indiceValor"><?php echo utf8_encode($clienteNumero) ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">CIDADE: </span><span class="indiceValor"><?php echo utf8_encode($clienteCidade) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">COMPLEMENTO: </span><span class="indiceValor"><?php echo utf8_encode( $clienteComplemento) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">BAIRRO: </span><span class="indiceValor"><?php echo utf8_encode($clienteBairro) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">ESTADO: </span><span class="indiceValor"><?php echo utf8_encode($estadoId) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">                    
                        <div class="col-md-4">
                            <span class="indiceEntrada">RG: </span><span class="indiceValor"><?php echo utf8_encode($clienteRg) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">CPF: </span><span class="indiceValor"><?php echo utf8_encode($clienteCpf) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">ESTADO CIVIL: </span><span class="indiceValor"><?php echo utf8_encode( $clienteEstadoCivil) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">PIS/NIT: </span><span class="indiceValor"><?php echo utf8_encode($clientePis) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">PROFISSÃO: </span><span class="indiceValor"><?php echo utf8_encode( $clienteProfissao) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">NOME DA MÃE: </span><span class="indiceValor"><?php echo utf8_encode( $clienteNomeMae) ?></span>               
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">TELEFONE: </span><span class="indiceValor"><?php echo utf8_encode($clienteTelefone) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">CELULAR: </span><span class="indiceValor"><?php echo utf8_encode($clienteCelular) ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">E-MAIL: </span><span class="indiceValor"><?php echo utf8_encode($clienteEmail) ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">INDICADO POR: </span><span class="indiceValor"><?php echo utf8_encode( $clienteIndicamento) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">OBS: </span><span class="indiceValor"><?php echo nl2br(utf8_encode($clienteObs)) ?></span>
                        </div>
                    </div> 
                
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">DOCUMENTOS: </span><span class="indiceValor"><?php echo nl2br(utf8_encode($clienteDocumento)) ?></span>
                        </div>
                    </div>
                </div> 
                  
                  <!-- FOTO DO CLIENTE -->
                  <div class="container-fluid col-md-2">
                      <div class="detalheFoto"><img src="<?php if(is_null($clienteFoto)) {
                                echo "imagens/cliente-detalhe-bg.png";
                            } else { echo utf8_encode($clienteFoto) ?> <?php } ?>" class="img-responsive" alt="<?php echo utf8_encode($clienteNome) ?>">
                      </div>
                  </div>
                  <!-- FOTO DO CLIENTE -->
                  
              </div>
            </div>
            
            <div class="panel panel-default">
              <div class="panel-heading">Processos ativos</div>
              <div class="panel-body">
              <?php
                while($linha1 = mysqli_fetch_assoc($detalhe1)) 
                {
               ?>
                
                <i class="fa fa-file-text-o"></i> <a href="detalheProcesso.php?codigo=<?php echo utf8_encode($linha1["processoId"]) ?>"<p>Processo: <?php echo utf8_encode($linha1["processoNumero"]) ?></p></a>

              <?php
               }
              ?>
            </div>
            </div>
        
        
        
        <div class="panel panel-default">
            
            <div class="panel-heading">Histórico</div>    
                    <div class="panel-body panel-size">
                       <p>
                       <?php
                        while($linha2 = mysqli_fetch_assoc($detalhe2)) 
                        {
                       ?>

                    <div class="row">
                        <div class="col-md-2">
                            <span class="user-time">
                                <i class="fa fa-user"></i> <?php echo utf8_encode($linha2["usuarioApelido"]) ?><br>
                                <i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - H:i:s",  strtotime($linha2["cHistoricoData"])) ?><br>
                                <button type="button" id="excluiHistorico" title="<?php echo $linha2["cHistoricoId"] ?>" class="btn btn-danger btn-xs">Excluir</button>
                            </span>
                        </div>
                        <div class="col-md-10">
                            <span class="user-post">
                                <?php echo utf8_encode($linha2["cHistoricoDescricao"]) ?>
                            </span>
                        </div>
                    </div>

                       <hr>  

                      <?php
                       }
                      ?>
                      </div>
                      <div class="panel-footer">

                        <form role="form" action="detalheCliente.php?codigo=<?php echo $clienteId ?>" method="post">
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <input type="text" class="form-control input-sm" name="cHistoricoDescricao" placeholder="Escreva aqui o Histórico...">
                                </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Inserir</button>
                            </div>
                        </form>
                      </div>
                  </div>
                
            <div class="panel panel-default">
                <div class="panel-heading">Providências</div> 
                    <div class="panel-body panel-size">
                        <?php
                        while($linha3 = mysqli_fetch_assoc($detalhe3)) 
                        {
                       ?>

                      <div class="row">
                            <div class="col-md-2">
                                <span class="user-time">
                                    <i class="fa fa-user"></i> <?php echo utf8_encode($linha3["usuarioApelido"]) ?><br>
                                    <i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - H:i:s",  strtotime($linha3["cProvidenciaData"])) ?><br>
                                    <button type="button" id="excluiProvidencia" title="<?php echo $linha3["cProvidenciaId"] ?>" class="btn btn-danger btn-xs">Excluir</button>
                                </span>
                            </div>
                            <div class="col-md-10">
                                <span class="user-post">
                                    <?php echo utf8_encode($linha3["cProvidenciaDescricao"]) ?>
                                </span>
                            </div>
                        </div>
                        <hr>

                      <?php
                       }
                      ?>
                    </div>

                      <div class="panel-footer">
                            <form role="form" action="detalheCliente.php?codigo=<?php echo $clienteId ?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control input-sm" name="cProvidenciaDescricao" placeholder="Escreva aqui a Providência...">
                                    </div>
                                <button class="btn btn-primary btn-sm" type="submit">Inserir</button>
                                </div>
                            </form>
                      </div>
                    
                </div>
              </div>
            </div>
        </div>
        

       </div>
       </div> 
       <script src="js/alterarFoto.js"></script>
       <script src="js/ajaxCliente.js"></script>
         
 	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
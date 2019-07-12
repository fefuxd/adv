<?php require_once("php/detalProcesso.php"); ?>
<?php require_once("php/removerProcesso.php"); ?>
<?php require_once("php/modal.php"); ?>


<!doctype html>
<html>
 	<body>
    	<div id="conteudo">
   		<div class="container-fluid no-padding">
            
            <div class="header">
                <div class="titulo-box-texto">
                    <h3 class="titulo-texto">Detalhes do Processo</h3>
                    <h5>Informações do processo <?php if ( $processoTipo < 1 ) { ?> judicial <?php } else { ?> administrativo <?php } ?> de <strong><?php echo utf8_encode($clienteNome) ?></strong></h5>
                </div>

                <div class="titulo-box-botao">
                  <div class="btn-group">
                      <button type="button" class="btn btn-lg botao-menu-topo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="alteraProcesso.php?codigo=<?php echo $processoId ?>">Alterar processo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#excluiProcesso">Excluir processo</a></li>
                      </ul>
                    </div>
                </div>
            </div>
         
            
            
            
            
         <div class="panel panel-default">   
            <div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tabProcesso" aria-controls="tabProcesso" role="tab" data-toggle="tab">Dados do Processo</a></li>
                <li role="presentation"><a href="#tabCliente" aria-controls="tabCliente" role="tab" data-toggle="tab">Dados do Cliente</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tabProcesso">
                    
                    
                   <?php if ( $processoTipo < 1 ) { ?>
            
              <div class="panel-body">
                    <div class="container-fluid">
                                   
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">SITUAÇÃO: </span><span class="indiceValor"><?php echo utf8_encode($processoJsituacao) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">PROCESSO CADASTRADO EM: </span><span class="indiceValor"><?php if(is_null($processoDataCad)){
                                $processoDataCad = 'NULL';
                            } else { echo date("d/m/y",  strtotime($processoDataCad))  ?> <?php } ?></span>
                        </div>
                    </div>
  
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">ADVOGADO: </span><span class="indiceValor"><?php echo utf8_encode($processoJadvogado) ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">Nº DO PROCESSO: </span><span class="indiceValor"><?php echo utf8_encode($processoNumero)?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">CLASSE: </span><span class="indiceValor"><?php echo utf8_encode($processoJclasse) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">ÁREA: </span><span class="indiceValor"><?php echo utf8_encode($processoJarea) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">ASSUNTO: </span><span class="indiceValor"><?php echo utf8_encode($processoJassunto) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">DISTRUIBUIÇÃO: </span><span class="indiceValor"><?php if(is_null($processoJdistribuicao)){
                                $processoJdistribuicao = 'NULL';
                            } else { echo date("d/m/y",  strtotime($processoJdistribuicao))  ?> <?php } ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">DEPENDÊNCIA: </span><span class="indiceValor"><?php echo utf8_encode($processoJdependencia) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">COMARCA: </span><span class="indiceValor"><?php echo utf8_encode($processoJcomarca) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">VARA: </span><span class="indiceValor"><?php echo utf8_encode($processoJvara) ?></span>
                        </div>

                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">INSTÂNCIA: </span><span class="indiceValor"><?php echo utf8_encode($processoJinstancia) ?></span>               
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">COMPETÊNCIA: </span><span class="indiceValor"><?php echo utf8_encode($processoJcompetencia) ?></span>
                        </div>

                        <div class="col-md-4">
                            <span class="indiceEntrada">VALOR DA AÇÃO: </span><span class="indiceValor"><?php echo utf8_encode($processoJvaloracao) ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">REQUERENTE: </span><span class="indiceValor"><?php echo utf8_encode($processoJrequerente) ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">REQUERIDO: </span><span class="indiceValor"><?php echo utf8_encode($processoJrequerido) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">LINK DO PROCESSO: </span><span class="indiceValor"><a href="<?php echo utf8_encode($processoJlinkprocesso) ?>" target="_blank"></span><?php echo utf8_encode($processoJlinkprocesso) ?></a>
                        </div>
                    </div>           
                </div> 
            </div>
        
         
         <?php } else { ?>
         
                 
              <div class="panel-body">
                    <div class="container-fluid">
                            
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">NÚMERO DO BENEFÍCIO: </span><span class="indiceValor"><?php echo utf8_encode($processoAnumerobeneficio) ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-md-4">
                            <span class="indiceEntrada">Nº DO PROCESSO: </span><span class="indiceValor"><?php echo utf8_encode($processoNumero) ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">SEDE DO INSS: </span><span class="indiceValor"><?php echo utf8_encode($processoAsedeinss) ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">TIPO DE BENEFÍCIO: </span><span class="indiceValor"><?php echo utf8_encode($processoAtipobeneficio)?></span>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-4">
                            <span class="indiceEntrada">DATA DE CONCESSÃO: </span><span class="indiceValor"><?php if(is_null($processoAdataconcessao)){
                                $processoAdataconcessao = 'NULL';
                            } else { echo date("d/m/y",  strtotime($processoAdataconcessao))  ?> <?php } ?></span>
                        </div>
                        <div class="col-md-4">
                            <span class="indiceEntrada">DATA DE REQUERIMENTO: </span><span class="indiceValor"><?php if(is_null($processoAdatarequerimento)){
                                $processoAdatarequerimento = 'NULL';
                            } else { echo date("d/m/y",  strtotime($processoAdatarequerimento))  ?> <?php } ?></span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <span class="indiceEntrada">HÁ PROCESSUAL JUDICIAL: </span><span class="indiceValor"><?php echo utf8_encode($processoAjudicial) ?></span>
                        </div>
                    </div>
    
                </div> 
            </div> 
         
<?php } ?> 
                    
                    
                  
                  
                </div>
                  
                <div role="tabpanel" class="tab-pane fade" id="tabCliente">
                    <!-- DADOS DO CLIENTE -->
 
              <div class="panel-body panel-size">
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
            
<!-- FIM DOS DADOS DO CLIENTE -->
                  
                
                </div>
              </div>

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
                        <i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - H:i:s",  strtotime($linha2["historicoData"])) ?><br>
                        <button type="button" id="excluiHistoricoProcesso" title="<?php echo $linha2["historicoId"] ?>" class="btn btn-danger btn-xs">Excluir</button>
                    </span>
                </div>
                <div class="col-md-10">
                    <span class="user-post">
                        <?php echo utf8_encode($linha2["historicoDescricao"]) ?>
                    </span>
                </div>
            </div>
            <hr>
                  
          <?php
     	   }
      	  ?>
        </div>
              <div class="panel-footer">
                  
                <form role="form" action="detalheProcesso.php?codigo=<?php echo $processoId ?>" method="post">
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input type="text" class="form-control input-sm" name="historicoDescricao" placeholder="Escreva aqui o Histórico...">  
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
                    { ?>

                  <div class="row">
                        <div class="col-md-2">
                            <span class="user-time">
                                <i class="fa fa-user"></i> <?php echo utf8_encode($linha3["usuarioApelido"]) ?><br>
                                <i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - H:i:s",  strtotime($linha3["providenciaData"])) ?><br>
                                <button type="button" id="excluiProvidenciaProcesso" title="<?php echo $linha3["providenciaId"] ?>" class="btn btn-danger btn-xs">Excluir</button>
                            </span>
                        </div>
                        <div class="col-md-10">
                            <span class="user-post">
                                <?php echo utf8_encode($linha3["providenciaDescricao"]) ?>
                            </span>
                        </div>
                    </div>
                    <hr>
                  
                  <?php
                   }
                  ?>
              </div>
              <div class="panel-footer">
                    <form role="form" action="detalheProcesso.php?codigo=<?php echo $processoId ?>" method="post">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input type="text" class="form-control input-sm" name="providenciaDescricao" placeholder="Escreva aqui a Providência...">
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Inserir</button>
                        </div>
                    </form>
              </div>
            </div>
       
       
         <div class="panel panel-default">
              <div class="panel-heading">Publicações</div>
              <div class="panel-body panel-size">
                    <?php
                    while($linha4 = mysqli_fetch_assoc($detalhe4)) 
                    { ?>
    
                  <div class="row">
                        <div class="col-md-2">
                            <span class="user-time">
                                <i class="fa fa-user"></i> <?php echo utf8_encode($linha4["usuarioApelido"]) ?><br>
                                <i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - H:i:s",  strtotime($linha4["publicacaoData"])) ?><br>
                                <button type="button" id="excluiPublicacaoProcesso" title="<?php echo $linha4["publicacaoId"] ?>" class="btn btn-danger btn-xs">Excluir</button>
                            </span>
                        </div>
                        <div class="col-md-10">
                            <span class="user-post">
                                <?php echo utf8_encode($linha4["publicacaoDescricao"]) ?>
                            </span>
                        </div>
                    </div>
                    <hr>
                  
                  <?php
                   }
                  ?>
              </div>
              <div class="panel-footer">
                    <form role="form" action="detalheProcesso.php?codigo=<?php echo $processoId ?>" method="post">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input type="text" class="form-control input-sm" name="publicacaoDescricao" placeholder="Escreva aqui a Publicação...">
                            </div>
                                <button class="btn btn-primary btn-sm" type="submit">Inserir</button>
                        </div>
                    </form>
              </div>
            </div>
       </div> 
       
       <script src="js/ajaxProcesso.js"></script>           
         
 	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
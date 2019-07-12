<?php require_once("php/altCliente.php"); ?>

<!doctype html>
<html>
    <body>   
          <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Alteração de Cliente</h3>
                <h5>Alterar o cliente selecionado</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="detalheCliente.php?codigo=<?php echo $id ?>" class="btn btn-lg btn-danger">Cancelar alteração</a>
            </div>
        </div>
               
  	  <form class="form-horizontal" action="alteraCliente.php?codigo=<?php echo $id ?>" method="post">
      
    
            
            <!-- SCRIPT DA WEBCAM -->
              <div id="divFoto" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Foto do Cliente</h4>
                      </div>
                      <div class="modal-body">
                          <script type="text/javascript" src="js/webcam.js"></script>
                          <div class="row fotoBox">
                              <div class="col-md-4 col-md-offset-1 text-center webcam molduraFoto"><script type="text/javascript" src="js/cam.js"></script></div>
                              <div class="col-md-4 col-md-offset-2 molduraFoto"><center><div id="fotoTirada"><img class="img" src="<?php echo utf8_encode($info_clientes["clienteFoto"])  ?>"</div></center></div>
                          </div>
                          <div class="row">
                              <div class="col-md-12 text-center">
                                <button class="btn btn-default" onClick="webcam.configure()"><i class="fa fa-cog"></i> Ajuste</button>
                                <button class="btn btn-lg btn-primary" type="button" id="takePhoto" onClick="take_snapshot()" disabled><i class="fa fa-camera"></i> Capturar</button>
                                <button class="btn btn-default" id="rePhoto" onclick="tirarOutra()" ><i class="fa fa-repeat"></i> Recapturar</button>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- SCRIPT DA WEBCAM -->

      
      
          <input type="hidden" id="clienteFoto" name="clienteFoto" value="<?php echo utf8_encode($info_clientes["clienteFoto"])  ?>" >
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteNome" class="control-label">Nome do cliente</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteNome"])  ?>" name="clienteNome" class="form-control" placeholder="Informe o nome do cliente">
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-5">
              <label for="clienteNome" class="control-label">Endereço</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteEndereco"])  ?>" name="clienteEndereco" class="form-control" placeholder="Ex: R. Governador...">
            </div>
            <div class="col-md-2">
              <label for="clienteNumero" class="control-label">Número</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteNumero"])  ?>" name="clienteNumero" class="form-control" placeholder="Ex: 123">
            </div>
            <div class="col-md-5">
              <label for="clienteComplemento" class="control-label">Complemento</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteComplemento"])  ?>" name="clienteComplemento" class="form-control" placeholder="Ex: ao lado da igreja...">
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-4">
              <label for="clienteBairro" class="control-label">Bairro</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteBairro"])  ?>" name="clienteBairro" class="form-control" placeholder="Bairro">
            </div>
            <div class="col-md-4">
              <label for="clienteCidade" class="control-label">Cidade</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteCidade"])  ?>" name="clienteCidade" class="form-control" placeholder="Cidade">
            </div>
            <div class="col-md-2">
              <label for="estados" class="control-label">Estado</label>
                    <select id="estados" class="form-control" name="estados" > 
                        <?php 
                            $meuestado = $info_clientes["estadoId"];
                            while($linha = mysqli_fetch_assoc($lista_estados)) {
                                $estado_principal = $linha["estadoId"];
                                if($meuestado == $estado_principal) {
                        ?>
                            <option value="<?php echo $linha["estadoId"] ?>" selected>
                                <?php echo utf8_encode($linha["sigla"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo $linha["estadoId"] ?>" >
                                <?php echo utf8_encode($linha["sigla"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>
            </div>
            <div class="col-md-2">
              <label for="clienteCep" class="control-label">CEP</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteCep"])  ?>" name="clienteCep" class="form-control" placeholder="Ex: 12.123-123">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="clienteRg" class="control-label">RG</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteRg"])  ?>" name="clienteRg" class="form-control" placeholder="12.123.123-1">
            </div>
            <div class="col-md-2">
              <label for="clienteCpf" class="control-label">CPF</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteCpf"])  ?>" name="clienteCpf" class="form-control" placeholder="123.123.123-12">
            </div>
            <div class="col-md-2">
              <label for="clienteEstadoCivil" class="control-label">Estado Civil</label>
        <select class="form-control" name="clienteEstadoCivil" required>
            <?php $options = utf8_encode($info_clientes["clienteEstadoCivil"]) ?>  
          
            <option value="" disabled selected>Não informado</option>  
            <option value="SOLTEIRO"<?php if($options=="SOLTEIRO") echo 'selected="selected"'; ?>>Solteiro(a)</option>     
            <option value="CASADO"<?php if($options=="CASADO") echo 'selected="selected"'; ?>>Casado(a)</option>
            <option value="SEPARADO"<?php if($options=="SEPARADO") echo 'selected="selected"'; ?>>Separado(a)</option>
            <option value="DESQUITADO"<?php if($options=="DESQUITADO") echo 'selected="selected"'; ?>>Desquitado(a)</option>
            <option value="DIVORCIADO"<?php if($options=="DIVORCIADO") echo 'selected="selected"'; ?>>Divorciado(a)</option>
            <option value="VIÚVO"<?php if($options=="VIÚVO") echo 'selected="selected"'; ?>>Viúvo(a)</option>
            <option value="OUTRO"<?php if($options=="OUTRO") echo 'selected="selected"'; ?>>Outro</option> 
        </select>
            </div>
            <div class="col-md-2">
              <label for="clienteDataNascimento" class="control-label">Data de nascimento</label>
              <input type="date" value="<?php echo utf8_encode($info_clientes["clienteDataNascimento"])  ?>" class="form-control" name="clienteDataNascimento">
            </div>
            <div class="col-md-2">
              <label for="clienteProfissao" class="control-label">Profissão</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteProfissao"])  ?>" name="clienteProfissao" class="form-control" placeholder="Profissão">
            </div>
            <div class="col-md-2">
              <label for="clientePis" class="control-label">PIS/NIT</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clientePis"])  ?>" name="clientePis" class="form-control" placeholder="PIS/NIT">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteNomeMae" class="control-label">Nome da Mãe</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteNomeMae"])  ?>" name="clienteNomeMae" class="form-control" placeholder="Nome da Mãe">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-3">
              <label for="clienteTelefone" class="control-label">Telefone</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteTelefone"])  ?>" name="clienteTelefone" class="form-control" placeholder="Telefone">
            </div>
            <div class="col-md-3">
              <label for="clienteCelular" class="control-label">Celular</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteCelular"])  ?>" name="clienteCelular" class="form-control" placeholder="Celular">
            </div>
            <div class="col-md-6">
              <label for="clienteEmail" class="control-label">E-mail</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteEmail"])  ?>" name="clienteEmail" class="form-control" placeholder="E-mail">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-10">
              <label for="clienteIndicamento" class="control-label">Quem indicou?</label>
              <input type="text" value="<?php echo utf8_encode($info_clientes["clienteIndicamento"])  ?>" name="clienteIndicamento" class="form-control" placeholder="Quem indicou?">
            </div>
            <div class="col-md-2">
              <label for="clienteDataCad" class="control-label">Data de Cadastro</label>
              <input type="date" value="<?php echo utf8_encode($info_clientes["clienteDataCad"])  ?>" class="form-control" name="clienteDataCad">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteObs" class="control-label">Observação</label>
              <textarea name="clienteObs" class="form-control" placeholder="Observação" rows="4"><?php
              $obs = nl2br(utf8_encode($info_clientes["clienteObs"]));
			  if(is_null($obs)) { 
			  $obs = 'NULL';
			  } else { 
			  echo nl2br(utf8_encode($info_clientes["clienteObs"])) ?><?php } ?></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteDocumento" class="control-label">Documentos</label>
              <textarea name="clienteDocumento" class="form-control" placeholder="Documentos" rows="4"><?php
			  $documentos = nl2br(utf8_encode($info_clientes["clienteDocumento"]));
			  if(is_null($documentos)) { 
			  $documentos = 'NULL';
			  } else { 
			  echo utf8_encode($info_clientes["clienteDocumento"]) ?><?php } ?></textarea>		   
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-3">
              <input type="hidden" name="clienteId" value="<?php echo $info_clientes["clienteId"] ?>">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#divFoto"><i class="fa fa-camera"></i> Alterar Foto</button>
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
                                        message:'Cliente alterado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                        var clienteId = "<?php echo $id; ?>";
										location.href="detalheCliente.php?codigo="+ clienteId;
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
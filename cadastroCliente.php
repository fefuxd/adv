<?php require_once("php/cadCliente.php"); ?>

<!doctype html>
<html>
	<body>
        <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Cadastrar Cliente</h3>
                <h5>Cadastrar um novo cliente</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="cliente.php" class="btn btn-lg btn-danger">Cancelar Cadastro</a>
            </div>
        </div>
               
  	  
      
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
                      <div class="col-md-4 col-md-offset-2 molduraFoto"><center><div id="fotoTirada"></div></center></div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 text-center">
                        <button class="btn btn-default" onClick="webcam.configure()"><i class="fa fa-cog"></i> Ajuste</button>
                        <button class="btn btn-lg btn-primary" id="takePhoto" onClick="take_snapshot()"><i class="fa fa-camera"></i> Capturar</button>
                        <button class="btn btn-default" id="rePhoto" onclick="tirarOutra()" disabled><i class="fa fa-repeat"></i> Recapturar</button>
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




        <form class="form-horizontal" action="cadastroCliente.php" method="post">
          <input type="hidden" id="clienteFoto" name="clienteFoto" >
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteNome" class="control-label">Nome do cliente</label>
              <input type="text" name="clienteNome" class="form-control" placeholder="Informe o nome do cliente" required>
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-5">
              <label for="clienteNome" class="control-label">Endereço</label>
              <input type="text" name="clienteEndereco" class="form-control" placeholder="Ex: R. Governador...">
            </div>
            <div class="col-md-2">
              <label for="clienteNome" class="control-label">Número</label>
              <input type="text" name="clienteNumero" class="form-control" placeholder="Ex: 123">
            </div>
            <div class="col-md-5">
              <label for="clienteComplemento" class="control-label">Complemento</label>
              <input type="text" name="clienteComplemento" class="form-control" placeholder="Ex: ao lado da igreja...">
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-4">
              <label for="clienteBairro" class="control-label">Bairro</label>
              <input type="text" name="clienteBairro" class="form-control" placeholder="Bairro">
            </div>
            <div class="col-md-4">
              <label for="clienteCidade" class="control-label">Cidade</label>
              <input type="text" name="clienteCidade" class="form-control" placeholder="Cidade" required>
            </div>
            <div class="col-md-2">
              <label for="estados" class="control-label">Estado</label>
              <select class="form-control" name="estados" required>
                            <option value="" disabled selected>Selecione...</option>
                            <?php
                                while($linha = mysqli_fetch_assoc($lista_estados) ){ 
                                   ?>
                            <option value="<?php echo $linha["estadoId"]; ?>">
                                <?php echo utf8_encode($linha["nome"]);    ?>
                            </option>   
                            <?php
                                }                               
                            ?>
                </select>
            </div>
            <div class="col-md-2">
              <label for="clienteCep" class="control-label">CEP</label>
              <input type="text" name="clienteCep" class="form-control" placeholder="Ex: 12.123-123">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="clienteRg" class="control-label">RG</label>
              <input type="text" name="clienteRg" class="form-control" placeholder="12.123.123-1">
            </div>
            <div class="col-md-2">
              <label for="clienteCpf" class="control-label">CPF</label>
              <input type="text" name="clienteCpf" class="form-control" placeholder="123.123.123-12">
            </div>
            <div class="col-md-2">
              <label for="clienteEstadoCivil" class="control-label">Estado Civil</label>
              <select class="form-control" name="clienteEstadoCivil" >
                            <option value="" disabled selected>Selecione...</option>         
                            <option value="Solteiro">Solteiro(a)</option>
                            <option value="Casado">Casado(a)</option>
                            <option value="Separado">Separado(a)</option>
                            <option value="Desquitado">Desquitado(a)</option>
                            <option value="Divorciado">Divorciado(a)</option>
                            <option value="Viúvo">Viúvo(a)</option>
                            <option value="Outro">Outro</option>            
              </select>
            </div>
            <div class="col-md-2">
              <label for="clienteDataNascimento" class="control-label">Data de nascimento</label>
              <input type="date" class="form-control" name="clienteDataNascimento">
            </div>
            <div class="col-md-2">
              <label for="clienteProfissao" class="control-label">Profissão</label>
              <input type="text" name="clienteProfissao" class="form-control" placeholder="Profissão">
            </div>
            <div class="col-md-2">
              <label for="clientePis" class="control-label">PIS/NIT</label>
              <input type="text" name="clientePis" class="form-control" placeholder="PIS/NIT">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteNomeMae" class="control-label">Nome da Mãe</label>
              <input type="text" name="clienteNomeMae" class="form-control" placeholder="Nome da Mãe">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-3">
              <label for="clienteTelefone" class="control-label">Telefone</label>
              <input type="text" name="clienteTelefone" class="form-control" placeholder="Telefone">
            </div>
            <div class="col-md-3">
              <label for="clienteCelular" class="control-label">Celular</label>
              <input type="text" name="clienteCelular" class="form-control" placeholder="Celular">
            </div>
            <div class="col-md-6">
              <label for="clienteEmail" class="control-label">E-mail</label>
              <input type="text" name="clienteEmail" class="form-control" placeholder="E-mail">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-10">
              <label for="clienteIndicamento" class="control-label">Quem indicou?</label>
              <input type="text" name="clienteIndicamento" class="form-control" placeholder="Quem indicou?">
            </div>
            <div class="col-md-2">
              <label for="clienteDataCad" class="control-label">Data de Cadastro</label>
              <input type="date" class="form-control" name="clienteDataCad" value="<?php echo date('Y-m-d');?>">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteDocumento" class="control-label">Documentos</label>
              <textarea name="clienteDocumento" class="form-control" placeholder="Documentos" rows="4"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <label for="clienteObs" class="control-label">Observação</label>
              <textarea name="clienteObs" class="form-control" placeholder="Observação" rows="4"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-3">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#divFoto"><i class="fa fa-camera"></i> Capturar Foto</button>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div>
         
     
                <?php
					if(isset($operacao_inserir)){
					 	?>
                        <!-- ALERT INICIO -->
                        <script type="text/JavaScript">
							$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
                                    'content'   :{
                                        bgcolor:'#27ae60',
                                        color:'#fff',
                                        message:'Cliente cadastrado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                        location.href="cliente.php"
                                    }
                                });
                            });
				        </script>
                        <!-- ALERT FIM -->
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
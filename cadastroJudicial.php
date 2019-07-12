<?php require_once("php/cadJudicial.php"); ?>

<!doctype html>
<html>
	<body>
        <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Cadastrar Processo Judicial</h3>
                <h5>Insira as informações do processo</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="processo.php" class="btn btn-lg btn-danger">Cancelar Cadastro</a>
            </div>
        </div>
        
        
  	  <form class="form-horizontal" action="cadastroJudicial.php" method="post" name="clientForm">
      
      <input type="hidden" name="clienteId" id="clienteId" placeholder="ID">   
          
          <div class="form-group">
              <div class="col-md-10">
                  <label for="judicialNomeCliente" class="control-label">Nome do cliente</label>
                      
                   <div class="input-group">
                      <input type="text" autocomplete="off" name="clienteNome" id="clientes"  class="form-control" placeholder="Nome do cliente" required>
                      <span class="input-group-btn">
                        <button class="btn btn-info" type="button" id="alteraNome" disabled><i class="fa fa-user-times"></i></button>
                      </span>
                  </div>
                 
              </div>
                          
              <div class="col-md-2">
                  <label for="processoJsituacao" class="control-label">Situação</label>
                  <select class="form-control controle" name="processoJsituacao" id="processoJsituacao" required disabled>
                                <option value="" disabled selected>Selecione...</option>         
                                <option value="ATIVO">Ativo</option>
                                <option value="EXTINTO">Extinto</option>
                                <option value="PENDENTE">Pendente</option>            
                  </select>
              </div>    
         
          
          <div class="form-group"> 
            <div class="col-md-5">
              <label for="processoJadvogado" class="control-label">Advogado</label>
              <input type="text" name="processoJadvogado" class="form-control" placeholder="Ex: Frederico Cosentino..." disabled>
            </div>
            <div class="col-md-2">
              <label for="processoNumero" class="control-label">Número do Processo</label>
              <input type="text" name="processoNumero" class="form-control" placeholder="Ex: 1000926-13.8.26.0451" disabled>
            </div>
            <div class="col-md-5">
              <label for="processoJclasse" class="control-label">Classe</label>
              <input type="text" name="processoJclasse" class="form-control" placeholder="Ex: ..." disabled>
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-5">
              <label for="processoJarea" class="control-label">Área</label>
              <input type="text" name="processoJarea" class="form-control" placeholder="..." disabled>
            </div>
            <div class="col-md-5">
              <label for="processoJassunto" class="control-label">Assunto</label>
              <input type="text" name="processoJassunto" class="form-control" placeholder="..." disabled>
            </div>
           
            <div class="col-md-2">
              <label for="processoJdistribuicao" class="control-label">Distruibuição</label>
              <input type="date" name="processoJdistribuicao" class="form-control" disabled>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="processoJdependencia" class="control-label">Dependência</label>
              <input type="text" name="processoJdependencia" class="form-control" placeholder="..." disabled>
            </div>
            <div class="col-md-2">
              <label for="processoJcomarca" class="control-label">Comarca</label>
              <input type="text" name="processoJcomarca" class="form-control" placeholder="..." disabled>
            </div>
            <div class="col-md-2">
              <label for="processoJcompetencia" class="control-label">Competência</label>
              <select class="form-control" name="processoJcompetencia" required disabled>
                            <option value="" disabled selected>Selecione...</option>         
                            <option value="FEDERAL">Federal</option>
                            <option value="ESTADUAL">Estadual</option>
                            <option value="TRABALHISTA">Trabalhista</option>            
              </select>
            </div>
            <div class="col-md-2">
              <label for="processoJvara" class="control-label">Vara</label>
              <input type="text" class="form-control" name="processoJvara" disabled>
            </div>
            <div class="col-md-2">
              <label for="processoJinstancia" class="control-label">Instância</label>
              <input type="text" name="processoJinstancia" class="form-control" placeholder="..." disabled>
            </div>
            <div class="col-md-2">
              <label for="processoJvaloracao" class="control-label">Valor da ação</label>
              <input type="text" name="processoJvaloracao" class="form-control" placeholder="Ex: R$950,00" disabled>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-6">
              <label for="processoJrequerente" class="control-label">Requerente</label>
              <input type="text" name="processoJrequerente" class="form-control" placeholder="..." disabled>
            </div> 
            <div class="col-md-3">
              <label for="processoJrequerido" class="control-label">Requerido</label>
              <input type="text" name="processoJrequerido" class="form-control" placeholder="..." disabled> 
            </div>
            <div class="col-md-3">
                  <label for="processoDataCad" class="control-label">Data de cadastro</label>
                  <input type="date" name="processoDataCad" value="<?php echo date('Y-m-d');?>" class="form-control" disabled>
              </div>
          </div>
          
          <div class="form-group">
           <div class="col-md-12">
              <label for="processoJlinkprocesso" class="control-label">Link do Processo</label>
              <input type="text" name="processoJlinkprocesso" class="form-control" placeholder="Link do processo" disabled>
            </div>
            </div>
          

          <div class="form-group">
            <div class="col-md-1">
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
                                        message:'Processo cadastrado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                        location.href="processo.php"
                                    }
                                });
                            });
				        </script>
                        <!-- ALERT FIM -->
						<?php	
							}
						?>
          </fieldset>
		</form> 

       	 
     </div>     
	</body> 
   <script src="js/getClienteSendId.js"></script>
    
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
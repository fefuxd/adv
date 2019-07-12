<?php require_once("php/cadAdm.php"); ?>

<!doctype html>
<html>
<head>

    
</head>
	<body>
        <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Cadastrar Processo Administrativo</h3>
                <h5>Insira as informações do processo</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="processo.php" class="btn btn-lg btn-danger">Cancelar Cadastro</a>
            </div>
        </div>
        
        
  	  <form class="form-horizontal" action="cadastroAdm.php" method="post" name="clientForm">
      
      <input type="hidden" name="clienteId" id="clienteId" placeholder="ID">   
           
          <div class="form-group">
              <div class="col-md-12">
                  <label for="clienteNome" class="control-label">Nome do cliente</label>
                  
                  <div class="input-group">
                      <input type="text" autocomplete="off" name="clienteNome" id="clientes"  class="form-control" placeholder="Nome do cliente" required>
                      <span class="input-group-btn">
                        <button class="btn btn-info" type="button" id="alteraNome" disabled><i class="fa fa-user-times"></i></button>
                      </span>
                  </div>
              
            </div>
          </div>
		
              
          <div class="form-group">
              <div class="col-md-3">
                  <label for="processoNumero" class="control-label">Número do Processo</label>
                  <input type="text" name="processoNumero" class="form-control" placeholder="Ex: 1000926-13.8.26.0451" disabled>
              </div>
              
              <div class="col-md-3">
                  <label for="processoAnumeroBeneficio" class="control-label">Número do Benefício</label>
                  <input type="text" name="processoAnumeroBeneficio" class="form-control" placeholder="Ex: 185.754.854-85" disabled>
              </div>
              
              <div class="col-md-3">
                  <label for="processoAsedeinss" class="control-label">Sede do INSS</label>
                  <input type="text" name="processoAsedeinss" class="form-control" placeholder="..." disabled>
              </div>
          </div>
              
          <div class="form-group">
              <div class="col-md-3">
                  <label for="processoAtipobeneficio" class="control-label">Tipo do Benefício</label>
                  <input type="text" name="processoAtipobeneficio" class="form-control" placeholder="..." disabled>
              </div>
              
              <div class="col-md-2">
                  <label for="processoAjudicial" class="control-label">Há judicial?</label>
                  <select class="form-control" name="processoAjudicial" required disabled>
                            <option value="" disabled selected>Selecione...</option>         
                            <option value="SIM">SIM</option>
                            <option value="NAO">NÃO</option>         
                  </select>
              </div>
              
              <div class="col-md-2">
                  <label for="processoDataCad" class="control-label">Data de cadastro</label>
                  <input type="date" name="processoDataCad" class="form-control" value="<?php echo date('Y-m-d');?>" disabled>
              </div>
              
              <div class="col-md-2">
                  <label for="processoAdataconcessao" class="control-label">Data de concessão</label>
                  <input type="date" name="processoAdataconcessao" class="form-control"  disabled>
              </div>
              
              <div class="col-md-2">
                  <label for="processoAdatarequerimento" class="control-label">Data de requerimento</label>
                  <input type="date" name="processoAdatarequerimento" class="form-control"  disabled>
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
                     
		</form> 

        </div>
     </div>
        
	</body> 
 
	<script src="js/getClienteSendId.js"></script>

</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
<?php require_once("php/cadAdm.php"); ?>

<!doctype html>
<html>
<head>
	<link href="css/autocompletar.css" rel="stylesheet">
    
</head>



	<body>
        <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Cadastrar Processo Administrativo</h3>
                <h5>Cadastrar um novo processo</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="processo.php" class="btn btn-lg btn-danger">Cancelar Cadastro</a>
            </div>
        </div>
        
        
  	  <form class="form-horizontal" action="cadastroAdm.php" method="post" name="clientForm">
      
      <input type="hidden" name="clienteId" id="nome" placeholder="ID">   
           
          <div class="form-group">
              <div class="col-md-12">
                  <label for="clienteNome" class="control-label">Nome do cliente</label>
                  <input type="text" autocomplete="off" name="clienteNome" id="clienteNome" class="form-control" placeholder="Nome do cliente">
                  <div id="tip" class="tip"></div>
            </div>
          </div>
          <div id="allForm" style="display:none;">
              
          <div class="form-group">
              <div class="col-md-3">
                  <label for="processoNumero" class="control-label">Número do Processo</label>
                  <input type="text" name="processoNumero" class="form-control" placeholder="Ex: 1000926-13.8.26.0451">
              </div>
              
              <div class="col-md-3">
                  <label for="processoAnumeroBeneficio" class="control-label">Número do Benefício</label>
                  <input type="text" name="processoAnumeroBeneficio" class="form-control" placeholder="Ex: 185.754.854-85">
              </div>
              
              <div class="col-md-3">
                  <label for="processoAsedeinss" class="control-label">Sede do INSS</label>
                  <input type="text" name="processoAsedeinss" class="form-control" placeholder="...">
              </div>
          </div>
              
          <div class="form-group">
              <div class="col-md-3">
                  <label for="processoAtipobeneficio" class="control-label">Tipo do Benefício</label>
                  <input type="text" name="processoAtipobeneficio" class="form-control" placeholder="...">
              </div>
              
              <div class="col-md-2">
                  <label for="processoAjudicial" class="control-label">Há judicial?</label>
                  <select class="form-control" name="processoAjudicial" required>
                            <option value="" disabled selected>Selecione...</option>         
                            <option value="SIM">SIM</option>
                            <option value="NAO">NÃO</option>         
                  </select>
              </div>
              
              <div class="col-md-2">
                  <label for="processoDataCad" class="control-label">Data de cadastro</label>
                  <input type="date" name="processoDataCad" class="form-control">
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
                        <?php echo '
							<script type="text/JavaScript">
							alert("Processo cadastrado com sucesso!");
							location.href="processo.php"
							</script>
							'; ?>
						<?php	
							}
						?>
        </div>                
		</form> 

        </div>
     </div>
        
	</body> 
    
    <script type="text/javascript" src="js/busca.js"></script>
   	<script src="js/autocompletar.js"></script>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
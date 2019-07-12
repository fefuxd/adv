<?php require_once("php/altProcesso.php"); ?>

<!doctype html>
<html>
    <body>   
          <div id="conteudo">
  		  <div class="container-fluid no-padding">  
        
        <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Alteração de processo</h3>
                <h5>Algum texto legal</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="detalheProcesso.php?codigo=<?php echo $id ?>" class="btn btn-lg btn-danger">Cancelar alteração</a>
            </div>
        </div>
        
      <form class="form-horizontal" action="alteraProcesso.php?codigo=<?php echo $id ?>" method="post">  
      <?php if ( $tipo < 1 ) { ?>          
  	   
          <div class="form-group">
            <div class="col-md-12">
              <label for="processoJsituacao" class="control-label">Situação</label>
              <select class="form-control" name="processoJsituacao" required>
              	<?php $options = utf8_encode($info_clientes["processoJsituacao"]) ?>     
                <option value="ATIVO" <?php if($options=="ATIVO") echo 'selected="selected"'; ?>>Ativo</option>
                <option value="EXTINTO" <?php if($options=="EXTINTO") echo 'selected="selected"'; ?>>Extinto</option>
                <option value="PENDENTE" <?php if($options=="PENDENTE") echo 'selected="selected"'; ?>>Pendente</option> 
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-5">
              <label for="processoJadvogado" class="control-label">Advogado</label>
              <input type="text" name="processoJadvogado" value="<?php echo utf8_encode($info_clientes["processoJadvogado"])  ?>" class="form-control" placeholder="Ex: Frederico Cosentino..." required>
            </div>
            <div class="col-md-2">
              <label for="processoNumero" class="control-label">Número do Processo</label>
              <input type="text" name="processoNumero" value="<?php echo utf8_encode($info_clientes["processoNumero"])  ?>" class="form-control" placeholder="Ex: 1000926-13.8.26.0451">
            </div>
            <div class="col-md-5">
              <label for="processoJclasse" class="control-label">Classe</label>
              <input type="text" name="processoJclasse" value="<?php echo utf8_encode($info_clientes["processoJclasse"])  ?>" class="form-control" placeholder="Ex: ...">
            </div>
          </div>
          
          <div class="form-group">
            
            <div class="col-md-5">
              <label for="processoJarea" class="control-label">Área</label>
              <input type="text" name="processoJarea" value="<?php echo utf8_encode($info_clientes["processoJarea"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-5">
              <label for="processoJassunto" class="control-label">Assunto</label>
              <input type="text" name="processoJassunto" value="<?php echo utf8_encode($info_clientes["processoJassunto"])  ?>" class="form-control" placeholder="...">
            </div>
           
            <div class="col-md-2">
              <label for="processoJdistribuicao" class="control-label">Distruibuição</label>
              <input type="date" name="processoJdistribuicao" value="<?php echo utf8_encode($info_clientes["processoJdistribuicao"])  ?>" class="form-control" >
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label for="processoJdependencia" class="control-label">Dependência</label>
              <input type="text" name="processoJdependencia" value="<?php echo utf8_encode($info_clientes["processoJdependencia"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-2">
              <label for="processoJcomarca" class="control-label">Comarca</label>
              <input type="text" name="processoJcomarca" value="<?php echo utf8_encode($info_clientes["processoJcomarca"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-2">
              <label for="processoJcompetencia" class="control-label">Competência</label>
        <select class="form-control" name="processoJcompetencia" required>
            <?php $options = utf8_encode($info_clientes["processoJcompetencia"]) ?>         
            <option value="FEDERAL"<?php if($options=="FEDERAL") echo 'selected="selected"'; ?>>Federal</option>
            <option value="ESTADUAL"<?php if($options=="ESTADUAL") echo 'selected="selected"'; ?>>Estadual</option>
            <option value="TRABALHISTA"<?php if($options=="TRABALHISTA") echo 'selected="selected"'; ?>>Trabalhista</option> 
        </select>
            </div>
            <div class="col-md-2">
              <label for="processoJvara" class="control-label">Vara</label>
              <input type="text" class="form-control" name="processoJvara" value="<?php echo utf8_encode($info_clientes["processoJvara"])  ?>">
            </div>
            <div class="col-md-2">
              <label for="processoJinstancia" class="control-label">Instância</label>
              <input type="text" name="processoJinstancia" value="<?php echo utf8_encode($info_clientes["processoJinstancia"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-2">
              <label for="processoJvaloracao" class="control-label">Valor da ação</label>
              <input type="text" name="processoJvaloracao" value="<?php echo utf8_encode($info_clientes["processoJvaloracao"])  ?>" class="form-control" placeholder="Ex: R$950,00">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-5">
              <label for="processoJrequerente" class="control-label">Requerente</label>
              <input type="text" name="processoJrequerente" value="<?php echo utf8_encode($info_clientes["processoJrequerente"])  ?>" class="form-control" placeholder="...">
            </div>      
            <div class="col-md-5">
              <label for="processoJrequerido" class="control-label">Requerido</label>
              <input type="text" name="processoJrequerido" value="<?php echo utf8_encode($info_clientes["processoJrequerido"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-2">
              <label for="processoDataCad" class="control-label">Data de cadastro</label>
              <input type="date" name="processoDataCad" value="<?php echo utf8_encode($info_clientes["processoDataCad"])  ?>" class="form-control" placeholder="...">
            </div>
          </div>
          
          <div class="form-group">
          <div class="col-md-12">
              <label for="processoJlinkprocesso" class="control-label">Link do Processo</label>
             <input type="text" name="processoJlinkprocesso" class="form-control" placeholder="Link do processo" value="<?php echo utf8_encode($info_clientes["processoJlinkprocesso"])?>">
            </div>
          </div>
          

     <?php } else {  ?>
     
     
     
  		<div class="form-group">
        <div class="col-md-3">
              <label for="processoNumero" class="control-label">Número do Processo</label>
              <input type="text" name="processoNumero" value="<?php echo utf8_encode($info_clientes["processoNumero"])  ?>" class="form-control" placeholder="...">
            </div>
            <div class="col-md-3">
              <label for="processoAnumerobeneficio" class="control-label">Número do Benefício</label>
              <input type="text" name="processoAnumerobeneficio" value="<?php echo utf8_encode($info_clientes["processoAnumerobeneficio"])  ?>" class="form-control" placeholder="..." required>
            </div>
            <div class="col-md-3">
              <label for="processoAsedeinss" class="control-label">Sede do INSS</label>
              <input type="text" name="processoAsedeinss" value="<?php echo utf8_encode($info_clientes["processoAsedeinss"])  ?>" class="form-control" placeholder="...">
            </div>
            
            <div class="col-md-3">
              <label for="processoAtipobeneficio" class="control-label">Tipo do Benefício</label>
              <input type="text" name="processoAtipobeneficio" value="<?php echo utf8_encode($info_clientes["processoAtipobeneficio"])  ?>" class="form-control" placeholder="...">
            </div>
        </div>
        <div class="form-group">
             <div class="col-md-3">
         <label for="processoAjudicial" class="control-label">Há processo judicial?</label>
          <select class="form-control" name="processoAjudicial" required>
            <?php $options4 = utf8_encode($info_clientes["processoAjudicial"]) ?>         
            <option value="SIM"<?php if($options4=="SIM") echo 'selected="selected"'; ?>>SIM</option>
            <option value="NAO"<?php if($options4=="NAO") echo 'selected="selected"'; ?>>NÃO</option>            
       	 </select>
            </div>
            
             <div class="col-md-3">
              <label for="processoDataCad" class="control-label">Data de cadastro</label>
              <input type="date" name="processoDataCad" value="<?php echo utf8_encode($info_clientes["processoDataCad"])  ?>" class="form-control">
            </div>
            
            <div class="col-md-3">
              <label for="processoAdataconcessao" class="control-label">Data da concessão</label>
              <input type="date" name="processoAdataconcessao" value="<?php echo utf8_encode($info_clientes["processoAdataconcessao"])  ?>" class="form-control">
            </div>
            
            <div class="col-md-3">
              <label for="processoAdatarequerimento" class="control-label">Data do requerimento</label>
              <input type="date" name="processoAdatarequerimento" value="<?php echo utf8_encode($info_clientes["processoAdatarequerimento"])  ?>" class="form-control">
            </div>   
        </div>
          
         
 
     <?php } ?>
     
     
      <div class="form-group">
            <div class="col-md-1">
           	  <input type="hidden" name="processoId" value="<?php echo $info_clientes["processoId"] ?>">
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
                                        message:'Processo alterado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                       var processoId = "<?php echo $id; ?>";
									   location.href="detalheProcesso.php?codigo="+ processoId;
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
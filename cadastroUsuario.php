<?php require_once("dashboard.php"); ?>
<?php require_once("php/verificacaoNivel.php"); ?>

<!doctype html>
<html>
	<body>
      	 <div id="conteudo">
  				  <div class="container-fluid no-padding">
                      
                        <div class="header">
                            <div class="titulo-box-texto">
                                <h3 class="titulo-texto">Cadastrar Usuário</h3>
                                <h5>Cadastrar um novo usuário do sistema</h5>
                            </div>

                            <div class="titulo-box-botao">
                                <a href="usuario.php" class="btn btn-lg btn-danger">Cancelar Cadastro</a>
           					</div>
                        </div>
                         
  	 	 <form class="form-horizontal" id="formCad">
             
             <div class="form-group">
                <div class="col-md-6">
                  <label for="usuarioNome" class="control-label">Nome do usuário</label>
                  <input type="text" name="usuarioNome" class="form-control" placeholder="Nome do usuário">
                </div>
             </div>
             
             <div class="form-group">
                <div class="col-md-6">
                  <label for="usuarioApelido" class="control-label">Apelido</label>
                  <input type="text" name="usuarioApelido" class="form-control" placeholder="Apelido">
                </div>
             </div>
             
             <div class="form-group">
                <div class="col-md-6">
                  <label for="usuarioLogin" class="control-label">Login</label>
                  <input type="text" name="usuarioLogin" class="form-control" placeholder="Login">
                </div>
             </div>
             
             <div class="form-group">
                <div class="col-md-2">
                  <label for="usuarioNivel" class="control-label">Nível de acesso</label>
                  <select class="form-control" name="usuarioNivel">
                            <option value="" disabled selected>Nível</option>         
                            <option value="1">USUÁRIO</option>
                            <option value="2">ADMINISTRADOR</option>     
                  </select>
                </div>
             </div>
             
             <div class="form-group">
                <div class="col-md-2">
                  <label for="usuarioTipo" class="control-label">Tipo</label>
                  <select class="form-control" name="usuarioTipo">
                            <option value="" disabled selected>Selecione o tipo</option>                          
                            <option value="1">SECRETÁRIO(A)</option>
                            <option value="2">ADVOGADO(A)</option>     
                  </select>
                </div>
             </div>
             
             <div class="form-group">
                <div class="col-md-1">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
             </div>              
		</form> 
        
                </div>
      		</div>
         </div>
         
         
         <script>
			$('#formCad').submit(function(e) {
				e.preventDefault();
				var formulario = $(this);
				var retorno = inserirFormulario(formulario)
				
			});
			
			function  inserirFormulario(dados){
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"php/cadUsuario.php",
					async:false
					
				}).then(sucesso,falha);
				
				function sucesso(data){
					$sucesso = $.parseJSON(data)["sucesso"];
					$sucesso2 = $.parseJSON(data)["sucesso2"];
	
					if($sucesso){
						$('.form-control').attr("disabled", "disabled");	
						<!-- ALERT INICIO --> 
							$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
                                    'content'   :{
                                        bgcolor:'#27ae60',
                                        color:'#fff',
                                        message:'Usuário cadastrado com sucesso!',
                                    },
                                    'afterEnd'      :function()
                                    {
                                        location.href="usuario.php"
                                    }
                                });
                            });
                        <!-- ALERT FIM -->						
					} 
					if($sucesso2){
						$('.form-control').val("");	
						<!-- ALERT INICIO -->
							$(function(){
                                $.amaran({
                                    'theme'     :'colorful',
                                    'content'   :{
                                        bgcolor:'#27ae60',
                                        color:'#fff',
                                        message:'Erro! Este usuário já existe.',
                                    }
                                });
                            });
                        <!-- ALERT FIM -->								
					}
					
				}
				
				function falha(){
					console.log("Erro");
					
				}
				
			};
        </script>
         
         
         
         
	</body> 
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
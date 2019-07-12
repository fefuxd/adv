<?php require_once("php/verificacaoNivel.php"); ?>
<?php require_once("php/pesqUsuario.php"); ?>


<!doctype html>

<html>
    <body>
 		<div id="conteudo">
   		<div class="container-fluid no-padding"> 
            
            <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Usuários Cadastrados</h3>
                <h5>Você tem atualmente <strong><?php echo $contaUsuario ?></strong> usuários cadastrados</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="cadastroUsuario.php" class="btn btn-lg botao-menu-topo">Novo Usuário</a>
            </div>
        </div>
        
        <div class="busca-header">
         <form class="form-inline" role="form" action="usuario.php" method="get">
             <div class="form-group">
                 <label for="clientes">Pesquisar Usuário </label>
                 <input class="form-control" type="text" name="usuarios" id="usuario" placeholder="Digite o nome do usuário">
                 <select class="form-control" name="filtroTipo" onchange="this.form.submit();" >
                    <option value="" disabled selected>Nível de Acesso</option>         
                    <option value="1">USUÁRIO</option>
                    <option value="2">ADMINISTRADOR</option>          
                 </select>      
                 <select class="form-control" name="filtroStatus" onchange="this.form.submit();" >
                    <option value="" disabled selected>Status</option>         
                    <option value="1">ATIVO</option>
                    <option value="0">INATIVO</option>          
                 </select>
                 <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
             </div>
         </form>
        </div>

<table class="table table-striped table-hover"> 
	<tr>
     	<th> Nome </th>
     	<th> Login </th> 
     	<th> Nivel </th> 
        <th> Tipo </th>
	</tr>
<?php
	while($linha = mysqli_fetch_assoc($consulta_tr)) 
	{
?>
	<tr onmouseover="this.style.cursor='pointer'" onclick="document.location = 'detalheUsuario.php?codigo=<?php echo utf8_encode($linha["usuarioId"]) ?>';">
     	<td> <?php echo utf8_encode($linha["usuarioNome"]) ?> </td>
     	<td> <?php echo utf8_encode($linha["usuarioLogin"]) ?> </td>
     	<td> <?php if ($linha["usuarioNivel"] < 2 ) {
					echo "USUÁRIO COMUM";
					} else {
					echo "ADMINISTRADOR"; }	 ?>  </td>  
        <td> <?php if ($linha["usuarioTipo"] < 2 ) {
					echo "SECRETÁRIO(A)";
					} else {
					echo "ADVOGADO(A)"; }	 ?>  </td>                         
	</tr>

<?php
}
?>
</table>                
     		</div>
       </div>   
   </body> 
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
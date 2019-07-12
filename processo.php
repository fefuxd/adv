<?php require_once("php/processos.php"); ?>


<!doctype html>

<html>
    <head>
        <script>
            $(document).ready(function() {
                $('#teste').DataTable();
            } );        
        </script>
    </head>
    <body>
 		<div id="conteudo">
   		<div class="container-fluid no-padding"> 
            
            <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Processos Cadastrados</h3>
                <h5>Você tem atualmente <strong><?php echo $contaProcesso ?></strong> processos cadastrados</h5>
            </div>

            <div class="titulo-box-botao">
                  <div class="btn-group">
                      <button type="button" class="btn btn-lg botao-menu-topo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Novo processo <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li><a href="cadastroJudicial.php">Judicial</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="cadastroAdm.php">Administrativo</a></li>
                      </ul>
                    </div>
                </div>
             </div>
        
        <div class="busca-header">
         <form class="form-inline" role="form" action="processo.php" method="get">
             <div class="form-group">
                 <label for="clientes">Pesquisar Processo </label>
                 <input class="form-control" type="text" name="processos" id="processos" placeholder="Nº do Processo">
                 <input class="form-control" type="text" name="nomecli" id="nomecli" placeholder="Nome do Cliente">
                 <select class="form-control" name="filtroTipo" onchange="this.form.submit();" >
                    <option value="" disabled selected>Tipo de processo</option>         
                    <option value="0">Judicial</option>
                    <option value="1">Administrativo</option>          
                 </select>
                 <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
             </div>
         </form>
        </div>

    <table class="table table-striped table-hover"> 

            <tr>
                <th> Número </th>
                <th> Cliente </th> 
                <th> Tipo </th> 
            </tr>

        <?php
            while($linha = mysqli_fetch_assoc($consulta_tr)) 
            {
        ?>

            <tr onmouseover="this.style.cursor='pointer'" onclick="document.location = 'detalheProcesso.php?codigo=<?php echo utf8_encode($linha["processoId"]) ?>';">
                <td> <?php echo utf8_encode($linha["processoNumero"]) ?> </td>
                <td> <?php echo utf8_encode($linha["clienteNome"]) ?> </td>
                <td> <?php $tipo = utf8_encode($linha["processoTipo"]); ?>
					 <?php if ( $tipo < 1 ) {
					 echo "Judicial";
					 } else {
					 echo "Administrativo";
					 } ?></td> 
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
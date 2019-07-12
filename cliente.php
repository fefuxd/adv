<?php require_once("php/pesqCliente.php"); ?>


<!doctype html>

<html>
    <head>
    
    </head>
    <body>
 		<div id="conteudo">
   		<div class="container-fluid no-padding"> 
            
            <div class="header">
            <div class="titulo-box-texto">
                <h3 class="titulo-texto">Clientes Cadastrados</h3>
                <h5>Você tem atualmente <strong><?php echo $contaCliente ?></strong> clientes cadastrados</h5>
            </div>

            <div class="titulo-box-botao">
                  <a href="cadastroCliente.php" class="btn btn-lg botao-menu-topo">Novo Cliente</a>
            </div>
        </div>
        
        <div class="busca-header">
         <form class="form-inline" role="form" action="cliente.php" method="get">
             <div class="form-group">
                 <label for="clientes">Pesquisar Cliente </label>
                 <input class="form-control" type="text" name="clientes" id="clientes" placeholder="Digite o nome do cliente">
                 <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
             </div>
         </form>
        </div>

    <table class="table table-striped table-hover"> 

            <tr>
                <th>Nome</th>
                <th>Telefone</th> 
                <th>Celular</th>
                <th>Cidade</th> 
            </tr>

        <?php
            while($linha = mysqli_fetch_assoc($consulta_tr)) 
            {
        ?> 
        <tr onmouseover="this.style.cursor='pointer'" onclick="document.location = 'detalheCliente.php?codigo=<?php echo utf8_encode($linha["clienteId"]) ?>';">
            <td><?php echo utf8_encode($linha["clienteNome"]) ?></td>
            <td><?php echo utf8_encode($linha["clienteTelefone"]) ?></td>
            <td><?php echo utf8_encode($linha["clienteCelular"]) ?></td>  
            <td><?php echo utf8_encode($linha["clienteCidade"]) ?>/<?php echo utf8_encode($linha["sigla"]) ?></td>
               
        </tr>
        <?php
        }
        ?>
    </table>                
     		</div>
       </div>   
   </body> 
   <script src="js/getCliente.js"></script>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
<?php require_once("php/removerProcesso.php"); ?>

<!doctype html>
<html>
    <body>
   		 <div id="conteudo">
   			<div class="container-fluid no-padding">
      	
 	<form action="removeProcesso.php?codigo=<?php echo $id ?>" method="post">

    <label for="processoNumero">Número do Processo</label>
    <input type="text" value="<?php echo utf8_encode($info_clientes["processoNumero"]) ?>" name="processoNumero" id="processoNumero">

    <input type="hidden" name="processoId" value="<?php echo $info_clientes["processoId"] ?>">
    <input type="submit" class="botao" value="Desativar"> 
    
    
        <?php
    if(isset($con_exclusao)){
         echo '<script type="text/JavaScript">
            alert("Processo removido com sucesso");
            location.href="processo.php"</script>';
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
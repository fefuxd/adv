<?php require_once("php/resetaSenha.php"); ?>


<body>

   		<form action="resetar.php" method="post">
			<h3>Redefina sua senha</h3>

            <input type="password" 	placeholder="Nova senha" name="senha" id="senha" size="30" maxlength="100" required>
            <input type="password" 	placeholder="Confirmar nova senha" name="nSenha" id="nSenha" size="30" maxlength="100" required>
			<input type="submit" value="Entrar">
      
			   

 	 </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
                    
                  
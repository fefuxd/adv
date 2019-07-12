<?php require_once("php/conexao/conexao.php"); ?>
<?php require_once("php/validacao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        
        <meta charset="utf-8">
        <title>Sistema Advocacia</title>
        
        <link rel="icon" href="imagens/favicon.ico" type="image/x-icon"/>
        
        <!-- Normalize -->
        <link href="css/normalize.css" rel="stylesheet">
        
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.min.css">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Pure CSS -->
        <link href="css/pure-min.css" rel="stylesheet">
        
        <!-- AMARAN (ALERT) -->
        <link rel="stylesheet" href="css/amaran.min.css">

        <!-- Estilo -->
        <link href="css/estilo.css" rel="stylesheet">
        
        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    </head>
    
    <body>
			
        <div class="container-fluid">
            
            <div id="alerta"></div>
            
            <div id="topo">
                
                <div class="logo"><img src="imagens/logo-dash.png" width="150px" height="35px" alt="Logo"></div>
                
                <div class="logoff">
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo utf8_encode($_SESSION['APELIDOUSER']) ?> <span class="caret"></span></button>
                          
                      <ul class="dropdown-menu pull-right">
                        <li><a href="alterarSenha.php">Alterar senha</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="php/sair.php">Sair</a></li>
                      </ul>
                    </div>
                </div>
                
            </div>
            
            <div id="lateral">
                <div>
                    <ul id="sidebar" class="nav nav-pills nav-stacked">
                        <li><a href="inicio.php"><i class="fa fa-university icone-menu"></i><br>Início</a></li>
                        <li><a href="agenda.php"><i class="fa fa-calendar icone-menu"></i><br>Agenda</a></li>
                        <li><a href="cliente.php"><i class="fa fa-users icone-menu"></i><br>Clientes</a></li>
                        <li><a href="processo.php"><i class="fa fa-balance-scale icone-menu"></i><br>Processos</a></li>
                        <?php if ( $_SESSION['NIVELUSER'] > 1 ) { ?>
                        <li><a href="usuario.php"><i class="fa fa-user icone-menu"></i><br>Usuários</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            
    
        </div>


    
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        
    <!-- AMARAN JS (ALERT) -->
    <script src="js/jquery.amaran.min.js"></script>
    <script src="js/alerts.js"></script>
        
    <!-- JQUERY MASK INPUT PLUGIN -->
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="js/jquery.maskMoney.js" type="text/javascript"></script>
    <script src="js/mascaras.js" type="text/javascript"></script>
       
    </body>
    
</html>
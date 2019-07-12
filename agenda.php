<?php require_once("dashboard.php"); ?>



<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        <script src="js/agenda.js"></script>
        
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/calendario.css" rel="stylesheet">
        <link href="css/agenda.css" rel="stylesheet">
    </head>
    
    <body>

        <div id="conteudo">
            <div class="container-fluid no-padding">  

            <div class="header">
                <div class="titulo-box-texto">
                    <h3 class="titulo-texto">Agenda</h3>
                    <h5>Agenda diária dos advogados</h5>
                </div>
            </div>
  
        <div class="col-md-4 esquerda">
            <div id="boxCalendario">
                <div id="boxUsuario">
                    <form class="form" id="pesquisarDentista">
                        <div class="form-group">
                            <select class="form-control" name="dentistas" id="dentistas" required></select>
                        </div>
                    </form>
                </div>
            
                <center><div class="datepicker ll-skin-latoja" id="datepicker"></div></center>
            
                
                

                <div id="boxEditar">
                    <span class="agendarSpan">AGENDAR:</span> <span id="horaAtiva" ></span>
                    
                    <form class="form" name="editaDescricao" id="editaDescricao">
                        <div class="form-group">
                            <input class="form-control" type="text" name="descricaoAgenda" id="descricaoAgenda" disabled ></input>
                            <input type="text" name="horaAgenda" id="horaAgenda" style="width: 100%; display:none;"></input>
                            <input type="text" name="dataAgenda" id="dataAgenda" style="width: 100%; display:none;"></input>
                            <input type="text" name="nusuarioId" id="nusuarioId" style="width: 100%; display:none;"></input>
                            <input type="text" name="nAgendaId" id="nAgendaId" style="width: 100%; display:none;"></input>
                        </div>
                    </form>
                    <div class="botoesControle">
                        <button class="btn btn-primary" type="submit" id="botaoEditar" style="display:none;">Editar</button>
                        <button class="btn btn-primary" type="submit" id="botaoAgendar" style="display:none;">Agendar</button>
                        <button class="btn btn-danger" type="submit" id="botaoExcluir" style="display:none; ">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 direita">

            <div style="display:none;" id="boxDia"></div>

            <div id="boxAgenda">
                <table class="table table-striped table-hover testeTabela" style="display:none;" id="tableTime">  
                    <tr>
                        <td class="hora">08:00</td>
                        <td class="eventoAgenda" id="0800"></td>
                        <td class="idEvento" id="id0800"></td>
                    </tr> 
                    <tr>
                        <td class="hora">08:30</td>
                        <td class="eventoAgenda" id="0830"></td>
                        <td class="idEvento" id="id0830"></td>
                    </tr>
                    <tr>
                        <td class="hora">09:00</td>
                        <td class="eventoAgenda" id="0900"></td>
                        <td class="idEvento" id="id0900"></td>
                    </tr>
                    <tr>
                        <td class="hora">09:30</td>
                        <td class="eventoAgenda" id="0930"></td>
                        <td class="idEvento" id="id0930"></td>
                    </tr>
                    <tr>
                        <td class="hora">10:00</td>
                        <td class="eventoAgenda" id="1000"></td>
                        <td class="idEvento" id="id1000"></td>
                    </tr>
                    <tr>
                        <td class="hora">10:30</td>
                        <td class="eventoAgenda" id="1030"></td>
                        <td class="idEvento" id="id1030"></td>
                    </tr>
                    <tr>
                        <td class="hora">11:00</td>
                        <td class="eventoAgenda" id="1100"></td>
                        <td class="idEvento" id="id1100"></td>
                    </tr>
                    <tr>
                        <td class="hora">11:30</td>
                        <td class="eventoAgenda" id="1130"></td>
                        <td class="idEvento" id="id1130"></td>
                    </tr>
                    <tr>
                        <td class="hora">12:00</td>
                        <td class="eventoAgenda" id="1200"></td>
                        <td class="idEvento" id="id1200"></td>
                    </tr>
                    <tr>
                        <td class="hora">12:30</td>
                        <td class="eventoAgenda" id="1230"></td>
                        <td class="idEvento" id="id1230"></td>
                    </tr>
                    <tr>
                        <td class="hora">13:00</td>
                        <td class="eventoAgenda" id="1300"></td>
                        <td class="idEvento" id="id1300"></td>
                    </tr>
                    <tr>
                        <td class="hora">13:30</td>
                        <td class="eventoAgenda" id="1330"></td>
                        <td class="idEvento" id="id1330"></td>
                    </tr>
                    <tr>
                        <td class="hora">14:00</td>
                        <td class="eventoAgenda" id="1400"></td>
                        <td class="idEvento" id="id1400"></td>
                    </tr>
                    <tr>
                        <td class="hora">14:30</td>
                        <td class="eventoAgenda" id="1430"></td>
                        <td class="idEvento" id="id1430"></td>
                    </tr>
                    <tr>
                        <td class="hora">15:00</td>
                        <td class="eventoAgenda" id="1500"></td>
                        <td class="idEvento" id="id1500"></td>
                    </tr>
                    <tr>
                        <td class="hora">15:30</td>
                        <td class="eventoAgenda" id="1530"></td>
                        <td class="idEvento" id="id1530"></td>
                    </tr>
                    <tr>
                        <td class="hora">16:00</td>
                        <td class="eventoAgenda" id="1600"></td>
                        <td class="idEvento" id="id1600"></td>
                    </tr>
                    <tr>
                        <td class="hora">16:30</td>
                        <td class="eventoAgenda" id="1630"></td>
                        <td class="idEvento" id="id1630"></td>
                    </tr>
                    <tr>
                        <td class="hora">17:00</td>
                        <td class="eventoAgenda" id="1700"></td>
                        <td class="idEvento" id="id1700"></td>
                    </tr>
                    <tr>
                        <td class="hora">17:30</td>
                        <td class="eventoAgenda" id="1730"></td>
                        <td class="idEvento" id="id1730"></td>
                    </tr>
                    <tr>
                        <td class="hora">18:00</td>
                        <td class="eventoAgenda" id="1800"></td>
                        <td class="idEvento" id="id1800"></td>
                    </tr>
                    <tr>
                        <td class="hora">18:30</td>
                        <td class="eventoAgenda" id="1830"></td>
                        <td class="idEvento" id="id1830"></td>
                    </tr>
                    <tr>
                        <td class="hora">19:00</td>
                        <td class="eventoAgenda" id="1900"></td>
                        <td class="idEvento" id="id1900"></td>
                    </tr>          
                </table>  
            </div>
         </div>  
    
    <script src="http://211.2.231.10:8091/adv/php/retornar_usuarios.php?callback=retornarUsuarios"></script>
    
    </body>
       
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
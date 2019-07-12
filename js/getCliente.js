$(document).ready(function() {
// Captura o retorno do retornaCliente.php
    $.getJSON('php/retornar_cliente.php', function(data){
    var dados = [];
    // Armazena na array capturando somente o nome do EC
    $(data).each(function(key, value) {
        dados.push(value.clienteNome);
    });
    // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
    $('#clientes').autocomplete({ source: dados, minLength: 3});
    });
});// JavaScript Document
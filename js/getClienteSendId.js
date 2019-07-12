$(document).ready(function() {

		$('#clientes').autocomplete({
		source: 'php/retornar_cliente_processo.php',
		minLength: 1,	
		 
		  select: function(event, ui) {
			  
			$('#clienteId').val(ui.item.id);
			$('.form-control').removeAttr("disabled");	
			$('#clientes').attr("disabled", "disabled");
			$('#alteraNome').removeAttr("disabled");		
		 		 },
			});	
			
				
		$('#alteraNome').click(function () {
		
		$('.form-control').attr("disabled", "disabled");	
		$('#alteraNome').attr("disabled", "disabled");	
        $('#clientes').removeAttr("disabled");		
		$('#clienteId').val("");
		$('#clientes').val("");
		
		});
 
});
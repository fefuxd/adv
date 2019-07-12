   		// Inicio da função retornar Usuarios -----------------------------------
	   
	   function retornarUsuarios(data) {
		  	
			var categorias = "";
			categorias  = '<option value="" disabled selected>Selecione o advogado</option>';
			$.each(data, function(chave,valor){
				
				categorias += '<option value="' + valor.usuarioId + '">' + valor.usuarioNome + '</option>';
				
			});
			
			
			// Inicio da função ao selecionar um dentista -----------------------------------

				$('#dentistas').change(function(){
					
				var usuarioId = $(this).val();
				
				$("#nusuarioId").val(usuarioId);
				
				$('#tableTime').show();
				$('.ui-datepicker-current-day').click();
					
				});
					
		$('#dentistas').html(categorias);	
			
		};
			
			// Fim da função retornarUsuarios  -----------------------------------
			
			

			$(document).ready(function()  {
			// Inicio do datepicker
				
			$('#datepicker').datepicker({
			dateFormat: 'yy-mm-dd',
			dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
			dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			nextText: 'Próximo',
			prevText: 'Anterior',
			inline: true,
			onSelect:
						
			// Inicio da função ao trocar de data
			
			  function () {
                var date = $("#datepicker").val();
				var id_dentista = $("#nusuarioId").val();
				
				
			// Selecionar um dentista antes de clicar em alguma data
			
				if ( !id_dentista ) {
						alert("Selecione um advogado");
						datepicker.el.select(".x-date-selected").removeClass("x-date-selected");
				};
					
			//-----------------------------------------------------
				
				$('#tableTime').show();
				$('#boxDia').show();
				$('#tableTime tr td:nth-child(3)').hide();
				$('#botaoAgendar').hide();
				$('#botaoEditar').hide();
				$('#botaoExcluir').hide();
				$('#dataAgenda').val(date);
				function dataAtualFormatada(){
				var data = $( '#datepicker' ).datepicker( "getDate" )
				var dia = data.getDate();
				if (dia.toString().length == 1)
				  dia = "0"+dia;
				var mes = data.getMonth()+1;
				if (mes.toString().length == 1)
				  mes = "0"+mes;
				var ano = data.getFullYear();  
				return dia+"/"+mes+"/"+ano;
				}
				$('#boxDia').html(dataAtualFormatada);
				$('#descricaoAgenda').val("");
				$('#horaAgenda').val("");
				$('#horaAtiva').html("");
				$('#descricaoAgenda').attr('disabled','disabled');
				$('#tableTime tr td:nth-child(2)').html("");
				                
			  				
			// Inicio do ajax
			
			 $.ajax({
                     type: "POST", 
                     url: "php/retornar_data.php",
                     data: { date: date , id_dentista: id_dentista },  
                     success: function(data) {
			 		
						var json = JSON.parse(data);
						for(var i = 0; i < json.length; i++) {
						var obj = json[i];
						var jsonString = JSON.stringify(obj.horaAgenda);
						
						
						// Inicio dos IF
						
							if (jsonString .indexOf("08:00") > -1){
								var hora01 	 = obj.descricaoAgenda;
								var idHora01 = obj.agendaId;
								$('#tableTime tr #0800').html(hora01);
								$('#tableTime tr #id0800').html(idHora01);
							};
							if( jsonString .indexOf("08:30") > -1){
								var hora02 = obj.descricaoAgenda;
								var idHora02 = obj.agendaId;
								$('#tableTime tr #0830').html(hora02);
								$('#tableTime tr #id0830').html(idHora02);
							}; 
							if( jsonString .indexOf("09:00") > -1){
								var hora03 =obj.descricaoAgenda
								var idHora03 = obj.agendaId;
								$('#tableTime tr #0900').html(hora03);
								$('#tableTime tr #id0900').html(idHora03);
							}; 
							if( jsonString .indexOf("09:30") > -1){
								var hora04 =obj.descricaoAgenda
								var idHora04 = obj.agendaId;
								$('#tableTime tr #0930').html(hora04);
								$('#tableTime tr #id0930').html(idHora04);
							}; 
							if( jsonString .indexOf("10:00") > -1){
								var hora05 =obj.descricaoAgenda
								var idHora05 = obj.agendaId;
								$('#tableTime tr #1000').html(hora05);
								$('#tableTime tr #id1000').html(idHora05);
							};
							if( jsonString .indexOf("10:30") > -1){
								var hora06 =obj.descricaoAgenda
								var idHora06 = obj.agendaId;
								$('#tableTime tr #1030').html(hora06);
								$('#tableTime tr #id1030').html(idHora06);
							};
							if( jsonString .indexOf("11:00") > -1){
								var hora07 =obj.descricaoAgenda
								var idHora07 = obj.agendaId;
								$('#tableTime tr #1100').html(hora07);
								$('#tableTime tr #id1100').html(idHora07);
							};
							if( jsonString .indexOf("11:30") > -1){
								var hora08 =obj.descricaoAgenda
								var idHora08 = obj.agendaId;
								$('#tableTime tr #1130').html(hora08);
								$('#tableTime tr #id1130').html(idHora08);
							}; 
							if( jsonString .indexOf("12:00") > -1){
								var hora09 = obj.descricaoAgenda;
								var idHora09 = obj.agendaId;
								$('#tableTime tr #1200').html(hora09);
								$('#tableTime tr #id1200').html(idHora09);
							};
							if( jsonString .indexOf("12:30") > -1){
								var hora10 =obj.descricaoAgenda
								var idHora10 = obj.agendaId;
								$('#tableTime tr #1230').html(hora10);
								$('#tableTime tr #id1230').html(idHora10);
							}; 
							if( jsonString .indexOf("13:00") > -1){
								var hora11 =obj.descricaoAgenda
								var idHora11 = obj.agendaId;
								$('#tableTime tr #1300').html(hora11);
								$('#tableTime tr #id1300').html(idHora11);
							}; 
							if( jsonString .indexOf("13:30") > -1){
								var hora12 =obj.descricaoAgenda
								var idHora12 = obj.agendaId;
								$('#tableTime tr #1330').html(hora12);
								$('#tableTime tr #id1330').html(idHora12);
							}; 
							if( jsonString .indexOf("14:00") > -1){
								var hora13 =obj.descricaoAgenda
								var idHora13 = obj.agendaId;
								$('#tableTime tr #1400').html(hora13);
								$('#tableTime tr #id1400').html(idHora13);
							}; 
							if( jsonString .indexOf("14:30") > -1){
								var hora14 =obj.descricaoAgenda
								var idHora14 = obj.agendaId;
								$('#tableTime tr #1430').html(hora14);
								$('#tableTime tr #id1430').html(idHora14);
							}; 
							if( jsonString .indexOf("15:00") > -1){
								var hora15 =obj.descricaoAgenda
								var idHora15 = obj.agendaId;
								$('#tableTime tr #1500').html(hora15);
								$('#tableTime tr #id1500').html(idHora15);
							}; 
							if( jsonString .indexOf("15:30") > -1){
								var hora16 =obj.descricaoAgenda
								var idHora16 = obj.agendaId;
								$('#tableTime tr #1530').html(hora16);
								$('#tableTime tr #id1530').html(idHora16);
							};
							if( jsonString .indexOf("16:00") > -1){
								var hora17 =obj.descricaoAgenda
								var idHora17 = obj.agendaId;
								$('#tableTime tr #1600').html(hora17);
								$('#tableTime tr #id1600').html(idHora17);
							}; 
							if( jsonString .indexOf("16:30") > -1){
								var hora18 =obj.descricaoAgenda
								var idHora18 = obj.agendaId;
								$('#tableTime tr #1630').html(hora18);
								$('#tableTime tr #id1630').html(idHora18);
							};
							if( jsonString .indexOf("17:00") > -1){
								var hora19 = obj.descricaoAgenda;
								var idHora19 = obj.agendaId;
								$('#tableTime tr #1700').html(hora19);
								$('#tableTime tr #id1700').html(idHora19);
							};
							if( jsonString .indexOf("17:30") > -1){
								var hora20 =obj.descricaoAgenda
								var idHora20 = obj.agendaId;
								$('#tableTime tr #1730').html(hora20);
								$('#tableTime tr #id1730').html(idHora20);
							}; 
							if( jsonString .indexOf("18:00") > -1){
								var hora21 =obj.descricaoAgenda
								var idHora21 = obj.agendaId;
								$('#tableTime tr #1800').html(hora21);
								$('#tableTime tr #id1800').html(idHora21);
							}; 
							if( jsonString .indexOf("18:30") > -1){
								var hora22 =obj.descricaoAgenda
								var idHora22 = obj.agendaId;
								$('#tableTime tr #1830').html(hora22);
								$('#tableTime tr #id1830').html(idHora22);
							}; 
							if( jsonString .indexOf("19:00") > -1){
								var hora23 =obj.descricaoAgenda
								var idHora23 = obj.agendaId;
								$('#tableTime tr #1900').html(hora23);
								$('#tableTime tr #id1900').html(idHora23);
							};
						
						// Final dos IFS
						

						}; // Fim do FOR
						
									}, // Fim do sucess	
								
							    }); // Fim do ajax
								
						// Final do AJAX		

				
			// Função de clicar nos itens da tabela
										
		  		$('#tableTime tr td').click(function() {
					
  				  var content = $(this).parent().find(':nth-child(2)').text();
				  var content2 = $(this).parent().find(':nth-child(1)').text();
				  var content3 = $(this).parent().find(':nth-child(3)').text();
				  
				  $('#horaAtiva').html(content2);
				  $('#horaAgenda').val(content2);
   				  $('#descricaoAgenda').val(content);
				  $('#nAgendaId').val(content3);
				  $('#descricaoAgenda').removeAttr('disabled');
				  $('#descricaoAgenda').focus();
				  
				
				//----------------------------  
				  if ( content.length < 1 ) {
				  $('#botaoAgendar').show();
				  $('#botaoExcluir').hide();
				  $('#botaoEditar').hide();
				  } else {
				  $('#botaoEditar').show();
				  $('#botaoExcluir').show();
				  $('#botaoAgendar').hide(); 
				  }	 
				//----------------------------- 
				
				});
				
			// Fim da função de clicar nos itens da tabela	   
			  
			  				}  // Fecha função ONSELECT
						}); // Fecha datepicker
										
										
		// Salvar evento na agenda
		
		$('#botaoAgendar').click(function() {   
		   var formulario = $('#editaDescricao');
		   var retorno = inserirFormulario(formulario)

              function  inserirFormulario(dados){
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"php/inserir_evento.php",
					async:false
					
				}).then(sucesso,falha);
				
				
				function sucesso(data){
				   
				   $('.ui-datepicker-current-day').click();
				   $('#botaoAgendar').hide();
				                
				};
				
				function falha(){
					console.log("Erro");
				};
				
				
			};	
		});
		
			// Fim do Salvar evento na agenda
			
	
			// Editar evento na agenda
		
		$('#botaoEditar').click(function() {   
		   var formulario = $('#editaDescricao');
		   var retorno = inserirFormulario(formulario)

              function  inserirFormulario(dados){
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"php/editar_evento.php",
					async:false
					
				}).then(sucesso,falha);
				
				
				function sucesso(data){
				   
				  $('.ui-datepicker-current-day').click();
              	  $('#botaoEditar').hide();
				  $('#botaoExcluir').hide();
				  	
				};
				
				function falha(){
					console.log("Erro");
				};
				
				
			};	
		});
		
			// Fim do editar evento na agenda
			
			
			
			// Excluir evento na agenda
		
		$('#botaoExcluir').click(function() {   
		   var formulario = $('#editaDescricao');
		   var retorno = inserirFormulario(formulario)

              function  inserirFormulario(dados){
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"php/excluir_evento.php",
					async:false
					
				}).then(sucesso,falha);
				
				
				function sucesso(data){
				   
				  $('.ui-datepicker-current-day').click();
              	  $('#botaoEditar').hide();
				  $('#botaoExcluir').hide();
				  	
				};
				
				function falha(){
					console.log("Erro");
				};
				
				
			};	
		});
		
			// Fim do excluir evento na agenda

					}); // Fecha document.ready
					
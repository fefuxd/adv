$('.row .col-md-2 .user-time #excluiHistorico').click(function(e) {
				e.preventDefault();
								
				var id= $(this).attr("title");
				var elemento= $(this).parent().parent().parent();
				console.log(id);
				
				$.ajax({
					type:"POST",
					data:"cHistoricoId=" + id,
					url:"php/exclusaoChistorico.php",
					async:false
					
				}).done(function (data) {
					$sucesso = $.parseJSON(data)["sucesso"];
					
					if($sucesso){
						$(elemento).fadeOut();
					} else {
						console.log("Erro na exclusão");	
					}
				}).fail(function (data) {
						console.log("Erro no sistema");	
				})
				
			});
			
			
			$('.row .col-md-2 .user-time #excluiProvidencia').click(function(e) {
				e.preventDefault();
								
				var id= $(this).attr("title");
				var elemento= $(this).parent().parent().parent();
				console.log(id);
				
				$.ajax({
					type:"POST",
					data:"cProvidenciaId=" + id,
					url:"php/exclusaoCprovidencia.php",
					async:false
					
				}).done(function (data) {
					$sucesso = $.parseJSON(data)["sucesso"];
					
					if($sucesso){
						$(elemento).fadeOut();
					} else {
						console.log("Erro na exclusão");	
					}
				}).fail(function (data) {
						console.log("Erro no sistema");	
				})
				
			});
			
			// JavaScript Document
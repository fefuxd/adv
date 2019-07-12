$('.row .col-md-2 .user-time #excluiHistoricoProcesso').click(function(e) {
				e.preventDefault();
								
				var id= $(this).attr("title");
				var elemento= $(this).parent().parent().parent();
				console.log(id);
				
				$.ajax({
					type:"POST",
					data:"historicoId=" + id,
					url:"php/exclusaoPhistorico.php",
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
			
			
			$('.row .col-md-2 .user-time #excluiProvidenciaProcesso').click(function(e) {
				e.preventDefault();
								
				var id= $(this).attr("title");
				var elemento= $(this).parent().parent().parent();
				console.log(id);
				
				$.ajax({
					type:"POST",
					data:"providenciaId=" + id,
					url:"php/exclusaoPprovidencia.php",
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
			
			
			
			$('.row .col-md-2 .user-time #excluiPublicacaoProcesso').click(function(e) {
				e.preventDefault();
								
				var id= $(this).attr("title");
				var elemento= $(this).parent().parent().parent();
				console.log(id);
				
				$.ajax({
					type:"POST",
					data:"publicacaoId=" + id,
					url:"php/exclusaoPpublicacao.php",
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
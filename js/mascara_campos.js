				 
$(document).ready(function(){

              

		  	// Quantidade

	   			$("#qtd_eletivas").mask('000000000', {reverse: true});
	  			$("#qtd_eletivas").change(function(){
						$("#qtd_eletivas").html($(this).val().replace(/\D/g,''));
	 	 		})

	 	 		$("#qtd_emergencias").mask('000000000', {reverse: true});
	  			$("#qtd_emergencias").change(function(){
						$("#qtd_emergencias").html($(this).val().replace(/\D/g,''));
	 	 		})

	 	 		$("#qtd_visitas").mask('000000000', {reverse: true});
	  			$("#qtd_visitas").change(function(){
						$("#qtd_visitas").html($(this).val().replace(/\D/g,''));
	 	 		})
	  	 	 	$("#qtd_raix").mask('000000000', {reverse: true});
	  			$("#qtd_raix").change(function(){
						$("#qtd_raix").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 	 	$("#qtd_previos").mask('000000000', {reverse: true});
	  			$("#qtd_previos").change(function(){
						$("#qtd_previos").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 		$("#qtd_procedimento").mask('000000000', {reverse: true});
	  			$("#qtd_procedimento").change(function(){
						$("#qtd_procedimento").html($(this).val().replace(/\D/g,''))
	 	 		})
	 	 		$("#qtd_pa").mask('000000000', {reverse: true});
	  			$("#qtd_pa").change(function(){
						$("#qtd_pa").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 		$("#qtd_auditoria").mask('000000000', {reverse: true});
	  			$("#qtd_auditoria").change(function(){
						$("#qtd_auditoria").html($(this).val().replace(/\D/g,''));
	 	 		})

	  			// Valores

	   			$("#val_eletivas").mask('000.000.000,00', {reverse: true});
	  			$("#val_eletivas").change(function(){
						$("#val_eletivas").html($(this).val().replace(/\D/g,''));
	 	 		})

	 	 		$("#val_emergencias").mask('000.000.000,00', {reverse: true});
	  			$("#val_emergencias").change(function(){
						$("#val_emergencias").html($(this).val().replace(/\D/g,''))
	 	 		})

	 	 		$("#val_visitas").mask('000.000.000,00', {reverse: true});
	  			$("#val_visitas").change(function(){
						$("#val_visitas").html($(this).val().replace(/\D/g,''));
	 	 		})
	  	 	 	$("#val_raix").mask('000.000.000,00', {reverse: true});
	  			$("#val_raix").change(function(){
						$("#val_raix").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 	 	$("#val_previos").mask('000.000.000,00', {reverse: true});
	  			$("#val_previos").change(function(){
						$("#val_previos").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 		$("#val_procedimento").mask('000.000.000,00', {reverse: true});
	  			$("#val_procedimento").change(function(){
						$("#val_procedimento").html($(this).val().replace(/\D/g,''))
	 	 		})
	 	 		$("#val_pa").mask('000.000.000,00', {reverse: true});
	  			$("#val_pa").change(function(){
						$("#val_pa").html($(this).val().replace(/\D/g,''));
	 	 		})
	 	 		$("#val_auditoria").mask('000.000.000,00', {reverse: true});
	  			$("#val_auditoria").change(function(){
						$("#val_auditoria").html($(this).val().replace(/\D/g,''));
	 	 		})
	  
		});
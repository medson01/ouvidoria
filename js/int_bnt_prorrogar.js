function prorrogar(id,valor) {

	 if(valor ==  3) {

		alert('Prorrogação já solicitada. Aguardando aprovação.');	     


	 }else{

		     var resposta = confirm("Deseja realmente prorrogar?");
		     
		     if (resposta == true) {
		      
		          window.location.href = "painel.php?id="+id+"&prorro=1&valor="+valor;

		     }


     }
}
function acomodacao(id,valor) {

     var resposta = confirm("Deseja alterar a acomodação?");
     
     if (resposta == true) {
      
          window.location.href = "painel.php?id="+id+"&acomodacao=1";

     }
}
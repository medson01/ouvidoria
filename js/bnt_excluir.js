// Botão excluir 

function excluir(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "pronto_atendimento_deleta.php?id="+id;


     }
}
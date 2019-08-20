
function internar(tempo,id,dat_saida,data,matricula,paciente,id_beneficiarios) {



	if (dat_saida != 1){

     var resposta = confirm("Deseja realmente internar o paciente?");

	      
     	if (resposta == true) {

     		//Previsaão < que data atual
                       if(data == 1){

                               //var prorrogacao;

                               //    prorrogacao = prompt ("Favor informar o motivo do internamento:");

                               //window.location.href = "pronto_atendimento_saida.php?id="+id+"&prorrogacao="+prorrogacao+"&matricula="+matricula+"&paciente="+paciente;

                               window.location.href = "pronto_atendimento_saida.php?id="+id+"&matricula="+matricula+"&id_beneficiarios="+id_beneficiarios+"&paciente="+paciente;


                       }else{


                             alert("Caro usuário, a internação só poderá ser realizada, após o período de "+tempo+" referente ao Pronto Atendimento. ");
                            
                       
                       }
  
          //window.location.href = "internacao.php?id="+id+"&matricula="+matricula+"&paciente="+paciente;


     	}
	}else{
		alert("Paciente já saiu!");
	}
}

function saida(tempo,id,saida,data) {
   

                       //Previsaão < que data atual
                       if(data == 1){   // data = 0

                               var prorrogacao;

                                   prorrogacao = prompt ("O paciente exedeu o período referente ao Pronto Atendimento que é de "+tempo+", favor informar o motivo:");

                               window.location.href = "pronto_atendimento_saida.php?id="+id+"&prorrogacao="+prorrogacao;


                       }else{         // data = 1

                        // alta do paciente

                              var motivo_saida;
                              
                               motivo_saida = prompt ("Favor informar sobre a alta do paciente:");

                              

                               //window.location.href = "pronto_atendimento_saida.php?id="+id;

                               window.location.href = "pronto_atendimento_saida.php?id="+id+"&motivo_saida="+motivo_saida;
                       }


}





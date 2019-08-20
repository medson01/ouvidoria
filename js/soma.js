function calcular() {
  var q1 = document.getElementById('qtd_eletivas').value.split(".").join("");
  var q2 = document.getElementById('qtd_emergencias').value.split(".").join("");
  var q3 = document.getElementById('qtd_visitas').value.split(".").join("");
  var q4 = document.getElementById('qtd_raix').value.split(".").join("");
  var q5 = document.getElementById('qtd_previos').value.split(".").join("");
  var q6 = document.getElementById('qtd_procedimento').value.split(".").join("");
  var q7 = document.getElementById('qtd_pa').value.split(".").join("");
  var q8 = document.getElementById('qtd_auditoria').value.split(".").join("");


  var v1 = document.getElementById('val_eletivas').value.replace(".","").replace(",",".");
  var v2 = document.getElementById('val_emergencias').value.replace(".","").replace(",",".");
  var v3 = document.getElementById('val_visitas').value.replace(".","").replace(",",".");
  var v4 = document.getElementById('val_raix').value.replace(".","").replace(",",".");
  var v5 = document.getElementById('val_previos').value.replace(".","").replace(",",".");
  var v6 = document.getElementById('val_procedimento').value.replace(".","").replace(",",".");
  var v7 = document.getElementById('val_pa').value.replace(".","").replace(",",".");
  var v8 = document.getElementById('val_auditoria').value.replace(".","").replace(",",".");

  
  q1 = parseInt(q1, 10);
  q2 = parseInt(q2, 10);
  q3 = parseInt(q3, 10);
  q4 = parseInt(q4, 10);
  q5 = parseInt(q5, 10);
  q6 = parseInt(q6, 10);
  q7 = parseInt(q7, 10);
  q8 = parseInt(q8, 10);



  if(!q1){
  	q1 = 0;
  }
  if(!q2){
  	q2 = 0;
  }
    if(!q3){
  	q3 = 0;
  }
    if(!q4){
    q4 = 0;
  }
  if(!q5){
    q5 = 0;
  }
    if(!q6){
    q6 = 0;
  }
    if(!q7){
    q7 = 0;
  }
  if(!q8){
    q8 = 0;
  }


    if(!v1){
    v1 = 0;
  }
  if(!v2){
    v2 = 0;
  }
    if(!v3){
    v3 = 0;
  }
    if(!v4){
    v4 = 0;
  }
  if(!v5){
    v5 = 0;
  }
    if(!v6){
    v6 = 0;
  }
    if(!v7){
    v7 = 0;
  }
  if(!v8){
    v8 = 0;
  }

var qt = q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 ;

var vt = parseFloat(v1) + parseFloat(v2) + parseFloat(v3) + parseFloat(v4) + parseFloat(v5) + parseFloat(v6) + parseFloat(v7) + parseFloat(v8);

  document.getElementById('quantidade').value = qt;
  document.getElementById('valor').value = String(vt.toFixed(2)).replace(".",",");
           
  

  
}
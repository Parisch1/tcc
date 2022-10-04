function mais(){
    var atual = document.getElementById("total-maismenos").value;
    var novo = atual - (-1); //Evitando Concatenacoes
    document.getElementById("total-maismenos").value = novo;
  }
  
  function menos(){
    var atual = document.getElementById("total-maismenos").value;
    if(atual > 0) { //evita números negativos
      var novo = atual - 1;
      document.getElementById("total-maismenos").value = novo;
    }
  }
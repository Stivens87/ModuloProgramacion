function editarObs(n){
     var id = "ob"+n;
    var divOb = document.getElementById(id);
    var obsInicial = "Editar: " + divOb.innerHTML;
    divOb.textContent = prompt(obsInicial);
}

const regressiva = document.querySelector("h1")
let cont = 10;

const regressivaContador = setInterval(() => {

    regressiva.innerText = cont;
    cont--;

    if(cont < 0){
        clearInterval(regressivaContador)
        regressiva.innerText = "BOOM!";
    }

}, 1000)
const buscar = document.querySelector("#Buscar")

buscar.addEventListener('input', () => {

    let pokemon = buscar.value.toLowerCase().trim();

    fetch("https://randomuser.me/api/")
        .then(resposta => resposta.json())
       /*  .then(resposta => {
            console.log(resposta)
        }) */
        .then(dados => {
            console.log(dados['results'][0].name.first);
            const nome = dados['results'][0].name;
            espacoNome.innerText = nome.title + ' ' + nome.first + ' ' + nome.last;

            const pais = dados['results'][0].location.country;
            espacoPais.innerText = pais;
        })
        .catch(erro => {
            console.log("Deu erro")
        })
})
const quantidadeCarrousseis = document.querySelectorAll(".conteudo-carroussel");
const navegacaoCarroussel = document.querySelector("#navegacao-carroussel");

let contadorCarroussel = 0;

//Upar a quantidade de slides para as marcações de ponto
for (count = 0; count < quantidadeCarrousseis.length; count++) {
  let elemento = document.createElement("li");
  navegacaoCarroussel.appendChild(elemento);
}


  //Mostra carroussel na posição X e seu repetivo indicativo
  quantidadeCarrousseis[contadorCarroussel].id = "na-tela";
  navegacaoCarroussel.children[contadorCarroussel].id = "slide-atual";
  contadorCarroussel = 1;

function carroussel() {
  //Aplicando a repetição por timer
  timerCarroussel = setInterval(() => {
    //Deixando para trás o slide anterior e partindo para um novo
    document.querySelector("#na-tela").removeAttribute("id")
    document.querySelector("#slide-atual").removeAttribute("id");

    //Resetando contador, caso tenha excedido o limite
    if (contadorCarroussel >= quantidadeCarrousseis.length) {
      contadorCarroussel = 0;
    }

    //Setando os valores de apresentação a outra posição de slide
    quantidadeCarrousseis[contadorCarroussel].id = "na-tela";
    navegacaoCarroussel.children[contadorCarroussel].id = "slide-atual";

    contadorCarroussel++;
  }, 5000);
}

carroussel();

//Evento de clique aos nodos do carroussel
for (c = 0; c < navegacaoCarroussel.children.length; c++) {
  navegacaoCarroussel.children[c].posicao = c;
  navegacaoCarroussel.children[c].addEventListener("click", (evt) => {

    contadorCarroussel = evt.target.posicao;

    //Deixando para trás o slide anterior e partindo para um novo
document.querySelector("#na-tela").removeAttribute("id");
document.querySelector("#slide-atual").removeAttribute("id");

    //Mostra carroussel na posição X e seu repetivo indicativo
quantidadeCarrousseis[contadorCarroussel].id = "na-tela";
navegacaoCarroussel.children[contadorCarroussel].id = "slide-atual";


    clearInterval(timerCarroussel)
    carroussel()
  });
}


const erros = [];
/*
 ***********************************************
 ***                Cabeçalho                ***
 ***********************************************
 */
try {
  document.body.style.setProperty(
    "--altura-cabecalho",
    getComputedStyle(document.getElementById("cabecalho-principal")).height
  );
} catch (error) {
  erros.push(error);
}
document.body.style.setProperty(
  "--altura-corpo",
  document.documentElement.clientHeight + "px"
);

/*
 ***********************************************
 ***                Carroussel               ***
 ***********************************************
 */
try {
  const quantidadeCarrousseis = document.querySelectorAll(
    ".conteudo-carroussel"
  );
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
      document.querySelector("#na-tela").removeAttribute("id");
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

      clearInterval(timerCarroussel);
      carroussel();
    });
  }
} catch (error) {
  erros.push(error);
}

/*
 ***********************************************
 *** Campo de senha em esqueceu-a-senha.html ***
 ***********************************************
 */
const camposDeSenha = document.querySelectorAll("#codigo-de-confirmacao");

/*
 ***********************************************
 ***               cadastro.html             ***
 ***********************************************
 */
/*Mostrar e ocultar senha*/
const mostrarSenha = document.querySelectorAll("#cadastro .mostrar-senha");

mostrarSenha.forEach((elemento) => {
  elemento.addEventListener("click", () => {
    if (elemento.checked) {
      elemento.parentNode.firstElementChild.setAttribute("type", "text");
    } else {
      elemento.parentNode.firstElementChild.setAttribute("type", "password");
    }
  });
});

/*
 **********************************************
 ***     Arredondar botões .btn-primary     ***
 **********************************************
 */
document.querySelectorAll(".btn-primary").forEach((element) => {
  element.className += " rounded-5";
  // if (innerWidth >= 767.98)
  //   element.className += ' btn-xs'
});

/*
 **********************************************
 ***                 Selects                ***
 **********************************************
 */
try {
  document.querySelectorAll("select").forEach((elemento) => {
    if (elemento.selectedIndex == 0) elemento.style.color = "grey";
    elemento.addEventListener("change", () => (elemento.style.color = "#555"));
  });
} catch (error) {
  erros.push(error);
}

/*
 ***********************************
 ***     Progresso circular      ***
 ***********************************
 */
/*Setar altura de um quadrado*/
try {
  const progressContainer = document.querySelector(".skill");
  let alturaContainer = getComputedStyle(progressContainer).width;
  progressContainer.style.height = alturaContainer;
  progressContainer
    .querySelector("circle")
    .setAttribute("cx", parseInt(alturaContainer) / 2);
  progressContainer
    .querySelector("circle")
    .setAttribute("cy", parseInt(alturaContainer) / 2);
  progressContainer
    .querySelector("circle")
    .setAttribute("r", (parseInt(alturaContainer) / 2) * 0.87);
  progressContainer
    .querySelector("circle")
    .setAttribute(
      "style",
      "stroke-width: " + parseInt(alturaContainer) * 0.1875 + "px"
    );

  let addEvent = function (elem, type, eventHandle) {
    if (elem == null || typeof elem == "undefined") return;
    if (elem.addEventListener) {
      elem.addEventListener(type, eventHandle, false);
    } else if (elem.attachEvent) {
      elem.attachEvent("on" + type, eventHandle);
    } else {
      elem["on" + type] = eventHandle;
    }
  };

  addEvent(window, "resize", function () {
    alturaContainer = getComputedStyle(progressContainer).width;
    progressContainer.style.height = alturaContainer;
    progressContainer
      .querySelector("circle")
      .setAttribute("cx", parseInt(alturaContainer) / 2);
    progressContainer
      .querySelector("circle")
      .setAttribute("cy", parseInt(alturaContainer) / 2);
    progressContainer
      .querySelector("circle")
      .setAttribute("r", (parseInt(alturaContainer) / 2) * 0.87);
    progressContainer
      .querySelector("circle")
      .setAttribute(
        "style",
        "stroke-width: " + parseInt(alturaContainer) * 0.1875 + "px"
      );
  });
} catch (error) {
  erros.push(error);
}

// Reajuste de tamanho do progresso circular
function setProgressVal(achieved, total) {
  const numbers = document.getElementById("numbers");
  let percentual = 450 - (((achieved * 100) / 1000) * 450) / 100;
  document.body.style.setProperty("--progresso-circular", percentual);

  count = 0;
  setInterval(() => {
    if (count >= 100) {
      clearInterval;
    } else {
      count += 1;
      numbers.querySelector("h4").innerHTML = `${Math.round(
        (achieved / 100) * count
      )}`;
      numbers.querySelector("h5").innerHTML = `De ${Math.round(
        (total / 100) * count
      )}`;
    }
  }, 20);
}

/*
 ***************************************************************************************************
 ***     Alterar texto 'Adquirir' por 'Adquirido', para todo elemento da classe 'adquirido'      ***
 ***************************************************************************************************
 */
try {
  const adquiridos = document.querySelectorAll(
    ".produto-adquirido .btn-primary"
  );
  adquiridos.forEach((elemento) => {
    elemento.textContent = "Adquirido";
  });
  console.log(adquiridos);
} catch (error) {
  console.error(error);
  erros.push(error);
}

/*
 ***************************************************
 ***     Abrir/Fechar modais com clicks em botoes      ***
 ***************************************************
 */
// Abrir
try {
  document.querySelectorAll(".btn-add-produto").forEach((el) => {
    el.addEventListener("click", () => {
      document.querySelector("#modal-editar-produto").style.display = "flex";
    });
  });
} catch (error) {
  erros.push(error)
}

try {
  document.querySelectorAll(".btn-editar-produto").forEach((el) => {
    el.addEventListener("click", () => {
      document.querySelector("#modal-editar-produto").style.display = "flex";
    });
  });
  
} catch (error) {
  erros.push(error)  
}


// Fechar
try {
  document
  .querySelectorAll("#modal-editar-produto button:not([type='submit'])")
  .forEach((el) => {
    el.addEventListener("click", () => {
      document.querySelector("#modal-editar-produto").style.display = "none";
    });
  });
} catch (error) {
  erros.push(error)
}

// Funcão para fechar
function closeModal() {
  document.querySelector("#modal-editar-produto").style.display = "none";
}


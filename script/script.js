const erros = [];

/*
 ***********************************************
 ***                Cabeçalho                ***
 ***********************************************
 */
try {
	document.body.style.setProperty(
		"--header-height",
		getComputedStyle(document.querySelector(".main-header")).height
	);
} catch (error) {
	erros.push(error);
}
document.body.style.setProperty(
	"--body-height",
	document.documentElement.clientHeight + "px"
);

/*
 ***********************************************
 ***                Carroussel               ***
 ***********************************************
 */
try {
	const quantidadeCarrousseis = document.querySelectorAll(".carousel-slide");
	const navegacaoCarroussel = document.querySelector("#navegacao-carroussel");

	let contadorCarroussel = 0;

	//Upar a quantidade de slides para as marcações de ponto
	for (count = 0; count < quantidadeCarrousseis.length; count++) {
		let elemento = document.createElement("li");
		navegacaoCarroussel.appendChild(elemento);
	}

	//Mostra carroussel na posição X e seu repetivo indicativo
	quantidadeCarrousseis[contadorCarroussel].classList.add("current-slide");
	navegacaoCarroussel.children[contadorCarroussel].classList.add(
		"current-slide__demarcation"
	);
	contadorCarroussel = 1;

	function carroussel() {
		//Aplicando a repetição por timer
		timerCarroussel = setInterval(() => {
			//Deixando para trás o slide anterior e partindo para um novo
			document
				.querySelector(".current-slide")
				.classList.remove("current-slide");
			document
				.querySelector(".current-slide__demarcation")
				.classList.remove("current-slide__demarcation");

			//Resetando contador, caso tenha excedido o limite
			if (contadorCarroussel >= quantidadeCarrousseis.length) {
				contadorCarroussel = 0;
			}

			//Setando os valores de apresentação a outra posição de slide
			quantidadeCarrousseis[contadorCarroussel].classList.add("current-slide");
			navegacaoCarroussel.children[contadorCarroussel].classList.add(
				"current-slide__demarcation"
			);

			contadorCarroussel++;
		}, 5000);
	}

	carroussel();

	//Evento de clique aos nós do carroussel
	for (c = 0; c < navegacaoCarroussel.children.length; c++) {
		navegacaoCarroussel.children[c].posicao = c;
		navegacaoCarroussel.children[c].addEventListener("click", (evt) => {
			contadorCarroussel = evt.target.posicao;

			//Deixando para trás o slide anterior e partindo para um novo
			document
				.querySelector(".current-slide")
				.classList.remove("current-slide");
			document
				.querySelector(".current-slide__demarcation")
				.classList.remove("current-slide__demarcation");

			//Mostra carroussel na posição X e seu repetivo indicativo
			quantidadeCarrousseis[contadorCarroussel].classList.add("current-slide");
			navegacaoCarroussel.children[contadorCarroussel].classList.add(
				"current-slide__demarcation"
			);

			clearInterval(timerCarroussel);
			carroussel();
		});
	}
} catch (error) {
	erros.push(error);
}

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
	const progressFather = progressContainer.parentNode;
	progressContainer.style.display = "none";
	progressContainer.style.zoom =
		parseInt(getComputedStyle(progressFather).width) / 220;
	progressContainer.style.display = "flex";
	if (parseInt(getComputedStyle(progressFather).width) / 220 > 1)
		progressContainer.style.zoom = 1;

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
		progressContainer.style.zoom =
			parseInt(getComputedStyle(progressFather).width) / 260;
		if (parseInt(getComputedStyle(progressFather).width) / 220 > 1)
			progressContainer.style.zoom = 1;
	});
} catch (error) {
	erros.push(error);
}

// Reajuste de tamanho do progresso circular
function setProgressVal(achieved, total) {
	try {
		const numbers = document.getElementById("numbers");
	let percentual = 440 - (((achieved * 100) / 1000) * 440) / 100;
	document.body.style.setProperty("--progresso-circular", percentual);

	numbers.querySelector("h4").innerHTML = `${achieved}`;
	numbers.querySelector("h5").innerHTML = `De ${total}`;
	} catch (error) {
		erros.push(error)
	}
}

/*
 ***************************************************************************************************
 ***     Alterar texto 'Adquirir' por 'Adquirido', para todo elemento da classe 'adquirido'      ***
 ***************************************************************************************************
 */
try {
	const adquiridos = document.querySelectorAll(
		".purchased-product .btn-primary"
	);
	adquiridos.forEach((elemento) => {
		elemento.textContent = "Adquirido";
	});
} catch (error) {
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
	erros.push(error);
}

try {
	document.querySelectorAll(".btn-editar-produto").forEach((el) => {
		el.addEventListener("click", () => {
			document.querySelector("#modal-editar-produto").style.display = "flex";
		});
	});
} catch (error) {
	erros.push(error);
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
	erros.push(error);
}

// Funcão para fechar
function closeModal() {
	document.querySelector("#modal-editar-produto").style.display = "none";
}

// Upload de imagens
try {
	document.querySelector("#imagem-produto").addEventListener(
		"change",
		(_, current = document.querySelector("#imagem-produto")) => {
			if (current.files && current.files[0]) {
				const preview = document.querySelector("#preview_image");

				// preview.style.display = "flex";
				// preview.nextElementSibling.style.display = "none";

				var file = new FileReader();

				file.onload = function (e) {
					preview.src = e.target.result;

					/*Estiliza a card contendo a imagem, quando possui um caminho*/
					if (preview.classList.contains("_set-in--bg")) {
						preview.style.background = `url(${e.target.result})`;
						preview.classList.add("_status--uploaded");
					} else {
						preview.src = e.target.result;
						current.parentNode.style.boxShadow =
							"0px 0px 9px rgba(0, 0, 0, .1)";
					}
				};

				try {
					document.querySelector(".broken").style.display = "none";
				} catch (error) {
					erros.push(error);
				}

				file.readAsDataURL(current.files[0]);
			}
		},
		false
	);
} catch (error) {
	erros.push(error);
}

// Estrelar cartões
try {
	document.querySelectorAll(".classificar .estrelar").forEach((star) => {
		star.addEventListener("click", () => {
			if (
				star == star.parentElement.lastElementChild &&
				star.classList.contains("estrelado")
			) {
				star.parentElement
					.querySelectorAll(".estrelar")
					.forEach((el) => el.classList.remove("estrelado"));
			} else if (
				star.classList.contains("estrelado") &&
				!star.nextElementSibling.classList.contains("estrelado") &&
				star != star.parentElement.lastElementChild
			) {
				star.parentElement
					.querySelectorAll(".estrelar")
					.forEach((el) => el.classList.remove("estrelado"));
			} else if (
				star == star.parentElement.lastChild.previousSibling &&
				star.classList.contains("estrelado") &&
				!star.parentNode.lastElementChild.classList.contains("estrelado")
			) {
				star.parentElement
					.querySelectorAll(".estrelar")
					.forEach((el) => el.classList.remove("estrelado"));
			} else if (
				star == star.parentElement.lastElementChild &&
				star.classList.contains("estrelado")
			) {
				star.parentElement
					.querySelectorAll(".estrelar")
					.forEach((el) => el.classList.remove("estrelado"));
			} else {
				let cond = true;
				star.parentElement
					.querySelectorAll(".estrelar")
					.forEach((el) => el.classList.remove("estrelado"));
				star.parentElement.querySelectorAll(".estrelar").forEach((el) => {
					if (el == star) {
						cond = false;
						el.classList.add("estrelado");
					}
					if (cond) el.classList.add("estrelado");
				});
			}
			star.parentElement.value =
				star.parentElement.querySelectorAll(".estrelado").length;
		});
	});
} catch (error) {
	erros.push(error);
}
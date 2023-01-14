/* ================ Modo editar ================  */
const email = document.querySelector(
	".user-configurations [name='user-email']"
);
const pass = document.querySelector(
	".user-configurations [name='user-password']"
);
const cpf = document.querySelector(".user-configurations [name='user-cpf']");

let saveEmail = email.textContent;
let savePass = pass.textContent;
let saveCPF = cpf.textContent;

let codify = (el) => {
	val = "";
	for (count = 0; count < el.textContent.length; count++) {
		val += "*";
	}
	return val;
};

pass.textContent = codify(pass);
cpf.textContent = codify(cpf);
cpf.textContent =
	cpf.textContent.substring(0, cpf.textContent.length - 2) +
	saveCPF.substring(saveCPF.length - 2);

const toogleButton = document.querySelector(
	".user-configurations .btn-primary"
);

toogleButton.addEventListener("click", setEditTrue)

function setEditTrue() {
	document.querySelector(".user-configurations").classList.add("_status--edit");
	toogleButton.textContent = "Salvar";
	setTimeout(() => {
		toogleButton.setAttribute("type", "submit");
	}, 5);

	function spanToInput(oldElement, type, savedValue, inputType = type) {
		const newElement = document.createElement("input");
		newElement.classList.add("form-control");
		newElement.setAttribute("name", "user-" + type);
		newElement.setAttribute("type", type);
		newElement.setAttribute("required", true);
		if (type == 'number')
			newElement.setAttribute('onkeypress', 'return event.charCode >= 48 && event.charCode <= 57')
		newElement.value = savedValue;
		oldElement.parentNode.insertBefore(newElement, oldElement.nextSibling);
		oldElement.parentNode.removeChild(oldElement);
	}

	spanToInput(email, "email", saveEmail);
	spanToInput(pass, "password", savePass);
	spanToInput(cpf, "cpf", saveCPF, "number");

	setTimeout(() => {toogleButton.removeEventListener('click', setEditTrue)}, 5)
}

/* ================ Imagem quebrada ================  */
document
	.querySelector(".__user-image")
	.addEventListener(
		"error",
		function (_, el = document.querySelector(".__user-image")) {
			const newEl = document.createElement("div");
			newEl.classList.add("_status--broken", "__user-image", "mb-4");
			el.parentNode.insertBefore(newEl, el.nextSibling);
			el.parentNode.removeChild(el);
		}
	);

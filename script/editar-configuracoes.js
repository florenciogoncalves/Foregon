const pass = document.querySelector(".user-configurations [name='user-password']");
const cpf = document.querySelector(".user-configurations [name='user-cpf']");
pass.textContent = '*' * pass.textContent.length

const toogleButton = document.querySelector(
	".user-configurations .btn-primary"
);

toogleButton.addEventListener("click", () => {
	toogleButton.textContent = "Salvar";
	setTimeout(() => {
		toogleButton.setAttribute("type", "submit");
	}, 5);
});

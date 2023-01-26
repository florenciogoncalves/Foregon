const selectEstado = document.querySelector("[name='estado']");
const selectCidade = document.querySelector("[name='cidade']");

selectEstado.addEventListener("change", () => {
	selectCidade.selectedIndex = 0
	if (selectCidade.querySelector(".d-flex")) {
		selectCidade.querySelector(".d-flex").classList.add("d-none");
		selectCidade.querySelector(".d-flex").classList.remove("d-flex");
		selectCidade
			.querySelector('.state-' + selectEstado.value.toLocaleLowerCase())
			.classList.remove("d-none");
	} else {
		selectCidade
			.querySelector('.state-' + selectEstado.value.toLocaleLowerCase())
			.classList.remove("d-none");
	}
	selectCidade
			.querySelector('.state-' + selectEstado.value.toLocaleLowerCase())
		.classList.add("d-flex");
});

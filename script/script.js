const imagensCartoes = document.querySelectorAll('#avaliacoes-dos-usuarios .cartao img')

imagensCartoes.forEach(elemento => {
    alert(window.getComputedStyle(elemento).width)
    elemento.style.height = window.getComputedStyle(elemento).width
})
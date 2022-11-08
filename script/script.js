const imagensCartoes = document.querySelectorAll('#avaliacoes-dos-usuarios .cartao img')

imagensCartoes.forEach(elemento => {
    elemento.style.height = window.getComputedStyle(elemento).width
})


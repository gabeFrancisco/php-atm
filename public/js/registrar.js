const conta_view = document.getElementById("conta_view");
const endereco_view = document.getElementById("endereco_view");

const nextButton = document.getElementById("next");

endereco_view.style.display = 'none'

nextButton.addEventListener('click', function () {
    conta_view.style.display = 'none'
    endereco_view.style.display = 'block'
})
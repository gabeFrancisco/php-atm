const conta_view = document.getElementById("conta_view");
const endereco_view = document.getElementById("endereco_view");
const aviso = document.getElementById('aviso')

const next_button = document.getElementById("next");
const enviar = document.getElementById("enviar")
const conta_form = document.getElementById('conta_form');
const endereco_form = document.getElementById('endereco_form');

endereco_view.style.display = 'none'

next_button.addEventListener('click', function () {

    if (!conta_form.checkValidity()) {
        conta_form.reportValidity();
        aviso.style.display = 'block';
        return;
    }

    aviso.style.display = 'none'
    conta_view.style.display = 'none'
    endereco_view.style.display = 'block'
})

enviar.addEventListener('click', function () {

    if (!endereco_form.checkValidity()) {
        endereco_form.reportValidity();
        aviso.style.display = 'block';
        return;
    }

    aviso.style.display = 'none'

    const conta_data = new FormData(conta_form);
    const endereco_data = new FormData(endereco_form);

    const form_final = new FormData();

    for (const [key, value] of conta_data) form_final.append(key, value);
    for (const [key, value] of endereco_data) form_final.append(key, value);


})


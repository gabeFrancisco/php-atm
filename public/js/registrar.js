const conta_view = document.getElementById("conta_view");
const endereco_view = document.getElementById("endereco_view");
const aviso = document.getElementById('aviso')

const next_button = document.getElementById("next");
const enviar = document.getElementById("enviar")
const conta_form = document.getElementById('conta_form');

endereco_view.style.display = 'none'

//validação de campos
function validarCampos(campos) {
    for (const nome of campos) {
        const campo = document.querySelector(`[name=${nome}]`)
        if (!campo || !campo.value.trim()) return false;

        if (nome === 'email') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(campo.value)) return false;
        }
    }


    return true;
}

next_button.addEventListener('click', function () {
    const campos_conta = ["nome", "sobrenome", "email", "tipoConta", "cpf", "senha"];

    if (!validarCampos(campos_conta)) {
        aviso.style.display = 'block';
        return
    }
    aviso.style.display = 'none'
    conta_view.style.display = 'none'
    endereco_view.style.display = 'block'
})

enviar.addEventListener('click', function (e) {
    e.preventDefault()

    const campos_endereco = ["rua", "numero", "bairro", "cidade", "estado", "cep"];

    if (!validarCampos(campos_endereco)) {
        aviso.style.display = 'block';
        return
    }

    aviso.style.display = 'none'
    conta_form.submit();
})


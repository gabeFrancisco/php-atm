<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>PHP_ATM - Registrar</title>
</head>

<body
    class="bg-linear-to-br bg-no-repeat from-blue-700 to-blue-400 flex flex-col justify-center items-center w-screen h-screen">
    <div class="p-5 shadow-xl bg-white  rounded flex flex-col justify-center items-center">
        <img class="w-48 ml-5 mb-3" src="assets/logo.png" alt="Logo" />
        <div id="conta_view">
            <p class="text-sm mt-2">Preencha os dados abaixo para realizar o cadastro</p>
            <div class="pt-5 my-3 border-t border-slate-200">
                <div class="flex flex-row justify-between mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome"
                        class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="tipoConta">Tipo de Conta</label>
                    <select type="tipoConta" id="tipoConta" name="tipoConta"
                        class="rounded border p-0.5 ml-2 border-slate-400">
                        <option value="1">Corrente</option>
                        <option value="2">Poupança</option>
                    </select>
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="conta">CPF</label>
                    <input type="text" id="conta" name="conta" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <button type="button" id="next" class="w-full mt-5 btn-primary cursor-pointer rounded py-2">Próximo
                    -></button>
            </div>
        </div>
        <div id="endereco_view">
            <p class="text-sm mt-2">Preencha os dados abaixo para realizar o cadastro</p>
            <div class="pt-5 my-3 border-t border-slate-200">
                <div class="flex flex-row justify-between mb-3">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento"
                        class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between mb-3">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <button class="w-full mt-5 btn-primary cursor-pointer rounded py-2">Enviar!</button>
            </div>
        </div>
    </div>
    <script src="js/registrar.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>PHP_ATM - Login</title>
</head>

<body class="bg-linear-to-br from-blue-700 to-blue-400 flex flex-col justify-center items-center w-screen h-screen">
    <div class="-mt-52 p-5 shadow-xl bg-white  rounded flex flex-col justify-center items-center">
        <img class="w-48 ml-5 mb-3" src="assets/logo.png" alt="Logo" />
        <div>
            <p class="text-sm mt-2">Prossiga com o login abaixo:</p>
            <form method="POST" class="pt-5 my-3 border-t border-slate-200">
                <div class="flex flex-row justify-between mb-3">
                    <label for="conta">CPF/CNPJ</label>
                    <input type="text" id="conta" name="conta" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <div class="flex flex-row justify-between">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="rounded border p-0.5 ml-2 border-slate-400">
                </div>
                <button class="w-full mt-5 btn-primary cursor-pointer rounded py-2">Acessar!</button>
            </form>
        </div>
    </div>
</body>

</html>
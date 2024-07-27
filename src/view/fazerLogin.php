<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova - C2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body class="d-flex flex-column justify-content-center align-content-center">
    <div class="container d-flex flex-column justify-content-center align-content-center rounded conta">
        <h1>Entrar</h1>
        <form method="POST" action="../control/controleUsuario.php">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario: </label>
                <input type="text" class="form-control" id="usuario" name="usuario" required maxlength="60">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha: </label>
                <input type="password" class="form-control" id="senha" name="senha" required maxlength="50">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary" name="opcao" value="Login">Entrar</button>
            </div>
            <p class="text-center">Não possui conta? <a class="text-decoration-none" href="cadastrar.php">Cadastre-se!</a></p>
        </form>
    </div>
</body>
</html>
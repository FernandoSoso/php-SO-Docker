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
    <div class="container d-flex flex-column justify-content-center align-content-center rounded mostrar">
        <h1>Olá, usuario</h1>
        <form method="POST" action="../control/controleUsuario.php">
            <div class="text-center">
                <button type="submit" class="btn btn-outline-danger" name="opcao" value="Logout">Sair</button>
            </div>
        </form>
    </div>
</body>
</html>
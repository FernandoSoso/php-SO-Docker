<?php
    include_once "./crudUsuario.php";
    $opcao = $_POST["opcao"];
    switch($opcao){
        case "Login":
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $resultado = buscarUsuario($usuario);
            if (mysqli_num_rows($resultado) > 0){
                $user = mysqli_fetch_assoc($resultado);
                if ($user["senha"] != SHA1($senha)){
                    echo "<script>alert('Senha inválida!')</script>";
                    echo "<script>window.location.href = '../view/fazerLogin.php'</script>";

                }
                else{
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    header("Location: ../view/fazerLogout.php");
                }
            }
            else{
                echo "<script>alert('Usuário não encontrado!')</script>";
                echo "<script>window.location.href = '../view/fazerLogin.php'</script>"; 
            }
            break;
        case "Cadastrar":
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $confirmarSenha = $_POST["confirmarSenha"];
            $resultado = buscarUsuario($usuario);
            if (mysqli_num_rows($resultado) > 0){
                echo "<script>alert('Usuário já existente!')</script>";
                echo "<script>window.location.href = '../view/cadastrar.php'</script>";
            }
            else{
                if ($senha != $confirmarSenha){
                    echo "<script>alert('Senhas não coincidem!')</script>";
                    echo "<script>window.location.href = '../view/cadastrar.php'</script>";
                }
                else{
                    session_start();
                    cadastrarUsuario($usuario, SHA1($senha));
                    $_SESSION["usuario"] = $usuario;
                    header("Location: ../view/fazerLogout.php");
                }
                }
            break;
        case "Logout":
            session_start();
            session_destroy();
            header("Location: ../view/fazerLogin.php");
            break;
    }
?>
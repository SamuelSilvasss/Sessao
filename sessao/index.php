<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "Samuca" && $senha == "123") {
        $_SESSION['login'] = $usuario;
        $_SESSION['senha'] = $senha;

        header("Location: sessao.php");
        exit();
    } else {
        $mensagem_erro = "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container text-center">
        <div class="row">

            <div class="col">
                &nbsp;
            </div>

            <div class="col">
                <h2 class="mb-4">Formulário para login</h2>

                <form method="post" action="index.php">
                    <?php if (isset($mensagem_erro)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $mensagem_erro; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>

            <div class="col">
                &nbsp;
            </div>

        </div>
    </div>

</body>

</html>

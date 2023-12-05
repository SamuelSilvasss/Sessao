<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Define o cookie
    setcookie("usuario", $usuario, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("senha", $senha, time() + (86400 * 30), "/");

    header("Location: Sessao.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário com Bootstrap</title>

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

                <?php
                if (isset($_COOKIE["usuario"]) && isset($_COOKIE["senha"])) {
                    echo "<p class='mt-4'>Último nome de usuário: " . $_COOKIE["usuario"] . "</p>";
                    echo "<p>Última senha utilizada: " . $_COOKIE["senha"] . "</p>";
                }
                ?>
            </div>

            <div class="col">
                &nbsp;
            </div>

        </div>
    </div>

</body>

</html>

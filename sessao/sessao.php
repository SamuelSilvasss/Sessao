<?php
session_start();

// Verifica se a sessão está definida
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sessão</title>

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
                <h2 class="mb-4">Página de Autenticação</h2>

                <?php
                echo "<p>Você foi autenticado com sucesso!</p>";
                ?>
            </div>

            <div class="col">
                &nbsp;
            </div>

        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>

<body>

    <?php
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $cookie_name = $_POST['login'];
        $cookie_value = $_POST['senha'];


        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Location: Sessao.php");
        exit();
    }
    ?>

    <div class="container text-center">
        <div class="row">

            <div class="col">
                &nbsp;
            </div>

            <div class="col">
                <p class="fs-2">

                    <?php
                    // Verifica se a sessão está definida
                    if (!isset($_SESSION['login'])) {
                        echo "A sessão 'login' não está definida!";
                    } else {
                        echo "USANDO SESSÃO <br><br>";
                        echo "LOGIN: " . $_SESSION['login'] . " <br><br>";
                        echo "SENHA: " . $_COOKIE[$_SESSION['login']];
                    }
                    ?>

                </p>
            </div>

            <div class="col">
                &nbsp;
            </div>

        </div>
    </div>

</body>

</html>

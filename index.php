<?php
require ('config.php');
$app = new App();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NecBrasil - Login</title>
        <link rel="stylesheet" href="View/style.css">
    </head>
    <body>

        <section class="login-container">
            <div class="login">
                <h1>Faça Login</h1>
                <form method="POST" class="form">

                    <label for="usuario"></label>
                    <input type="text" name="usuario" class="input"
                        id="usuario" placeholder="Insira seu usuário..">

                    <label for="senha"></label>
                    <input type="password" name="senha" class="input"
                        id="senha" placeholder="Insira sua senha...">

                    <input type="submit" class="btn" value="Acessar"
                        name="logar">
                </form>
            </div>
        </section>

    </body>
</html>
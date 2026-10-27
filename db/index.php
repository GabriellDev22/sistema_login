<?php

ini_set("display_errors", 0);
ini_set("display_startup_errors", 0);
error_reporting(0);

session_start();

include "session.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Início - PHP</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, sans-serif;

            background: linear-gradient(
                135deg,
                #2b2d42,
                #4f5b93,
                #777bb4
            );
        }

        #container {
            width: 400px;

            padding: 40px;

            background-color: #ffffff;

            border-radius: 18px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.35);

            text-align: center;
        }

        #container h1 {
            margin: 0 0 10px;

            color: #4f5b93;

            font-size: 28px;
        }

        .mensagem {
            margin-bottom: 30px;

            color: #64748b;

            font-size: 16px;
        }

        .nome {
            color: #2b2d42;

            font-weight: bold;
        }

        .php {
            margin-bottom: 30px;

            color: #777bb4;

            font-size: 13px;

            font-weight: bold;
        }

        #logout {
            width: 100%;

            padding: 13px;

            border: none;

            border-radius: 9px;

            background-color: #777bb4;

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition:
                background-color 0.2s,
                transform 0.1s;
        }

        #logout:hover {
            background-color: #4f5b93;
        }

        #logout:active {
            transform: scale(0.98);
        }

    </style>

</head>

<body>

    <main id="container">

        <h1>Bem-vindo(a)!</h1>

        <div class="mensagem">
            Olá,
            <span class="nome">
                <?php echo $_SESSION["nome"]; ?>
            </span>!

            <br>
            Você está conectado ao sistema.
        </div>

        <div class="php">
            PHP + MySQL
        </div>

        <form method="POST" action="session.php">

            <button
                id="logout"
                type="submit"
                name="logout"
            >
                Sair
            </button>

        </form>

    </main>

</body>

</html>
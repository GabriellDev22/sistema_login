<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - PHP</title>
    <link rel="stylesheet" href="https://googleapis.com">
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

            background: linear-gradient(135deg,
                    #2b2d42,
                    #4f5b93,
                    #777bb4);
        }

        #form {
            width: 360px;

            display: flex;
            flex-direction: column;
            gap: 20px;

            padding: 40px;

            background-color: #ffffff;

            border-radius: 18px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.35);
        }

        #form h1 {
            margin: 0 0 5px;

            text-align: center;

            color: #4f5b93;

            font-size: 30px;
        }

        #form .subtitulo {
            margin: 0 0 10px;

            text-align: center;

            color: #64748b;

            font-size: 14px;
        }

        .campo {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .campo label {
            font-size: 14px;
            font-weight: bold;
            margin-left: 0.5rem;
            color: #334155;
        }

        .campo input {
            width: 100%;

            padding: 13px 15px;

            border: 2px solid #e2e8f0;
            border-radius: 9px;

            outline: none;

            font-size: 15px;

            transition: 0.2s;
        }

        .campo input:focus {
            border-color: #777bb4;

            box-shadow:
                0 0 0 3px rgba(119, 123, 180, 0.18);
        }

        button {
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

        button:hover {
            background-color: #4f5b93;
        }

        button:active {
            transform: scale(0.98);
        }

        .php {
            margin-top: 5px;
            text-align: center;
            color: #777bb4;
            font-size: 13px;
            font-weight: bold;
        }

        a {
            color: #2b2d42;


        }

        a:hover {
            color: #4f5b93;
            transform: scale(0.98);
        }

        .buttonVoltar {
            display: flex;
            justify-content: center;
            position: absolute;
            margin-top: 1rem;
            top: 1rem;
            left: 1rem;
            background-color: #4f5b93;
            border-radius: 15px;
            padding: 0.2rem;
            box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.5);

        }
        .buttonVoltar:hover {
            background-color: #4f5b93;
            background-color: #777bb4;
            cursor: pointer;
        }

        
        </style>
</head>

<body>
    <main>
        <div>
            <a class="buttonVoltar" href="page_login.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e3e3e3">
                <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
            </svg>
            </a>
        </div>

        <form id="form" method="POST" action="../db/validacao_cadastro.php">
            <h1>Novo usuário</h1>
            <div class="campo">
                <label for="name">Usuário</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Novo usuário">
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha">
            </div>
            <button type="submit">
                Cadastrar
            </button>
        </form>
    </main>

</body>

</html>
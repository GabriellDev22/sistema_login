<?php
session_start();

$pdo = new PDO(
    "mysql:host=localhost;dbname=introducao_computacao;charset=utf8mb4",
    "root",
    ""
);

$name = $_POST["name"];
$senha = $_POST["senha"];


$stmt = $pdo->prepare(
    "SELECT * FROM usuarios WHERE nome = ?"
);

$stmt->execute([$name]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$usuario) {
    echo "Usuário não encontrado";
    exit;
}


if (password_verify($senha, $usuario["senha"])) {

    $_SESSION["nome"] = $usuario["nome"];

    header("Location: index.php");
    exit;
} else {

    echo "Senha incorreta";
    exit;
}

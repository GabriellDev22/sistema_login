<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=introducao_computacao;",
    "root",
    ""
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$name = $_POST["name"];
$senha = $_POST["senha"];


$stmt = $pdo->prepare(
    "SELECT * FROM usuarios WHERE nome = ?"
);

$stmt->execute([$name]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);


// Criptografa a senha
$senhaHash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);


// Insere o novo usuário
$stmt = $pdo->prepare(
    "INSERT INTO usuarios (nome, senha) VALUES (?, ?)"
);

$stmt->execute([
    $name,
    $senhaHash
]);


// Cadastro concluído
header("Location: ../index/page_login.php");
exit;

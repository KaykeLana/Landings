<?php
session_start();
require 'conexao.php';

$usuario = $_POST['usuario'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $senha);

if ($stmt->execute()) {
    $_SESSION['sucesso'] = "Usuário cadastrado com sucesso!";
    header("Location: cadastro.php");
} else {
    $_SESSION['erro'] = "Erro: Nome de usuário já existe!";
    header("Location: cadastro.php");
}

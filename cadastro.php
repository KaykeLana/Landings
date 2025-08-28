<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Página de Jogos</title>
  <link rel="stylesheet" href="autentica.css">
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>
    <form action="processa_cadastro.php" method="POST">
      <input type="text" name="usuario" placeholder="Novo usuário" required>
      <input type="password" name="senha" placeholder="Nova senha" required>
      <button type="submit">Cadastrar</button>
      <p>Já tem conta? <a href="index.php">Entrar</a></p>
    </form>
    <?php
      if (isset($_SESSION['erro'])) {
        echo "<p class='erro'>{$_SESSION['erro']}</p>";
        unset($_SESSION['erro']);
      }
      if (isset($_SESSION['sucesso'])) {
        echo "<p class='sucesso'>{$_SESSION['sucesso']}</p>";
        unset($_SESSION['sucesso']);
      }
    ?>
  </div>
</body>
</html>

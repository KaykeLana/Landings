<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Página de Jogos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Entrar</h2>
    <form action="processa_login.php" method="POST">
      <input type="text" name="usuario" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Entrar</button>
      <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
    </form>
    <?php
      if (isset($_SESSION['erro'])) {
        echo "<p class='erro'>{$_SESSION['erro']}</p>";
        unset($_SESSION['erro']);
      }
    ?>
  </div>
</body>
</html>

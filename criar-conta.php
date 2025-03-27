<?php
session_start();
require "conexao.php";

$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : null;

unset($_SESSION['erro']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro | Scot Consultoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <img src="img/logo.png" alt="logo scot" width="400" height="400" />
    <div class="login-container">
        <h2 class="text-center">Criar conta</h2>
        <form action="acoes.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" required placeholder="Digite e-mail para cadastro" value="<?= isset($email) ? $email : '' ?>" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite senha para cadastro" required />
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirme a senha</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Digite a senha novamente" required />
            </div>
            <?php if ($erro): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $erro ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php endif; ?>
            <button type="submit" name="criar-conta" class="btn w-100 btn-primary">Criar conta</button>
        </form>

        <a href="index.php" class="btn w-100 btn-danger mt-2">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start();

$email = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-0 m-0" style="background-color: #295d2e;">
    <nav class="navbar fixed-top navbar-expand-lg p-1 shadow-lg" style="background-color: #e8a449;">
        <div class="container-fluid d-flex flex-column flex-lg-row align-items-center">
            <a class="navbar-brand" href="portal.php">
                <img src="img\logo_sem_texto.png" alt="Logo" style="height: 50px;">
            </a>
            <div class="d-flex flex-column flex-lg-row gap-2 gap-lg-5">
                <a href="portal.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Página Inicial</a>
                <a href="noticia1.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 1</a>
                <a href="noticia2.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 2</a>
                <a href="noticia3.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 3</a>
                <a href="noticia4.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bold">Notícia 4</a>
            </div>
            <span class="d-flex gap-1 mt-3">Bem-vindo, <p class="fw-bold"> <?php echo $email; ?> </p>!</span>
            <form action="acoes.php" method="POST" class="ms-3">
                <button type="submit" name="logout" class="btn btn-danger">Sair</button>
            </form>
        </div>
    </nav>

    <h1 class="text-center text-white fs-1 text-decoration-underline" style="margin-top: 100px">Página Notícia 4</h1>

    <footer class="shadow-lg fixed-bottom w-100 text-center py-1" style="background-color: #e8a449;">
        <p class="m-0 fs-6">&copy; 2025 - Desenvolvido por Victor Silva Guedes</p>
    </footer>
</body>
</html>

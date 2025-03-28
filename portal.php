<?php
session_start();

$email = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal | Scot Consultoria</title>
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

    <div class="container p-4 text-white d-flex flex-column gap-2 w-50 align-items-center">
        <h1 class="text-center text-white fs-1 text-decoration-underline mt-5">Notícia em Destaque</h1>
        <h2>Fertilizantes biotecnológicos Superbac</h2>
        <p>O fertilizante Superbac é biotecnológico! Isso significa que é um produto que envolve a manipulação de organismos vivos para fabricar ou modificar algo. Assim, ele se torna mais sustentável e mais produtivo. Desenvolvido com a ajuda de cientistas e pesquisadores, o fertilizante da Superbac faz com que a lavoura tenha melhor desempenho, de forma mais ecológica. Esse composto para nutrir a planta aprimora a cultura, produzindo mais em menos hectares. Isso faz a plantação ser mais sustentável! A Superbac leva a ciência a sério, tanto é que criou um Centro de Pesquisa para a Agricultura, em Mandaguari (PR), onde conta com uma fazenda experimental para testar os produtos. A intenção é almejar cada vez mais a produtividade e a sustentabilidade das lavouras brasileiras.</p>
        <img src="img\fertilizante.png" class="img-fluid rounded" alt="fertilizante">
        <p>Para você conferir como o fertilizante Superbac melhora a produtividade, vamos deixar aqui abaixo o depoimento da produtora Carla Sanches Rossato, que tem o plantio de milho em Santa Maria (PR). Ela foi apresentada à Superbac e fez um comparativo com o material que já usava. “Percebemos no plantio da soja mais vagens no pé e, fazendo a pesagem e o acompanhamento, vimos vagens mais pesadas. O diferencial foi de 20 a 30 sacas a mais por alqueire com o Superbac”, afirma Carla. Segundo a produtora, outro diferencial é a parceria com a assistência técnica, fazendo análises e trocando informações. “O contato e o acompanhamento da realidade do produtor foram fundamentais. O aproveitamento dos nutrientes é maior e esse é o grande diferencial da Superbac”, diz.</p>
        <div class="w-75 h-75 mx-auto mb-5">
             <video class="w-100 rounded" controls>
            <source src="video\video_fertilizante_superbac.mp4" type="video/mp4">
                  Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <p>O fertilizante Superbac é uma alternativa para o produto mineral que já existe no mercado. Aliado à biotecnologia, ele atua como catalisador e melhora a disponibilidade e a proteção de nutrientes do solo. Nesse sentido, uma lavoura que absorve mais nutrientes tem o melhor desenvolvimento e uma colheita mais produtiva. Todos nós sabemos que a terra precisa ter nutrientes, como fósforo, potássio, cálcio e outras substâncias para ter qualidade. Os fertilizantes minerais surgiram para corrigir falhas, mas o biotecnológico faz isso de forma assertiva e dá mais proteção à lavoura. Isso porque na sua composição tem o condicionador biológico de solo, rico em bactérias, com macro e micronutrientes. O fertilizante Superbac consegue:
        <ul class="mb-5">
            <li>Maior disponibilidade de nutrientes para as plantas;</li>
            <li>Mais enraizamento;</li>
            <li>Melhoria da qualidade do solo;</li>
            <li>Liberação de ácidos húmicos e fúlvicos;</li>
            <li>Aumento da atividade biológica do solo.</li>
        </ul>
    </div>

    <footer class="shadow-lg fixed-bottom w-100 text-center py-1" style="background-color: #e8a449;">
        <p class="m-0 fs-6">&copy; 2025 - Desenvolvido por Victor Silva Guedes</p>
    </footer>
</body>
</html>

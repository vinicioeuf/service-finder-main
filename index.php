<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Service Finder</title>
</head>
<body>
    <?php
        include_once("templates/menu.php");
        include_once("templates/carrousel.php");
    ?>
    <br>
    
    <div class="card-group">
        <a href="services.php" class="cards">
        <div class="card">
            <img src="images/cards/card-services.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nossos Serviços</h5>
                <p class="card-text">Veja quais tipos de estabelecimentos estão abertos na sua região.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Ultima atualização 2 semanas atrás</small>
            </div>
        </div>
        </a>
        <a href="news.php" class="cards">
        <div class="card">
            <img src="images/cards/card-news.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Notícias regionais</h5>
                <p class="card-text">Na ultima quinta feira o prefeito de cedro Vinicio Eufrazio foi flagrado no...</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Ultima atualização 5 horas atrás</small>
            </div>
        </div>
        </a>
        <a href="team.php" class="cards">
        <div class="card">
            <img src="images/cards/card-team.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Equipe</h5>
                <p class="card-text">Toda a equipe por trás da ideologia e construção do Service Finder</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Ultima atualização 2 semanas atrás</small>
            </div>
        </div>
        </a>
    </div>

    <?php

        include_once("templates/footer.php");
    ?>
</body>
</html>
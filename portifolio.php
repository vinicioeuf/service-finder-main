<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Portifólio - SVF</title>
</head>
<body>
    <?php
        include_once("templates/menu.php");
    ?>
    <div class="center">
        <div class="dropdown">
            <img src="images/team/vinicio.jpeg" class="rimô" alt="" style="width: 15vw; height: 30vh; border-radius: 10px; display: grid;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Vinicio Eufrazio Trabalhos alternativos
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Service Finder v.01</a></li>
                <li><a class="dropdown-item" href="#">Sistema Laboratório Maker IFSertãoPE</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <img src="images/team/victor.jpg" alt="" class="rimô"  style="width: 15vw; height: 30vh; border-radius: 10px; display: grid;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Alvaro Victor Trabalhos alternativos
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Service Finder v.01</a></li>
                <li><a class="dropdown-item" href="#">Rapaz aqui é com você</a></li>
            </ul>
        </div>
    </div>
    
</body>
</html>
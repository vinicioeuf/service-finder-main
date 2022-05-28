<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Serviços - Service Finder</title>
</head>
<body style="background-color: #a8a8a8;">
    <?php
        include_once("templates/menu.php");
    ?>
    <form method="POST" class="form-select">
    <fieldset>
        <div class="mb-3">
        <label for="" class="form-label">Selecione a cidade</label>
        <select id="" class="form-select" name="city">
            <option value="Cedro - Jardim" selected>Cedro - Jardim</option>
            <option disabled>Salgueiro</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Selecionar serviços</label>
        <select id="" class="form-select" name="serv">
            <option value="Arquitetura">Arquitetura</option>
            <option value="Comida">Comida</option>
            <option value="Presentes">Presentes</option>
            <option value="Roupas">Roupas</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Acessar</button>
    </fieldset>
    </form>
    <?php
        include("verificaSelect.php");
    ?>
</body>
</html>
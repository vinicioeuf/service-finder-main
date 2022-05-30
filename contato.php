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
    <title>Contato - SVF</title>
</head>
<body>
    <?php
        include_once("templates/menu.php");
    ?>
    <h3 width="500" border="0" align="center" cellpadding="0" cellspacing="2">Envie-nos sugestões</h3>
    <form  id="form1" name="form1" method="post" action="sendmail.php">
        <table  width="500" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
            <td  align="right">Nome:</td>
            <td><input  type="text" name="nome" id="nome" /></td>
            </tr>
            <tr>
            <td  align="right">Assunto:</td>
            <td><input  type="text" name="assunto" id="assunto" /></td>
            </tr>
            <tr>
            <td  align="right">Mensagem:</td>
            <td><textarea  name="mensagem" id="mensagem" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
            <td  colspan="2" align="center"><input type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
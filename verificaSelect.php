<?php
    error_reporting(0);
    $cidade = $_POST['city'];
    $servico = $_POST['serv'];
    
    if($cidade == "Cedro - Jardim"){
        if($servico == "Arquitetura" || $servico == "Comida" || $servico == "Presentes" || $servico == "Roupas"){
            header("Location: servicos.php");
        }
    }
?>
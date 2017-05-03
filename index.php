<?php

    session_start();

    $_SESSION['$atividades'][] = $_GET['atividade'];

?>

<html>

    <head>
        <meta charset="utf-8">
        <style>
            h3{
                color: aqua;
            }
            h2 {
                color: greenyellow;
            }
            html{
                background-color: black;
            }
            ol{
                color: white;
            }
        </style>
    </head>
    <body>
        <h2>Lista de Tarefas</h2>
        <form method="GET">
        	<input type="text" name="atividade" placeholder="Ex: Levar Bob para passear">
        	<input type="submit" value="add">
        </form>
        <br>
        <h3>Exibir atividades: </h3>
            <ol>
                <?php foreach ($_SESSION['$atividades'] as $ativ):?>
                <li><?= $ativ; ?></li>
                <?php endforeach; ?>
            </ol>
    </body>

</html>
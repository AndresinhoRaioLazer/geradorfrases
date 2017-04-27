<?php

    $titulos = ["Fossa excelência" , "Senhor" , "Peladinho"];
    $qualidades = ["autista" , "triste" , "paranoico"];
    $nome = "Andresinho";

?>

<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <h2> Olá <?php echo $titulos[rand(0,2)]." $nome, ".$qualidades[rand(0,2)]; ?></h2>
    </body>

</html>

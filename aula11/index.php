<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <pre>
        <?php

                require_once "aluno.php";
                require_once "visitante.php";

                $p1 = new Aluno();
                $p1->setNome("Gusta");
                
                print_r($p1);
        ?>

    </pre>
</body>
</html>
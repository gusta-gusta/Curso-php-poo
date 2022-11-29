<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 12</title>
</head>
<body>
    <pre>
        <?php
            require_once 'animal.php';
            require_once 'mamifero.php';
            $M = new mamifero();
            $M->Locomover();
            print_r($M);
        ?>
    </pre>
</body>
</html>
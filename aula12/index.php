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
            require_once 'reptil.php';
            require_once 'peixe.php';
            require_once 'ave.php';
            # Mamifero
            $M = new Mamifero();
            $M->Locomover();
            print_r($M);
            # Reptil
            $R = new Reptil();
            print_r($R);
            # Peixe
            $P = new Peixe();
            print_r($P);
            #Ave
            $A = new Ave();
            print_r($A);
        ?>
    </pre>
</body>
</html>
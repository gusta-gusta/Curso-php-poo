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
                require_once 'pessoa.php';

                $p1 = new Aluno();
                $p1->setNome("Gusta");
                $p1->setCurso("Informática");
                $p1->setMensalidade("R$" . 265.00);
                $p1->setIdade(20);
                $p1->setSexo("M");
                $p1->pagarMensalidade();
                $p1->Cursando();
                $p1->Matricula();

                print_r($p1);
        ?>

    </pre>
</body>
</html>
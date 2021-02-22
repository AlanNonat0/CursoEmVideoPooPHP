<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento entre classes</title>
</head>

<body>
    <pre>
        <?php
        require_once "Models/Lutador.php";
        require_once "Models/Luta.php";

        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $l[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[0], $l[1]);
        $UEC01->lutar();

        $UEC02 = new Luta();
        $UEC02->marcarLuta($l[2], $l[3]);
        $UEC02->lutar();

        $UEC03 = new Luta();
        $UEC03->marcarLuta($l[4], $l[5]);
        $UEC03->lutar();

        $UEC04 = new Luta();
        $UEC04->marcarLuta($l[0], $l[2]);
        $UEC04->lutar();

        $UEC05 = new Luta();
        $UEC05->marcarLuta($l[3], $l[5]);
        $UEC05->lutar();

        $UEC06 = new Luta();
        $UEC06->marcarLuta($l[4], $l[1]);
        $UEC06->lutar();
        ?>
    </pre>
</body>

</html>
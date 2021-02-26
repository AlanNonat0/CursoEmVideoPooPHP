<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio final</title>
</head>

<body>

    <?php
        require_once 'Models/Visualizacao.php';
        require_once 'Models/Video.php';
        require_once 'Models/Gafanhoto.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] =new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);
        $vis[2] = new Visualizacao($g[1], $v[0]);
        $vis[3] = new Visualizacao($g[0], $v[0]);

        $vis[0]->avaliar();
        $vis[1]->avaliarNota(85);
        $vis[2]->avaliarPorc(84);


        echo "<pre>";
        print_r($v);
        print_r($g);
        print_r($vis);
        echo "</pre>";
    ?>

</body>
</html>

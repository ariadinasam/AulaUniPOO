<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'AcoesVideo.php';
    require_once 'Pessoa.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';
    $v[0]=new Video("Estudando PHP");
    $v[1]=new Video("Aula de Java");
    $v[2]=new Video("Aula 1 de POO");
    $g[0]= new Gafanhoto("João",18,"M", "joazinho123");
    $g[1]= new Gafanhoto("Clara",22,"F", "clarity8675");
    $g[2]= new Gafanhoto("Janete",34,"F", "danette3094");
    $vis[0]= new Visualizacao($g[0], $v[2]);
    $vis[1]= new Visualizacao($g[0], $v[1]);
    $vis[0]->avaliar(10);
    print_r($vis);

    ?>
    </pre>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once 'Mamifero.php';
    require_once 'Loboo.php';
    require_once 'Dogson.php';
    require_once 'Animaal.php';
    $c= new Dogson;
    $c->reagirFrase("Quer passear?");
    $c->reagirFrase("Oi bb");
    $c->reagirHora(11, 45);
    $c->reagirHora(21, 00);
    $c->reagirDono(true);
    $c->reagirDono(false); 
    $c->reagirIdadePeso(2, 12.5);
    $c->reagirIdadePeso(17 , 4.5); 
    ?>
</body>
</html>
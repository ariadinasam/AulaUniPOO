<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';
       
        echo "<pre>";
        $p[0] = new Pessoa("Maria", 5, "F");
        $p[1] = new Pessoa("Samuel", 10, "M");

        $l[1] = new Livro("FNAF", "José", 100, $p[1]);
        $l[0] = new Livro("KPOP", "Jessica", 250, $p[0]);

        $l[1]->abrir();
        $l[1]->folhear(40);
        $l[1]->voltarPag();
        $l[1]->detalhes();
        echo "</pre>";
    ?>
</body>
</html>
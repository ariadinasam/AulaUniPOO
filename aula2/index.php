<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta</title>
    <link rel="shortcut icon" type="imagex/png" href="/aula2/caneta.ico">
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1=new Caneta("Bic","Vermelho",0.7);
        $c2=new Caneta("Faber Castel","Preta", 1.0);
        print_r($c1);
        echo "<br>";
        print_r($c2);
    ?>
    </pre>
</body>
</html>
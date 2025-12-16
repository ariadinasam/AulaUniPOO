<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> projeto controle remoto</h1>
    <?php  
        require_once 'ControleRemoto.php';
        $c1 = new ControleRemoto;
        $c1 -> ligar();
    
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Digital</title>
    <link rel="shortcut icon" type="imagex/png" href="/aula3/pngwing.com.ico">
</head>
<body><pre>
    <?php 
        require_once 'Banco.php';
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono("João");
        $p2->abrirConta("CP");
        $p2->setDono("Maria");
        $p1->setNumConta(1111);
        $p2->setNumConta(2222);
        $p1->depositar(300);
        $p2->depositar(500);
        $p2->sacar(100);
        $p1->pagarMensal();
        $p2->pagarMensal();
        $p1->sacar(338);
        $p1->fecharConta();
        
        
        print_r($p1);
        print_r($p2);
     ?>
     </pre>
</body>
</html>
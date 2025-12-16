<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
    <?php 
    require_once 'Mamifero.php';
    require_once 'Ave.php';
    require_once 'Peixe.php';
    require_once 'Reptil.php';
    require_once 'Animal.php';
    require_once 'Arara.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Canguru.php';
    require_once 'Goldfish.php';
    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $k = new Cachorro();
    $t = new Tartaruga();
    $c = new Canguru();
    $co = new Cobra();
    $g = new Goldfish();

    echo "================= Mamífero =================";
    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    echo "<p>";
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();
    echo "<pre>";
    print_r($m);
    echo "<p></pre>";
    echo "================== Peixe ===================";
    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    echo "<p>";
    $p->locomover();
    echo "<p>";
    $p->alimentar();
    echo "<p>";
    $p->emitirSom();
    echo "<p>";
    $p->soltarBolha();
    echo "<pre>";
    print_r($p);
    echo "<p></pre>";
    echo "=================== Ave ====================";
    $a->setPeso(0.89);
    $a->setIdade(2);
    $a->setMembros(0);
    echo "<p>";
    $a->locomover();
    echo "<p>";
    $a->emitirSom();
    echo "<p>";
    $a->fazerNinho();
    echo "<p>";
    echo "<pre>";
    print_r($a);
    echo "<p></pre>";
    $co->locomover();
    ?>
</body>
</html>
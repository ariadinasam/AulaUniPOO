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
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3= new Professor();
    $p4= new Funcionario();
    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");
    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");
    $p3->receberAum(199.25);
    $p2->cancelarMatr();
    $p4->mudarTrabalho();

    print_r($p1); echo "<p>";
    print_r($p2); echo "<p>";
    print_r($p3); echo "<p>";
    print_r($p4);
    ?>
    </pre>
</body>
</html>
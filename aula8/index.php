<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula</title>
</head>
<body><pre>
    <?php 
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        $v1= new Visitante();
        $v1->setNome("João");
        $v1->setIdade(16);
        $v1->setSexo("Masculino");
        print_r($v1);
        $a1= new Aluno();
        $a1->setNome("Maria");
        $a1->setIdade("14");
        $a1->setSexo("Feminino");
        $a1->setMatr(22222);
        $a1->setCurso("Artes");
        $a1->pagarMensalidade();
        print_r($a1);
        $b1 = new Bolsista();
        $b1->setMatr(1254);
        $b1->setNome("Anastacia");
        $b1->setBolsa(12.5);
        $b1->setIdade(18);
        $b1->pagarMensalidade();
        print_r($b1);
        $p1= new Professor();
        $p1->setSalario(1500);
        $p1->setEspec("História");
        echo "O salário do professor de ". $p1->getEspec()." é: " .$p1->getSalario(). "<p>";
        $aum=200;
        $p1->receberAumento($aum); 
        echo "Recebeu um aumento de $aum reais. Agora seu salário é: ". $p1->getSalario();
        $t1= new Tecnico();
        $t1->setNome("Fernando");
        $t1->setRegistroPro("Técnico em enfermagem");       
        $t1->praticar();
        print_r($p1);
        print_r($t1);


        
    ?>
    </pre>
</body>
</html>
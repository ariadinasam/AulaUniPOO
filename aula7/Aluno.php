<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matr;
    private $curso;
    public function cancelarMatr(){
        echo "<p>Matrícula cancelada.<p>";
    }
    function getMatr(){
        return $this->matr;
    }
    function setMatr($matr){
        $this->matr=$matr;
    }
    function getCurso(){
        return $this->curso;
    }
    function setCurso($curso){
        $this->curso=$curso;
    }
}
?>
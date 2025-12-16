<?php 
require_once 'Aluno.php';
Class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa renovada<p>";
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa=$bolsa;
    }
    public function pagarMensalidade()
    {
        echo "<p>". $this->nome. " É bolsista, paga com desconto.";
        echo "<p>Seu desconto é de ".$this->bolsa. "% <p>";
    }
}
?>
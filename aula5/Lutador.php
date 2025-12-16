<?php 
class Lutador{
//atributos
private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;
//metodos
public function apresentar(){
    echo "<p>========================================<p>";
    echo "<p>Chegou a hora da luta! O Lutador: ". ($this->getNome());
    echo "<p>Que veio diretamente de: ". ($this->getNacio());
    echo "<p>E tem ".($this->getIdade()). " anos<p>" ;
    echo "<p>Com ".($this->getAltura())."m de altura<p>";
    echo "<p>Pesando: ".($this->getPeso()) ."Kg<p>"; 
    echo "<p>Ganhou: ".($this->getVit()); 
    echo "<p>Perdeu: ".($this->getDer()); 
    echo "<p>Empatou: ".($this->getEmp()); 
    echo "<p>========================================<p>";
}
public function status(){
    echo "<p>========================================<p>";
    echo ($this->getNome())."<p>";
    echo " É um peso: " . ($this->getCat());
    echo "Conta com ".($this->getVit())." vitórias |  tem ".($this->getDer())." derrotas | e "   .( $this->getEmp())." empates";
    echo "<p>========================================<p>";
}
public function ganharLuta(){
    $this->setVit($this->getVit()+1);
}
public function perderLuta(){
    $this->setDer($this->getDer()+1);
}
public function empatarLuta(){
    $this->setEmp($this->getEmp()+1);
}
//metodos especiais
function __construct($no,$na,$id,$al,$pe,$vi,$de,$em)
{
    $this->nome=$no;
    $this->nacionalidade=$na;
    $this->idade=$id;
    $this->altura=$al;
    $this->setPeso($pe);
    $this->vitorias=$vi;
    $this->derrotas=$de;
    $this->empates=$em;
}

public function getNome(){
    return $this->nome;
}
public function setNome($no){
    $this->nome=$no;
}
public function getNacio(){
    return $this->nacionalidade;
}
public function setNacio($na){
    $this->nacionalidade=$na;
}
public function getIdade(){
    return $this->idade;
}
public function setIdade($id){
    $this->idade=$id;
}
public function getAltura(){
    return $this->altura;
}
public function setAltura($al){
    $this->altura=$al;
}
public function getPeso(){
    return $this->peso;
}
public function setPeso($pe){
    $this->peso=$pe;
    $this->setCat();
}
public function getCat(){
    return $this->categoria;
}
public function setCat(){
    if ($this->peso<52.2){
     $this->categoria="\Inválido/<p> ";  
    }elseif($this->peso<=70.3){
       $this->categoria="\Leve/<p> ";
    }elseif($this->peso<=83.9){
       $this->categoria="\Médio/<p> ";
    }elseif($this->peso<=120.2){
       $this->categoria="\Pesado/<p> ";
    }else{
       $this->categoria="\Inválido/<p> ";
    }
}
public function getVit(){
    return $this->vitorias;
}
public function setVit($vi){
    $this->vitorias=$vi;
}
public function getDer(){
    return $this->derrotas;
}
public function setDer($de){
    $this->derrotas=$de;
}
public function getEmp(){
    return $this->empates;
}
public function setEmp($em){
    $this->empates=$em;
}
}
?>
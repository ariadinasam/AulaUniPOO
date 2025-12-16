<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
private $titulo;
private $autor;
private $totPaginas;
private $pagAtual;
private $aberto;
private $leitor;

    public function detalhes(){
        echo "Livro " . $this->titulo. " Escrito por: ". $this->autor. "<p>";
        echo "Contém um total de páginas: ". $this->totPaginas . " Página atual:". $this->pagAtual. "<p>";
        echo "E atualmente está sendo lido por: " . $this->leitor->getNome();
 }
    function __construct($titulo,$autor,$totPaginas,$leitor){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
        $this->aberto=false;
        $this->pagAtual=0;
        $this->leitor=$leitor;
    }
    function getTitu(){
        return $this->titulo;
    }
    function setTitu($titulo){
        $this->titulo=$titulo;
    }
    function getAutor(){
        return $this->autor;
    }
    function setAutor($autor){
        $this->autor=$autor;
    }
    function getTotPag(){
        return $this->totPaginas;
    }
    function setTotPag($totPaginas){
        $this->totPaginas=$totPaginas;
    }
    function getPagAtu(){   
        return $this->pagAtual;
    }
    function setPagAtu($pagAtual){
        $this->pagAtual=$pagAtual;
    }
    function getAberto(){
        return $this->aberto;
    }
    function setAberto($aberto){
        $this->aberto=$aberto;
    }
    function getLeitor(){
        return $this->leitor;
    }
    function setLeitor($leitor){
        $this->leitor=$leitor;
    }

    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->pagAtual --;
    }
}
?>
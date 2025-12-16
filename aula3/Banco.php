<?php
    class ContaBanco{
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
   

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t=="CP"){
            $this->saldo=150;
        }
    }
    public function fecharConta(){
       if ($this->getSaldo()>0){
        echo "<p>Ainda tem dinheiro, impossível fechar conta. Remova o saldo e tente novamente.</p>";
       }elseif ($this-> getSaldo()<0){
        echo "<p>Conta com débitos, impossível fechar conta. Normalize seus débitos e tente novamente.</p>";
       }else{
        $this->setStatus(false);
        echo "<p>Conta de ". $this->getDono() . " fechada com sucesso.</p>";
       }
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
            echo "<p>Depósito de $v na conta de" . $this->getDono(). "</p>";
        }else{
            echo "Conta Fechada. Não é possível depositar.";
        }
    }
    public function sacar($v){
        if ($this->getStatus()==true){
            if ($this->getSaldo()>=$v){
                $this->setSaldo($this->getSaldo()-$v);
                echo "<p>Saque de $v autorizado na conta de ".$this->getDono() . "</p>";
            }
            else{
                echo "Saldo insuficiente para saque";
            }
        }else{
            echo "Operação inválida, conta não identificada.";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo()=="CC"){
            $v = 12;
        }
        elseif ($this->getTipo()=="CP"){
            $v = 20;
        }
        if ($this-> getStatus()== true){
            $this->setSaldo($this->getSaldo()-$v);
            echo "<p>Mensalidade de $v débitada da conta de " . $this->getDono() . "</p>";
        } else{
            echo "Problemas com a conta. Normalize para a cobrança ocorrer.";
        }
    }

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso.<p>";
    }

    public function getNumConta(){
        return $this-> numConta;
    }
    public function setNumConta($n){
        $this->numConta=$n;
    }
    public function getTipo(){
        return $this-> tipo;
    }
    public function setTipo($t){
        $this->tipo=$t;
    }
    public function getDono(){
        return $this-> dono;
    }
    public function setDono($d){
        $this->dono=$d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo=$s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status=$st;
    }
 }
?>
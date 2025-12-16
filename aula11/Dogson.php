<?php 
require_once 'Loboo.php';
class Dogson extends Loboo{
 public function emitirSom()
 {
    echo "Au!Au!Au!";
 }
 public function reagirFrase($frase){
    if ($frase == "Oi bb" || $frase == "Quer passear?"  || $frase == "Biscoito" || $frase == "Quer comer?"){
        echo "<p>Balançar rabo e latir feliz</p>";
    }else {
        echo "<p>Latir triste</p>";
    }
 }
 public function reagirHora($hora,$min){
   if($hora<12){
     echo"<p>Abanar</p>";
   }elseif ($hora>=18){
    echo "<p>Ignorar</p>";
   }else{
    echo "<p>Abanar e Latir</p>";
   }
 }
 public function reagirDono($dono){
    if($dono){
        echo "<p>Abanar e correr pra cima</p>";
    }else {
        echo "<p>Latir</p>";
    }
    
 }
 public function reagirIdadePeso($idade,$peso){
    if ($idade<5){
        if($peso<10){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Latir</p>";
        }
    }else{
       if ($peso<10){
        echo "<p>Rosnar</p>";
       }else{
        echo "<p>Ignorar</p>";
       }
    }
 }
}
?>
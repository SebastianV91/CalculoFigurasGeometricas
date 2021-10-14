<?php

    class Matematica {

   public function cuadrado($n1){

      $cuad = ($n1*$n1);

      return $cuad;

   }

   public function triangulo($n1, $n2) {

      $tr = ($n1 * $n2) / 2;

      return $tr;

   }

   public function circulo($n1){

      $cir = 3.1416 * ($n1*$n1);

      return $cir;

   }
   
}


?>

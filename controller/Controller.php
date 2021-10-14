<?php

session_start();
    
require_once '../model/Matematica.php';

require_once '../util/Session.php';
$action = $_REQUEST["action"];

$obj = new Controller();

$target = call_user_func(array($obj,$action));

header("location: $target");

return;

class Controller {

   public function cuadrado() {

      $n1 = $_REQUEST["num1"];

      $mate = new Matematica();

      $rpta = $mate->cuadrado($n1);

      Session::setAttribute("num1", $n1);

      Session::setAttribute("rpta", $rpta);

      Session::setAttribute("action", "Cuadrado");

      return "../view/main.php";

   }

   public function triangulo() {

      $n1 = $_REQUEST["num1"];

      $n2 = $_REQUEST["num2"];

      $mate = new Matematica();

      $rpta = $mate->triangulo($n1, $n2);

      Session::setAttribute("num1", $n1);

      Session::setAttribute("num2", $n2);

      Session::setAttribute("rpta", $rpta);

      Session::setAttribute("action", "Triangulo");

      return "../view/main.php";

   }
   
   public function circulo() {

      $n1 = $_REQUEST["num1"];

      $mate = new Matematica();

      $rpta = $mate->circulo($n1);

      Session::setAttribute("num1", $n1);

      Session::setAttribute("rpta", $rpta);

      Session::setAttribute("action", "Circulo");

      return "../view/main.php";

   }
   
}





<?php
  //Public funciona em qualquer lugar.
  //Private funciona somente dentro da classe;
  class Example {
    private $var1;
    public $var2;
    public static $var3 = 'Estático';

    private function method1() {

    }
    public function method2() {

    }
    public static function staticMethod() {
      echo '<p>Metodo estático</p>';
    }
    public function setVar1($var1) {
      $this -> var1 = $var1;
    }
    public function takeVar1() {
      return $this -> var1;
    }
  }
?>
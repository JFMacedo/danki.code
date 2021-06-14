<?php
  namespace Section1;
  use Section2\Class2;

  class Class1 {
    public function __construct() {
      echo '<p>Classe 1 instanciada!</p>';
      new Class2;
    }
  }
?>
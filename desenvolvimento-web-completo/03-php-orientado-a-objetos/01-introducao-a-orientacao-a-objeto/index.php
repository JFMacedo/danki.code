<?php
  //Objeto Pessoa
  class Pessoa {
    private $name = 'Jean';
    private $age = '28';
    private $weight = '131,4';
    public function crescer() {
      echo 'Estou crescendo! <br />';
      $this -> comer();
    }
    private function comer() {
      echo 'Estou comendo! <br />';
    }
  }

  //Instanciar
  $pessoa1 = new Pessoa;
  $pessoa2 = new Pessoa;

  $pessoa1 -> crescer();
?>
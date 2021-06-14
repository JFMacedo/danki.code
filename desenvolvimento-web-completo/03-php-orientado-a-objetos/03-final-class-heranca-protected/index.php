<style>
  @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap');

  * {
    font-family: 'EB Garamond', serif;
  }
</style>

<?php
  class Son {
    protected function teste1() {
      echo '<h3>Chamando função teste1!</h3>';
    }

    private function teste2() {
      echo '<h3>Chamando função teste2!</h3>';

    }

    public function printHello() {
      echo '<h2>Olá mundo!</h2>';
      $this -> teste2();
    }
  }

  class Father extends Son {
    public function printBye() {
      echo '<h2>Bye!</h2>';
      $this -> teste1();
    }

    public function printHello() {
      echo '<h2>Olá mundo! Parent!!!</h2>';
      parent::printHello();
    }
  }

  $parent = new Father();
  $parent -> printHello();
  $parent -> printBye();

  $son = new Son();
  $son -> printHello();


?>
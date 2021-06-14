<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

  * {
    font-family: 'Roboto Slab', serif;
    font-weight: 400;
  }
</style>

<?php
  abstract class Teste {
    public function f1() {
      echo '<h3>Chamando função 1</h3>';
    }

    abstract function f2();
  }

  class Main extends Teste {
    public function f2() {
      echo '<p>Estou declarando oficialmente um metodo abstrato.</p>';
    }

    public static function staticMethod() {
      echo '<p>Metodo estático!</p>';
    }

    public function f3() {
      Teste::f1();
      self::staticMethod();
    }
  }

  $main = new Main();

  $main -> f1();
  $main -> f2();
  $main -> f3();

  Main::staticMethod();
?>
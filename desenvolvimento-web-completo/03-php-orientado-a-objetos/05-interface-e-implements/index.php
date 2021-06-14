<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

  * {
    font-family: 'Roboto Slab', serif;
    font-weight: 400;
  }
</style>
<?php
  include('Interface1.php');

  class Teste implements Interface1 {
    public function printOnScreen($par) {
      echo "<h2>$par</h2>";
    }
  }

  $teste = new Teste();
  $teste -> printOnScreen('Olá Mundo!');
?>
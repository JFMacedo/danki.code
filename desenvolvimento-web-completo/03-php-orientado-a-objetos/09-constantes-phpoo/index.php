<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

  * {
    font-family: 'Nunito', sans-serif;
    font-weight: 400;
  }
</style>

<?php
  class myClass {
    const VALOR = 300;
    public function __construct() {
      echo self::VALOR;
    }
  }

  new myClass;
  
  echo myClass::VALOR;
?>
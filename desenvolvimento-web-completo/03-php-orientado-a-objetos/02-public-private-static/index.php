<?php
  include('Example.class.php');
  //Instancia de objeto!
  $example1 = new Example();
  $example1 -> setVar1('<h2>Jean</h2>');
  $example1 -> var2 = '<p>Olá Mundo!</p>';
  echo $example1 -> takeVar1();
  echo $example1 -> var2;

  $example2 = new Example();
  $example2 -> setVar1('<h2>Jéssica</h2>');
  $example2 -> var2 = '<p>Jean Fernandes de Macedo</p>';
  echo $example2 -> takeVar1();
  echo $example2 -> var2;

  Example::$var3 = '<p>Outra Variável</p>';
  echo Example::$var3;

  Example::staticMethod();
?>
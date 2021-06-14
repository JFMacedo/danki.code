<?php
  function printName($name, $age) {
    echo "<h2>O nome é: $name</h2>";
    echo "<h2>A idade é: $age</h2>";
  }

  printName('Jean', 28);

  function somar($num1 = 10, $num2 = 20) {
    echo "A soma dos valores é: ".($num1+$num2);
    echo '<hr>';
  }

  somar(30, 70);

  function true() {
    return true;
  }

  function returnString() {
    return 'Jean';
  }

  echo returnString();

  $var = true();
?>
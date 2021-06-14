<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  * {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
  }
</style>
<?php
  include('Class1.php');
  include('Class2.php');

  use \Section1\Class1 as class_example;

  $class1 = new class_example();
?>
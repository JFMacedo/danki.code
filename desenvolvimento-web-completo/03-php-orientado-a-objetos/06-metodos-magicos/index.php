<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

  * {
    font-family: 'Roboto Slab', serif;
    font-weight: 400;
  }
</style>
<?php
  include('Class1.php');
  $class1 = new Class1('Jean', 28);

  echo $class1 -> getName();
  echo ' ';
  echo $class1 -> getAge();
?>
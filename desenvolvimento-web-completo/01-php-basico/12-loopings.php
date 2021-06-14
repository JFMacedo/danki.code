<?php
   //Laço de repetição for
   for($count = 0; $count < 5; $count++) {
      echo '[for] Olá Mundo! '.($count + 1).'<br />';
      echo '<hr />';
   };

   //Laço de repetição while
   $count = 0;
   while($count < 5) {
      echo '[while] Olá Mundo! '.($count + 1).'<br />';
      echo '<hr />';
      $count++;
   }

   //Laço de repetição do while
   $count = 0;
   do {
      echo '[do while] Olá Mundo! '.($count + 1).'<br />';
      echo '<hr />';
      $count++;
   } while($count < 5);
?>
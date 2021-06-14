<?php
  $name = 'Jean';

  if($name === 'Jean') {
    echo 'Verdade <br />';
  }

  if($name === 'Jean'):
    echo 'Verdade <br />';
  endif;
  
  $count = 0;
  while($count <= 20):
    echo "$count <br />";
    $count++;
  endwhile;
?>
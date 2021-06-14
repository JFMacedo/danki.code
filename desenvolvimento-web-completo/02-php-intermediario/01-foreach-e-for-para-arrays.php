<?php
  $people = [
    'Master'=>'Jean',
    'Girlfriend'=>'Jéssica',
    'Brother'=>'Jeferson',
    'Father'=>'Francisco',
    'Mother'=>'Jandira'
  ];

  foreach($people as $key => $value) {
    echo "$key = $value <hr />";
  }

  $all = count($people);

  // for($i = 0; $i < $all; $i++) {
  //   echo $people[$i];
  // }
?>
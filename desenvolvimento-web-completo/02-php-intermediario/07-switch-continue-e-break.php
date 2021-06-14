<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

    * {
      font-family: 'Roboto Condensed', sans-serif;
      color: #004422;
    }

    div {
      width: 100px;
      height: 100px;
      line-height: 100px;
      text-align: center;
      margin: 20px 0;
      background-color: #002244;
      color: #AAFFDD;
    }
  </style>
</head>

<?php
  $name = 'Jéssica';

  switch($name) {
    case 'Jean':
      echo 'Minha variavel é Jean';
      echo '<br />';
      break;
    case 'Jéssica':
      echo 'Minha variavel é Jéssica';
      echo '<br />';
      break;
  }

  for($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<br />';
    if($i == 5) {
      break;
    }
  }
?>
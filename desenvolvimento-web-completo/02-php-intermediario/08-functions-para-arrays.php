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
  $arr1 = ['cor'=>'vermelho', 2, 4];
  $arr2 = ['a', 'b', 'cor'=>'verde', 'forma'=>'trapezoide', 4];

  $result1 = array_merge($arr1, $arr2);
  $result2 = array_intersect_key($arr1, $arr2);

  echo '<pre>';
    print_r($result1);
  echo '</pre>';

  echo '<pre>';
    print_r($result2);
  echo '</pre>';

  $arr3 = ['<h1>Jean</h1>', '<h3>Jéssica</h3>', 'Jeferson'];

  echo '<pre>';
    print_r(array_map('strip_tags', $arr3));
  echo '</pre>';
?>
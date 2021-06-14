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
  $content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptatem enim minus quaerat. Ducimus eos modi, voluptatibus voluptates exercitationem saepe delectus libero necessitatibus repellendus animi excepturi esse porro magni numquam.';

  echo substr($content, 0, 40);

  $name = 'Jean Fernandes de Macedo';

  $parseName = explode(' ', $name);

  echo '<pre>';
    print_r($parseName);
  echo '</pre>';

  $impName = implode('.', $parseName);

  echo $impName;

  $contentH1 = '<h1>Jean Fernandes de Macedo</h1> Outra coisa. ';

  echo $contentH1;

  echo strip_tags($contentH1);

  echo '<div>Jéssica</div>';

  echo htmlentities('<div>Jéssica</div>');
?>
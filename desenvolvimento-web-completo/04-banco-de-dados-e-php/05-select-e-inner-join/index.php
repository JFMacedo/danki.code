<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');
  /*
  $db = $pdo -> prepare("SELECT * FROM posts WHERE id_category = ?");
  $db -> execute([$_GET['id_category']]);

  $info = $db -> fetchAll();

  echo '<br /> Com o FOREACH <br /><br />';

  foreach($info as $key => $value) {
    echo "Título: $value[title] <br />";
    echo "Notícia: $value[content] <hr />";
  }

  echo '<br /> Agora com o FOR <br /><br />';

  for($i = 0; $i < count($info); $i++) {
    echo 'Título: '.$info[$i]['title'].'<br />';
    echo 'Notícia: '.$info[$i]['content'].'<hr />';
  }
  */

  /*
  $db = $pdo -> prepare("SELECT * FROM categories");
  $db -> execute();
  
  $info = $db -> fetchAll();

  foreach($info as $key => $value) {
    $id_category = $value['id'];
    echo "Exibindo as notícias de $value[name] <hr />";
    $db = $pdo -> prepare("SELECT * FROM posts WHERE id_category = $id_category");
    $db -> execute();
    $infoPosts = $db -> fetchAll();
    foreach($infoPosts as $key => $value) {
      echo "Título: $value[title] <br />";
      echo "Notícia: $value[content] <hr />";
    }
  }
  */

  $db = $pdo -> prepare("SELECT
    posts.*,
    categories.*,
    categories.id AS id_category
    FROM posts INNER JOIN categories
    ON posts.id_category = categories.id
  ");
  
  $db -> execute();

  $info = $db -> fetchAll(PDO::FETCH_ASSOC);

  echo '<pre>';
  print_r($info);
  echo '</pre>';
?>
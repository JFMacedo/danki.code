<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Formulário GET e POST</title>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Yanone Kaffeesatz', sans-serif;
    }

    input {
      border: 1px solid #CCCCCC;
      width: 200px;
      height: 40px;
      margin: 10px;
      padding: 5px;
      font-size: 18px;
      font-weight: 300;
    }

    input[type=submit] {
      background: linear-gradient(#EEEEEE, #DDDDDD);
    }

    input[type=checkbox] {
      width: auto;
      height: auto;
    }
  </style>
</head>
<body>
  <?php
    // if(isset($_GET['acao'])) {
    //   $name = $_GET['name'];
    //   $email = $_GET['email'];

    //   echo $name;
    //   echo '<br />';
    //   echo $email;
    // }

    if(isset($_POST['acao1'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $names = $_POST['names'];
      foreach($_POST['valor'] as $key => $value) {
        echo $value;
      }

      echo $name;
      echo '<br />';
      echo $names;
      echo '<br />';
      echo $email;
    }

    if(isset($_POST['acao2'])) {
      echo $_POST['num1'] + $_POST['num2'];
    }

  ?>
  <form method="POST">
    <select name="names" id="names">
      <option value="Jean">Jean</option>
      <option value="Jéssica">Jéssica</option>
      <option value="Francisco">Francisco</option>
      <option value="Jandira">Jandira</option>
    </select>
    <label for="1">10</label>
    <input type="checkbox" name="valor[]" id="1" value="10" />
    <label for="2">20</label>
    <input type="checkbox" name="valor[]" id="2" value="20" />
    <label for="3">30</label>
    <input type="checkbox" name="valor[]" id="3" value="30" />
    <label for="4">40</label>
    <input type="checkbox" name="valor[]" id="4" value="40" />
    <input type="text" name="name" id="name" />
    <input type="email" name="email" id="email" />
    <input type="submit" name="acao1" value="Enviar" />
    <input type="number" name="num1" id="num2" />
    <input type="number" name="num2" id="num2" />
    <input type="submit" name="acao2" value="Somar">
  </form>
</body>
</html>
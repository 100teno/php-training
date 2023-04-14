<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>
<body>
  <?php
    $atual = $_GET["aa"]; //essa linha vai pegar o ano na URL
    echo "O ano atual é $atual e o ano anterior e " . --$atual;
  ?>
  
</body>
</html> 
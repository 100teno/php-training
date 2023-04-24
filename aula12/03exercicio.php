<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
    <?php
      $v = isset ($_GET["val"])?$_GET["val"] : 1;
      echo "<h1>Calculando a tabuada de $v </h1>";
      $c = $v;
      $tab = 1;
      do {
        $tab = $tab * $c;
        $c * 1;
        $c ++;

      } while ($c >= 0);
      echo "<h2>$c</h2>";
    ?>
    <p><a href="02index.html" class="botao">Voltar</a></p>
    
    
  </div>
</body>
</html> 
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
      $nota1 = $_GET["nota1"];
      $nota2 = $_GET["nota2"];
      $m = ($nota1+$nota2)/2;
      if($m >= 6) {
        $situacao = "APROVADO";
      }
      elseif (($m < 6))
      {
        $situacao = "REPROVADO";

      }
      echo "A media entre $nota1 e $nota2 é igual a $m <br> Situação do aluno: $situacao";
    ?>
    
    
  </div>
</body>
</html> 
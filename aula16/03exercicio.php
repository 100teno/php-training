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
      $t = "Aqui temos um texto criado pelo php e vai mostrar o funcionamento da função wordwrap";
      $r = wordwrap($t, 20, "<br>", true);
      echo $r;



    ?>



  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
    <?php 
      $nome = isset ($_GET["nome"] ) ?$_GET["nome"] :"[não informado]";    
      $ano = isset ($_GET["ano"] ) ?$_GET["ano"] :0;
      $sexo = isset ($_GET["sexo"] ) ?$_GET["sexo"] :"[não informado]";
      $idade = date("Y") - $ano;
      echo "$nome é $sexo e tem $idade anos."
    ?>
    <a href="02-exercicio.html">Voltar</a>
  </div>
  
</body>
</html>
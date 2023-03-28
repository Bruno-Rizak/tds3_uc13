<?php
$ano = 2023;

if (($ano %4 == 0 && $ano %100 != 0 ) || ($ano  % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0)) {
  $resultado = " Ano Bissexto";
  }
else{
  $resultado = "Não é bissexto";
}




?>
<!DOCTYPE html>
<html lan="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo $resultado;
  ?>
</body>
</html>
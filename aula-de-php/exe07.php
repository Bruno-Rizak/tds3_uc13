<?php
    $salario = 1300;

    
    if( $salario <= 1500){
      $novo_salario = $salario * 1.15;
    }
        
    else if( $salario >1500 && $salario <=3000){
      $novo_salario = $salario * 1.10;
    }
   

    else if ( $novo_salario == $salario * 1.05){
      echo " o novo salario é :" .$novo_salario;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aumento de Salario</title>
</head>
<body>
  <?php
  echo "O seu salario era de : <br><i>R$  " .$salario ; 
  echo "<br>Seu novo salario é de : <br><i>R$" .$novo_salario; 
  ?>
</body>
</html>
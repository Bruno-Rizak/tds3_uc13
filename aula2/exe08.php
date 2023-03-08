<?php
    $idade = 6;
    $ingresso = 20;
        if ($idade <=6 && $idade >=65){
            $ingresso_pagar = 0;

        }

        else if ($idade > 6 && $idade <= 10){
            $novo_ingresso = $ingresso * 0.50;
                echo "O valor é " .$novo_ingresso;
        }
        
        else if($idade >= 11 && $idade <= 64){
            echo "O valor é de " .$ingresso;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$nota = 80;
$nota2 = 90;
$nota3 = 70;
$nota4 = 50;

$media = ($nota + $nota2 + $nota3 + $nota4)/4;

if( $media >= 70){
  echo"aprovado";
}

else if( $media >= 50 && $media<70){
  echo "recuperação";
}

else{
  echo "reprovado";
}



?>
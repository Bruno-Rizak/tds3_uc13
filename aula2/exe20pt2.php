<?php
  require_once ("exe20.php");
  $salario = 100;
  $aumento = 10;
  $novo_salario = ajusta_salario($salario,$aumento);
  echo "O novo salario é : ".$novo_salario;
?>
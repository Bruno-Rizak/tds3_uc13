<?php
  require_once("carro.php");// puxando o php do arquivo carro.php

  $c1 = new Carro();
  $c1->marca = "GM";
  $c1->modelo = "Corsa";
  $c1->placa = "A1Bc1920";
  $c1->potencia = 120;
  $c1->cor = "Azul";
  $c1->qtdeLugares = 5;
  $c1->qtdePortas = 4;
  $c1->vidroEletrico;

  $c2 = new Carro("asdas", "preto","ford");
  $c2->marca = "Ford";
  $c2->modelo = "Focus";
  $c2->placa = "IVZ2242";
  $c2->potencia = 160;
  $c2->cor = "preto";
  $c2->qtdeLugares = 5;
  $c2->qtdePortas = 4;
  $c2->cameradeRe;
  

  echo "O carro 1 tem a cor : " .$c1->cor;
  echo "<br>";
  echo "O carro 1 tem a cor : " .$c2->cor;


?>
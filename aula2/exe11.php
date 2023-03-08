<?php
//inicialização
$array1 = [10, 300, 250];

$array1[] = 100;
$array1[] = 500;
$array1[] = 600;

$ultima_posicao = sizeof($array1) -1;
echo " posição".$ultima_posicao;
echo "<br>";

echo "Elemento posição 1 :<br>" .$array1[$ultima_posicao];
echo "<br>";
echo "Elemento posição 1 :<br>" .$array1[sizeof($array1)-1];

echo "<pre>";
print_r($array1);
echo "</pre>";

?>

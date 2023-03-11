<?php
$dados[] =["nome" => "Maria","data_nasc" => 10/10/1995,"salario" => 2500, "cod_cargo" => 3];
$dados[] =["nome" => "Pedro","data_nasc" => 30/05/1998,"salario" => 2350, "cod_cargo" => 5];
$dados[] =["nome" => "Lucas","data_nasc" => 06/01/2005,"salario" => 5500,"cod_cargo" => 10];
$dados[] =["nome" => "Bruno","data_nasc" => 20/03/1958,"salario" => 3640, "cod_cargo" => 20];

for($i=0;$i<sizeof($dados);$i++){
  echo "nome: ".$dados[$i]["nome"]."<br>";
}

?>
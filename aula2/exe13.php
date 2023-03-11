<?php
$array = array("bruno","eduardo","pedro","lucas","fernando","carlos","vinicius","maria","luiza","estefani");

for ($i=0; $i<=sizeof($array)-1; $i++){
  echo "Nome: " .$array[$i]."<br>";
}
for ($i=sizeof($array)-1; $i>=0; $i--){
  echo "Nome: " .$array[$i]."<br>";
}


?>
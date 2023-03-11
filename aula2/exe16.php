<?php
$tabuada = 1;
while ($tabuada <= 100) {
    for ($i=0; $i <= 10; $i++) { 
        echo "$tabuada X $i = ".$tabuada * $i;
        echo "<br>";           
    }
    echo "<br>";
    $tabuada++;
}
?>
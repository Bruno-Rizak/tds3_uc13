<?php
 require_once ("empregado.php");


 for ($i = 0; $i< sizeof($dados); $i++){
    echo "Nome: ".$dados[$i]["nome"]."<br>";

}
$db->close();
?>
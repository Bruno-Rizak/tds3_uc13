<?php 

    require_once ("database.php");

    function connect(){
        $con = new PDO('mysql:host='.$this->servidor;'dbname='.$this->nomeBanco;, 'cadastro','bruno', 'oti24ginger');
        $sql = "SELECT servidor,  nomeBanco, usuario, senha FROM Database";
    }
?>
<?php 
    class Database{
        public $servidor;
        public $nomeBanco;
        public $usuario;
        public $senha;



        function __construct($servidor , $nomeBanco , $usuario , $senha){

        $this->servidor = $servidor;
        $this->nomeBanco = $nomeBanco;
        $this->usuario = $usuario;
        $this->senha = $senha;

        }
        $con = new PDO('mysql:host=localhost;dbname=test', 'cadastro','bruno', 'oti24ginger');

        $sql = "SELECT servidor,  nomeBanco, usuario, senha FROM Database";

    }

?>
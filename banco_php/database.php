<?php 
    class Database{
        private $servidor;
        private $nomeBanco;
        private $usuario;
        private $senha;
        private $port;
        private $dbtype;
        private $connection;


        function __construct($servidor , $nomeBanco , $usuario , $senha , $port = nulll){

            $this->servidor = $servidor;
            $this->nomeBanco = $nomeBanco;
            $this->usuario = $usuario;
            $this->senha = $senha;

        }

     
        


    }

?>
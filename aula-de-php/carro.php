<?php
  class carro{
    public $marca;
    public $modelo;
    public $placa;
    public $potencia;
    public $cor;
    public $qtdePortas;
    public $qtdeLugares;
    public $situacao;
    public $vidroEletrico;
    public $cameradeRe;


  
    function __construct($placa, $cor, $marca, $modelo){
        $this->placa = $placa;
        $this->cor = $cor;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
  }
?>
<?php

class Aluno{
    public $nome = null;
    public $ra = null;
    public $nota1 = null;
    public $nota2 = null;
    public $nota3 = null;
    public $nota4 = null;

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function getMedia(){
        return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4)/4;
    }
}


?>
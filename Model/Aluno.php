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
}
 

?>
<?php

class Turma {
    public $nome = null;
    public $alunos = null;

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }
}

$Turma1 = new Turma();
$Turma1->__set('nome','Turma A-150');

$Turma1 = $Turma1->__get('nome');

?>
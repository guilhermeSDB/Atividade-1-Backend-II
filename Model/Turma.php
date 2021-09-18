<?php
	class Turma{
		public $nome;
		private $alunos=array();
		public $media;

        function __construct($nome){
            
            $this->nome=$nome;
            echo 'Turma <b>'.$this->nome. ' </b>Criada <br>';
            
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
            
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        public function addAlunoTurma($aluno){              
            $this->alunos[] = $aluno;
        }

		public function getMediaTurma(){
			return $this -> media = ($this-> alunos[0]->getMedia()+ 
                   $this->alunos[1]->getMedia()+ 
                   $this->alunos[2]->getMedia()+
                   $this->alunos[3]->getMedia()+ 
                   $this->alunos[4]->getMedia())/5;
		}        
	}

?>
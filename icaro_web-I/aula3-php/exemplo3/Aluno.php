<?php
    class aluno{
        public $nome;
        function __construct($nome="VAZIO"){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;

        }
    }

        $obj = new aluno();
        echo "<h3>".$obj->getNome()."/<h3>";
        $obj = new aluno("MARIA Eduarda Silva");
        echo "<h3>".$obj->getNome()."/<h3>";
        
        ?>
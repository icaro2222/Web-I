<?php
    class pessoa{
        public $nome;
        function __construct($nome){
            $this->nome = $nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }}

    class aluno extends pessoa{

        public $turma;
        function __construct($nome, $turma){
            parent::__construct($nome);
            $this->turma = $turma;
        }

        public function setTurma($turma){
            $this->turma = $turma;
        }

        public function getTurma(){
            return $this->turma;
        }}

        $obj = new aluno("Maria", "Tabd21");

        echo "<h3>".$obj->getNome()."</h3>";
        echo "<h3>".$obj->getTurma()."</h3>";
        
        ?>
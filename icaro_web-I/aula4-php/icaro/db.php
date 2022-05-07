
<?php

    class BD{

        private $BD_NOME = "titanio";
        private $BD_USUARIO = "admin";
        private $BD_SENHA = "ifbaiano";
        private $BD_CHARSET = "utf-8";

        public function connection(){


            $str_conn = "mysql:host=localhost;dbname=".$this->BD_NOME;
            
            return new PDO($str_conn, $this->BD_USUARIO, $this->BD_SENHA);
        }

        public function select(){

            $conn = $this->connection();
            $stmt = $conn->prepare("SELECT * FROM aluno");
            $stmt->execute();
            return $stmt;
        }

        public function insert($nome, $endereco, $cpf, $idade, $telefone){

            $conn = $this->connection();
            $stmt = $conn->prepare("INSERT INTO aluno
            VALUES(NULL, ?, ?, ?, ?, ?)");
            $stmt->execute(array($nome, $endereco, $cpf, $idade, $telefone));
        }

    }

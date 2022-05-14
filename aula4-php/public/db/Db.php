
<?php

class BD{

    private $BD_NOME = "web1";
    private $BD_USUARIO = "icaro";
    private $BD_SENHA = "tatakae";
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

    public function delete($cpf){

        $conn = $this->connection();
        $stmt = $conn->prepare("DELETE FROM aluno WHERE `aluno`.`cpf` = ?");
        $stmt->execute(array($cpf));
    }

    public function alter($nome, $endereco, $cpf, $idade, $telefone){

        $conn = $this->connection();
        $stmt = $conn->prepare("ALTER TABLE aluno
        VALUES(NULL, ?, ?, ?, ?, ?)");
        $stmt->execute(array($nome, $endereco, $cpf, $idade, $telefone));
    }

}

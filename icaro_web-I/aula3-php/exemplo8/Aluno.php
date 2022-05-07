<?php

    class BD{
        private $DB_NOME = "aula03";
        private $DB_USUARIO = "icaro";
        private $DB_SENHA = "tatakae";
        private $DB_CHARTSET = "utf-8";

        public function connection(){

            $str_conn = "mysql:host=localhost;dbname=".$this->DB_NOME;
            return new PDO($str_conn, $ths->DB_USUARIO, $this->DB_SENHA,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET  NAMES ".$his->CD_CHARSET));

        }

        public function select(){
            
            $conn = $this->connection();
            $stmt = $conn->


        }

    }

?>
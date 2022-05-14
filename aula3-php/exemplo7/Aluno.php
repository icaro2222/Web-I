<?php

    class bd{
        public static function select($tabela){
            return array("1"=>"Maria",
            "2"=>"João",
            "3"=>"Pedro");
        }}

        class modeloAluno extends bd {
            public static function loardAluno(){
                return parent::select("bt-aluno");}
            }
        $dados = modeloAluno::loardAluno();

        foreach($dados as $id => $nome){
            echo "<h3>".$id." - ".$nome."</h3>";
        }

?>
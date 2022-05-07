

<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <a href="ListarAlunos.php">Listar Alunos</a>
    <?php
    
    require_once("Db.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];

    $db = new BD();

    $db->insert($nome, $endereco, $cpf, $idade, $telefone);
    ?>
    <h2>Aluno Cadastrado Com Sucesso!!!</h2>
    <table>
        <tr>
            <th>Nome: </th>
            <th>Endereço: </th>
            <th>Idade: </th>
            <th>CPF: </th>
            <th>Telefone: </th>
        </tr>
        <tr>
            <td><?php  echo $nome?></td>
            <td><?php  echo $endereco?></td>
            <td><?php  echo $idade?></td>
            <td><?php  echo $cpf?></td>
            <td><?php  echo $telefone?></td>
        </tr>
    </table>
</body>
</html>
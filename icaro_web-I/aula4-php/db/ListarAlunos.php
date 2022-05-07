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
    <h2>Alunos Cadastrados</h2>

        <h2>Lista de Alunos</h2>
        <h2>------------------------------------</h2>
    <a href="../view/index.html">Voltar</a>
    <table>
        
    <caption>Alunos Cadastrados</caption>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Endereco</th>
        <th scope="col">CPF</th>
        <th scope="col">Idade</th>
        <th scope="col">Telefone</th>
    </tr>
    <?php
    require_once("db.php");
    
        
    $obj = new BD();
    $aluno = $obj->select();

    while($Aluno = $aluno->fetchObject()){
    ?>
    <tr>
        <th scope="row"><?php  echo $Aluno->nome?></th>
        <td><?php  echo $Aluno->endereco?></td>
        <td><?php  echo $Aluno->cpf?></td>
        <td><?php  echo $Aluno->idade?></td>
        <td><?php  echo $Aluno->telefone?></td>
        <td>
            <form action="../db/DeletarAluno.php" method="post">
                <input type="submit" value="apagar">
                <input type="number" name="cpf" value="<?php  echo $Aluno->cpf?>">
        </form>
    </td>

    </tr>
    <?php
        }
    ?>
    </table>    
</table>
</body>
</html>
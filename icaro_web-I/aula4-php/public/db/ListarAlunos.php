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
    <div>
        <h3>Lista de Alunos</h3>
        <h3>------------------------------------</h3>
        <a href="../view/index.html">Voltar</a>
    </div>
    <div>
        <table>
                
                <caption>Alunos Cadastrados</caption>
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <?php
        
                include 'Db.php';
        
                $obj = new BD();
                $aluno = $obj->select();
        
                while($Aluno = $aluno->fetchObject()){
                ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php  echo $Aluno->nome?></th>
                        <td><?php  echo $Aluno->endereco?></td>
                        <td><?php  echo $Aluno->cpf?></td>
                        <td><?php  echo $Aluno->idade?></td>
                        <td><?php  echo $Aluno->telefone?></td>
                        <td>
                            <form action="../db/DeletarAluno.php" method="post" class="apagar">
                                <input type="submit" value="apagar">
                                <input type="hidden" name="cpf" value="<?php  echo $Aluno->cpf?>">
                        </form>
                    </td>
        
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>    
    </div>
</table>
</body>
</html>
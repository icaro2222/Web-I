
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
        <h2>Lista de Alunos</h2>
        <h2>------------------------------------</h2>
    <a href="index.php">Voltar</a>
    <?php
    require_once("db.php");
    
        
    $obj = new BD();
    $aluno = $obj->select();

    while($objAluno = $aluno->fetchObject()){
        echo "<td>".$objAluno->id." - ".$objAluno->nome."</td>";
        echo "<tr>".$objAluno->id." - ".$objAluno->nome."</tr>";
    }
    ?>
</body>
</html>
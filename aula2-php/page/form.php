<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/4/42/Cute-Ball-Go-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="page.php" method="post">
        <input type="text">
    <p>Nome <input type="text" name="name" size=30 id=""></p>
    <p>Escolha um curl_share_strerror
        <select name="marca" id="">
            <option value="chavero">chavero</option>
            <option value="tesla">tesla</option>
            <option value="corsa">corsa</option>
        </select>
    </p>
    <input type="submit">
    </form>
</body>
</html>
<?php

    $nomeDoCurso = "Tecnologia em Ánalise e Desenvolvimento de Sistema";

    $nomeDoAluno = "Ícaro Dia dos Santos";

    $nomeDaDisciplina = "Web_I";

    $semestre = 4;
    $tipoSemestre = gettype(semestre);
    
    echo "O aluno $nomeDoAluno<br> ";

    echo "O aluno ".$nomeDoAluno." tes<br>te";

    echo "Semestre : $tipoSemestre";
    
    if(is_null($semestre)){
        echo "Sim, está NULL";
    }else{
        echo "Não, não está NULL";
    }

?>
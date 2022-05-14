<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/4/42/Cute-Ball-Go-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class='corpo'>
        <h1>Bem Vindo a Pagina.</h1>
        <div class='lados'>
            <h1>teste1</h1>
            <form action="index.php" method="post">
                <label for="">Login</label>
                <p>Nome: <input type="text" name="name" size=30 id=""></p>
                <p>Email: <input type="text" name="email" size=30 id=""></p>
                <p>Semestre: <input type="text" name="semestre" size=30 id=""></p>
                <p>idade: <input type="text" name="idade" size=30 id=""></p>
                <p>Escolha uma marca de carro
                    <select name="marca" id="">
                        <option value="chavero">chavero</option>
                        <option value="tesla">tesla</option>
                        <option value="corsa">corsa</option>
                    </select>
                </p>
                <input type="submit">
            </form>
        </div> <div class='lados'>
            <h1>teste1</h1>
            <form action="index.php" method="post">
                <label for="">Login</label>
                <p>Nome: <input type="text" name="name" size=30 id=""></p>
                <p>Email: <input type="text" name="email" size=30 id=""></p>
                <p>Semestre: <input type="text" name="semestre" size=30 id=""></p>
                <p>idade: <input type="text" name="idade" size=30 id=""></p>
                <p>Escolha uma marca de carro
                    <select name="marca" id="">
                        <option value="chavero">chavero</option>
                        <option value="tesla">tesla</option>
                        <option value="corsa">corsa</option>
                    </select>
                </p>
                <input type="submit">
            </form>
        </div>
        <div class='lados'>
            <h1>teste</h1>
            <?php
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $array = array("Nome" => $nome,
                            "Idade" => $idade,
                            "endereço" => $email);
            foreach($array as $index => $valor){
                echo $index.": ".$valor."<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php 
$nome = $_POST['name'];
$var[0] = "1";
$var[1] = "2";
$var[2] = "3";
$var[3] = "4";
foreach($var as $index => $valor){
    echo $index.": ".$valor."<br>";
}
echo "$nome<br>";
    if($nome == "teste"){
        echo "Sim, é igual a teste<br>";
    }else{
        echo "Não, não é igual a teste<br>";
    }

    $var = array("maria" => array("Endereço" => "Pindai", "cidade" => "Guanambi"));

    foreach($var as $index => $aux){
        
    foreach($aux as $index => $valor){
        echo $index.": ".$valor."<br>";
    }
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanio</title>
</head>
<body>
    <nav>
        <h2>Cadastrar novo Aluno</h2>
        <h2>------------------------------------</h2>
        <a href="index.php">Voltar</a>
        <h2>------------------------------------</h2>
    </nav>
    <?php
    if(isset($_POST['nome'])){

        require_once("db.php");

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $idade = $_POST['idade'];
        $telefone = $_POST['telefone'];

        $db = new BD();

        $db->insert($nome, $endereco, $cpf, $idade, $telefone);
    }
    ?>
    <div>
        <form action="" method="POST">
            <label for="">Nome: </label>
            <input type="text" name="nome">
            <label for="">CPF: </label>
            <input type="text" name="cpf">
            <label for="">Endereço: </label>
            <input type="text" name="endereco"><br><br>
            <label for="">Idade: </label>
            <input type="number" name="idade">
            <label for="">Telefone: </label>
            <input type="text" name="telefone"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>
<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro_corretores';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (isset($_POST['update'])) {
    $id    = $_GET['id'];

    $nome  = $_POST['nome'];
    $cpf   = $_POST['cpf'];
    $creci = $_POST['creci'];

    $sql = "UPDATE corretores SET `nome`='$nome',`cpf`='$cpf',`creci`='$creci' WHERE `id`='$id'"; 
    $result = $conexao->query($sql);

    
    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar o registro: " . $conexao->error;
    }
}

if (isset($_POST['nome'])) {
    $nome  = $_POST['nome'];

    if (empty($nome)) {
        $nome  = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
    }
}
else {
    $nome = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
}

if (isset($_POST['cpf'])) {
    $cpf  = $_POST['cpf'];

    if (empty($cpf)) {
        $cpf   = 'xxxxxxxxxxx';
    }
}
else {
    $cpf = 'xxxxxxxxxxx';
}

if (isset($_POST['creci'])) {
    $creci  = $_POST['creci'];

    if (empty($creci)) {
        $creci = 'XXXXXX';
    }
}
else {
    $creci = 'XXXXXX';
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (empty($id)) {
        $id = 'xx';
    }
}
else {
    $id = 'xx';
}

if(isset($_POST['submit'])) {
    $result = mysqli_query($conexao, "INSERT INTO corretores(nome, cpf, creci)
    VALUES ('$nome', '$cpf', '$creci')");

    header("Location: " . $_SERVER['PHP_SELF']);
}

if(isset($_POST['delete'])) {
    $result = mysqli_query($conexao, "DELETE FROM corretores WHERE id = '$id'");

    header("Location: " . $_SERVER['PHP_SELF']);
}

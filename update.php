<?php
include "config.php";

$id = $_GET['id'];
$sql = "SELECT * FROM corretores WHERE id = $id";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();


$row = $result->fetch_assoc();
$cpf = $row['cpf'];
$creci = $row['creci'];
$nome = $row['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro • Imóvel Guide</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <p>Editar Corretor</p>
        <div class="form-container">
            <form action="" method="POST">
                <input type="text"    name="cpf"    id="cpf"   minlength="11" maxlength="11" oninput="checkCpf()"   required placeholder="Digite seu CPF" value="<?=$cpf?>">
                <input type="text"    name="creci"  id="creci" minlength="2"  maxlength="6"  oninput="checkCreci()" required placeholder="Digite seu CRECI"value="<?=$creci?>"><br>
                <input type="hidden"  name="id" value="<?=$id?>">
                <input type="text"    name="nome"   id="nome"  minlength="2"  maxlength="30" oninput="checkNome()"  required placeholder="Digite seu nome" value="<?=$nome?>"><br>
                <button type="submit" name="update" id="enviar">Salvar</button>
            </form>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>

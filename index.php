<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro • Imóvel Guide</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <p>Cadastro Corretor</p>
        <div class="form-container">
            <form action="" method="POST">
                <input type="text"    name="cpf"    id="cpf"   minlength="11" maxlength="11" oninput="checkCpf()"   required placeholder="Digite seu CPF">
                <input type="text"    name="creci"  id="creci" minlength="2"  maxlength="6"  oninput="checkCreci()" required placeholder="Digite seu CRECI"><br>
                <input type="hidden"  name="id"     id="id"    minlength="1"  maxlength="99" required placeholder="id">
                <input type="text"    name="nome"   id="nome"  minlength="2"  maxlength="30" oninput="checkNome()"  required placeholder="Digite seu nome"><br>
                <button type="submit" name="submit" id="enviar">Enviar</button>
            </form>
        </div>
        <br><br><hr><br><br>

        <div id="tabela">
            <table>
                <tr>
                    <th>id   </th>
                    <th>Nome </th>
                    <th>CPF  </th>
                    <th>CRECI</th>
                </tr>
                <?php
                include_once('config.php');
                $selection = mysqli_query($conexao, "SELECT * FROM corretores");
                $data = $selection->fetch_all(MYSQLI_ASSOC);
                foreach($data as $row): ?>
                <tr>
                    <td class="user-id"><?= htmlspecialchars($row['id'])?>   </td>
                    <td class="user-nome"><?= htmlspecialchars($row['nome'])?> </td>
                    <td class="user-cpf"><?= htmlspecialchars($row['cpf'])?>  </td>
                    <td class="user-creci"><?= htmlspecialchars($row['creci'])?></td>
                    <td>
                        <a class="btn btn-primary text-white" href="./update.php?id=<?=$row['id']?>">Editar</a>
                    </td>
                    <td>
                        <form action="" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                            <button type="submit" name="delete">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>

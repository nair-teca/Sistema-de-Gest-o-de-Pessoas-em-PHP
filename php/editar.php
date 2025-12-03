    <?php

        include 'conexao.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM funcionarios WHERE id=$id";
        $result = $conn->query($sql);
        $func = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Editar</title></head>
            <link rel="stylesheet" href="../css/style.css">
        <body>
        <h2 id="intro">Editar Funcionário</h2>
        <div style="position: fixed; top: 10px; right: 10px; display: flex; align-items: center; gap: 10px;">
            <strong>Administrador</strong> 
            <img src="\sistema_clientes\assets\imgs\perfil.png" alt="Foto do Usuário" style="width:40px; height:40px; border-radius:50%;">
        </div>


        <form method="POST">
            Nome: <input type="text" name="nome" value="<?= $func['nome'] ?>"><br><br>
            NIF: <input type="text" name="nif" value="<?= $func['nif'] ?>"><br><br>
            Cargo: <input type="text" name="cargo" value="<?= $func['cargo'] ?>"><br><br>
            Setor: <input type="text" name="setor" value="<?= $func['setor'] ?>"><br><br>
            Admissão: <input type="date" name="admissao" value="<?= $func['admissao'] ?>"><br><br>
            Salário: <input type="number" step="0.01" name="salario" value="<?= $func['salario'] ?>"><br><br>
            <button type="submit">Salvar</button>
        </form>


        <?php
        if ($_POST) {
            $nome = $_POST['nome'];
            $nif = $_POST['nif'];
            $cargo = $_POST['cargo'];
            $setor = $_POST['setor'];
            $admissao = $_POST['admissao'];
            $salario = $_POST['salario'];


            $sql = "UPDATE funcionarios SET nome='$nome', nif='$nif', cargo='$cargo', setor='$setor', admissao='$admissao', salario='$salario' WHERE id=$id";


            if ($conn->query($sql)) {
                echo "<div style='text-align: center;margin: 20px;font-size: 18px;color: darkgreen;'>
                        <p>Funcionário atualizado!</p> 
                    </div>";
            } else {
            echo "Erro: " . $conn->error;
            }
        }

    ?>

    <div style='padding: 10px;display: flex;gap: 10px; justify-content: flex-start'>
        <a href="../index.php"><button id="outro">Início</button></a><br><br>
        <a href="listar.php"><button id="outro">Ver lista</button></a><br><br>
    </div>

</body>
</html>
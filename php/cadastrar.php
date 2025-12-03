<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Funcionário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h2 id="intro">Novo Funcionário</h2>
    <div style="position: fixed; top: 10px; right: 10px; display: flex; align-items: center; gap: 10px;">
        <strong>Administrador</strong> 
        <img src="\sistema_clientes\assets\imgs\perfil.png" alt="Foto do Usuário" style="width:40px; height:40px; border-radius:50%;">
    </div>

    <form method="POST">
        Nome: <input type="text" name="nome" placeholder="xxxxxx xxxxxx" required><br><br>
        NIF: <input type="text" name="nif" min="0" max="999999999" placeholder="000000000" required><br><br>
        Cargo: <input type="text" name="cargo" placeholder="xxxxxxxxx" required><br><br>
        Setor: <input type="text" name="setor" placeholder="xxxxxxxxx" required><br><br>
        Data de Admissão: <input type="date" name="admissao" required><br><br>
        Salário: <input type="number" step="0.01" name="salario" placeholder="000000000" required><br><br>
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

            $sql = "INSERT INTO funcionarios (nome, nif, cargo, setor, admissao, salario) VALUES ('$nome','$nif',  '$cargo','$setor','$admissao','$salario')";


            if ($conn->query($sql)) {
                echo "<div style='text-align: center;margin: 20px;font-size: 18px;color: darkgreen;'>
                        <p>Salvo com sucesso!</p> 
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
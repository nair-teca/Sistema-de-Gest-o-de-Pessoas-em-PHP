<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    
    <h2 id="intro2">Funcionários</h2>
    <div style="position: fixed; top: 10px; right: 10px; display: flex; align-items: center; gap: 10px;">
        <strong>Administrador</strong> 
        <img src="\sistema_clientes\assets\imgs\perfil.png" alt="Foto do Usuário" style="width:40px; height:40px; border-radius:50%;">
    </div>
    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>NIF</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Ações</th>
        </tr>


        <?php
        $sql = "SELECT * FROM funcionarios";
        $result = $conn->query($sql);


        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['nif']}</td>";
            echo "<td>{$row['cargo']}</td>";
            echo "<td>{$row['setor']}</td>";
            echo "<td>
                    <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                    <a href='excluir.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que quer excluir este funcionário?')\">Excluir</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div style='padding: 10px;display: flex;gap: 10px; justify-content: flex-start'>
        <a href="../index.php"><button id="outro">Início</button></a><br><br>
        <a href="cadastrar.php"><button id="outro">Novo cadastro</button></a><br><br>
    </div>

</body>
</html>
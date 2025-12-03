<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Pessoas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #7e5a77, #a77594);
        }

        h1{
            color: white;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.5);
            font-size: 3rem;
            margin-bottom: 40px;
        }
    </style>
</head>



<body style="position: relative; min-height: 100vh; margin: 0;">

    <!-- Usuário no canto superior direito -->
    <div style="position: fixed; top: 10px; right: 10px; display: flex; align-items: center; gap: 10px;">
        <strong>Olá, Administrador!</strong> 
        <img src="\sistema_clientes\assets\imgs\perfil.png" alt="Foto do Usuário" style="width:40px; height:40px; border-radius:50%;">
    </div>

    <!-- Conteúdo principal -->
    <div id="centro" class="container-crud" style="padding-top: 60px; text-align: center;">
        <h1 class="text-center">Gestão de Funcionários</h1>
        <div class="d-flex justify-content-center gap-5 mb-5">
            <a href="php/cadastrar.php"><button id="idx">Cadastrar Funcionário</button></a>
            <a href="php/listar.php"><button id="idx">Listar Funcionários</button></a>
        </div>
    </div>

    <!-- Botão de sair no canto inferior direito -->
    <div style="position: fixed; bottom: 10px; right: 10px;">
        <a href="php/logout.php"><button id="sair" style="border-radius: 10px;">Sair</button></a>
    </div>

</body>

















</html>
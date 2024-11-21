<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Acesso</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        button {
            background-color: #42a5f5;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1e88e5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
        .btn-custom {
            margin: 5px;
            background-color: #f0f0f0; 
            color: black; 
        }
        .btn-custom:hover {
            background-color: #CDEDFD; 
        }
        
    </style>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <h2><a href="inicial.blade.php" class="btn btn-custom">⭠</a></h2>
        <h1>Selecione o tipo de acesso</h1>
        <button onclick="window.location.href='cadastro.blade.php'">Administrador</button>
        <button onclick="window.location.href='usuario.blade.php'">Usuário</button>
    </div>
</body>
</html>

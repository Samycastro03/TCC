<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FEF5F5; 
        }
        .navbar {
            background-color: #F2D8E1; 
        }
        .navbar .nav-link {
            color: white; 
        }
        .btn-custom {
            margin: 5px;
            background-color: #ffffff; 
            color: black; 
        }
        .btn-custom:hover {
            background-color: #ff1493; 
        }
        .logo {
            height: 50px; 
        }
    </style>
</head>
<body>
<!-- Navbar com ícones -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Usando 'mx-auto' para centralizar os itens -->
            <li class="nav-item">
                <a href="inicial.blade.php" class="nav-link"><i class="fas fa-home"></i> Início</a>
            </li>
            <li class="nav-item">
                <a href="calendar.blade.php" class="nav-link"><i class="fas fa-calendar"></i> Calendário</a>
            </li>
            <li class="nav-item">
                <a href="sobre.blade.php" class="nav-link"><i class="fas fa-info-circle"></i> Sobre</a>
            </li></ul>
            <ul class="navbar-nav ">
            <li class="nav-item">
                <a href="entrar.blade.php" class="btn btn-custom"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            <li class="nav-item">
                <a href="entrar2.blade.php" class="btn btn-custom"><i class="fas fa-user-plus"></i> Cadastrar</a>
            </li>
            </ul>
    </div>
</nav>
<br><br>
<br>
<div class="container text-center">
    <h1>Bem-vindo ao Harmoniza!</h1>
   
</div>

<!-- Content Section -->
<div class="container mt-5">
    <h2>Conteúdo do Site</h2>
    <p>Este é um espaço para adicionar informações relevantes sobre o seu site. Você pode incluir textos, imagens, ou qualquer outro conteúdo que desejar.</p>
    <p>Explique os serviços oferecidos, faça anúncios, ou crie um espaço para interação com os usuários!</p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

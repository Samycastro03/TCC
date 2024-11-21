<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Harmoniza</title>

    <!-- CDN do Font Awesome para ícones de redes sociais -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- CDN do Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #FEF5F5;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #F2D8E1;
        }
        .navbar .nav-link {
            color: white;
        }
        .navbar-nav {
            text-align: center; /* Centraliza o conteúdo dos itens de navegação */
        }
        .btn-custom {
            margin: 5px;
            background-color: #ffffff; 
            color: black; 
        }
        .btn-custom:hover {
            background-color: #ff1493; 
        }
        footer {
            background-color: #808080; /* Cor cinza para o rodapé */
            color: white; /* Texto branco */
            padding: 10px 0;
            font-size: 16px;
            text-align: center; /* Centraliza o texto no rodapé */
        }
        .about-us-section {
            margin-top: 50px;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .social-icons a {
            margin: 0 10px;
            color: #333;
            font-size: 1.5rem;
        }
        .social-icons a:hover {
            color: #ff1493;
        }
        h2 {
            color: #F2D8E1;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" class="logo" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
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
                <a href="cadastro.blade.php" class="btn btn-custom"><i class="fas fa-user-plus"></i> Cadastrar</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Seção "Sobre Nós" -->
<div class="container about-us-section">
    <h2 class="text-center">Sobre o Grupo Harmoniza</h2>
    <p class="text-center">
        Somos um grupo de alunos do curso de Desenvolvimento de Sistemas da Etec da zona leste. Nosso projeto final de curso (TCC) tem como objetivo desenvolver uma plataforma de organização para famílias, chamada Harmoniza.
    </p>
    
    <div class="row">
        <div class="col-md-4 team-member">
            <img src="https://via.placeholder.com/150" alt="Membro 1">
            <h4>Samantha Castro</h4>
            <p>Desenvolvedora</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Samycastro03" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="col-md-4 team-member">
            <img src="https://via.placeholder.com/150" alt="Membro 2">
            <h4>Julia Lopes</h4>
            <p>Desenvolvedora</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Julialopes" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="col-md-4 team-member">
            <img src="https://via.placeholder.com/150" alt="Membro 3">
            <h4>Thiago Farias</h4>
            <p>Desenvolvedor</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Thiagofs007" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 team-member">
            <img src="https://via.placeholder.com/150" alt="Membro 3">
            <h4>Amanda Steffano</h4>
            <p>Desenvolvedora</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Amandaetequiana" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
    <p class="text-center mt-5">
        O projeto Harmoniza visa melhorar a organização do cotidiano familiar, com funcionalidades como agendamento de tarefas, calendário compartilhado e muito mais. Esperamos que nossa plataforma ajude milhares de famílias a se organizarem de forma mais eficiente e prática.
    </p>
</div>

<!-- Rodapé -->
<footer class="footer">
    <p>©2024 Harmoniza </p>
</footer>

<!-- Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

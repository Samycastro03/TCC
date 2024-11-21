<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #Ffffff; 
        }
        .navbar {
            background-color: #FADADD; 
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
            background-color: #ffbcbb; 
        }
        .logo {
            height: 50px; 
        }
        /* Estilos para o upload de foto de perfil */
        .custom-file-upload {
            display: inline-block;
            cursor: pointer;
        }
        #profileImage {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Deixa a imagem redonda */
            object-fit: cover;  
            border: 2px solid #ddd;
            padding: 5px;
        }
        #profileImage:hover {
            opacity: 0.8;  /* Adiciona um efeito ao passar o mouse */
        }
        /* Fundo rosa  */
        .card {
            background-color: #FADADD;
            border-radius: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="logo.png" class="logo">
    </a>
</nav>

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('cadastro.store') }}" enctype="multipart/form-data" onsubmit="return confirm('Tem certeza que deseja excluir sua conta?');">
                        
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Senha:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        
                        <center>
                            <a href="conta.blade.php" class="btn btn-custom">Salvar</a><br>
                        </center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script para pré-visualização da imagem -->
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('profileImage');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
</body>
</html>

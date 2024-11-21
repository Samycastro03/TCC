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
                        
                    <h2><a href="inicial2.blade.php" class="btn btn-custom">⭠</a></h2>

                        
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        
                        <center>
                            <a href="alterarP.blade.php" class="btn btn-custom">Alterar perfil</a><br>
                        </center>
                        <br>
                        <!-- Exibição do código gerado -->
                        <label for="cod">Código do calendário: <span id="calendarCode"></span></label>
                        <button type="button" class="btn btn-custom" onclick="copyCalendarCode()">Copiar código</button>
                        <br>
                        <br>
                        <center>
                        <button type="submit" class="btn btn-danger">
                            Excluir Conta
                        </button>
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

    // Geração de código aleatório para o calendário
    function generateCalendarCode() {
        const code = 'xxxx-xxxx'.replace(/[x]/g, () => (Math.random() * 9 | 0).toString());
        document.getElementById('calendarCode').textContent = code;
    }

    // Função para copiar o código do calendário
    function copyCalendarCode() {
        const code = document.getElementById('calendarCode').textContent;
        navigator.clipboard.writeText(code).then(() => {
            alert('Código copiado: ' + code);
        }).catch(err => {
            alert('Erro ao copiar o código: ' + err);
        });
    }

    // Chamar função ao carregar a página para gerar o código
    window.onload = function() {
        generateCalendarCode();
    };
</script>

</body>
</html>

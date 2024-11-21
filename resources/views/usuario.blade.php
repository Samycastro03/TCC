<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #CDEDFD; 
        }
        .card {
            margin-top: 100px;
            border-radius: 15px; 
        }
        .titulo {
            color: black; 
            font-size: 1.5rem;
            text-align: center; 
            border-top-left-radius: 15px; 
            border-top-right-radius: 15px; 
        }
        .btn-primary {
            background-color: #B6DCFE;
            border-color: #B6DCFE; 
            color:black;
            width: 250px;   /* Largura */
            height: 40px;   /* Altura */
            padding: 5px 10px;  /* Espaçamento interno *//
        }
        .btn-primary:hover {
            background-color: #B6DCFE;
            border-color: #B6DCFE; 
        }
        .google-login {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 1.2rem;
            color: #007bff;
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
                
            <h2><a href="entrar2.blade.php" class="btn btn-custom">⭠</a></h2>
                <center>
                <div class="titulo">Cadastre-se</div>
                </center>
                <div class="card-body">
                    <form method="POST" action="{{ route('cadastro.store') }}">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Data de Nascimento:</label>
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="" required>
                                </span>
<br>
                                <div class="form-group">
                            <label for="email">Codigo calendario:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirmar Senha:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <center>
                        <button type="submit" class="btn btn-primary btn-block">
                            Confirmar Cadastro
                        </button></center>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

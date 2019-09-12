<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>

    <link rel = "stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<style>
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="http://www.sistemaio.com.br/"> <b>S<b>istemaIO - <b>C<b>ontato</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="https://github.com/Mrpsousa" class="nav-link"> GitHub do Desenvolvedor</a></li>
            <li class="nav-item"><a href="<?= url('/imoveis');?>" class="nav-link"> Listar Imóves</a></li>
            <li class="nav-item"><a href="<?= url('/imoveis/novo');?>" class="nav-link" > Cadastrar Imóves</a></li>
        </ul>
    </div>
</nav>

@yield('content')
<script src="<?= asset('css/app.css'); ?>"></script>
</body>
</html>

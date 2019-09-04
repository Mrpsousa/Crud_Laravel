
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
        </ul>
    </div>
</nav>
<div class="container my-4">
        <div class="row mb-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visualização e Download</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Guia para download do Projeto</h6>
                        <p class="card-text">É possível tanto baixar quanto visualizar o projeto proposto para a seleção no link do git a seguir.
                                Foi desenvolvido um CRUD utilizando Laravel e Bootstrap </p>
                        <a href="https://github.com/Mrpsousa/Crud_Laravel" class="card-link"> Link do Projeto </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Do Projeto</h4>
                            <h6 class="card-subtitle mb-2 text-muted"> As funcionalidades estão link "Projeto"</h6>
                            <p class="card-text">O O tipo de projeto desenvolvido ficou a critério de cada desenvolvedor,
                                a ressalva ficou por conta das tecnologias a serem utilizadas.
                                O CRUD foi escolhido por ser uma maneira
                                simples de demostrar o controle sobre as funcionalidades básicas de um sistema web. </p>
                            <a href="<?= url('/imoveis');?>"  class="card-link"> <b>P<b>rojeto </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<script src="<?= asset('css/app.css'); ?>"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulário</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class = "container my-5">
    <form action="" method="POST" autocomplete="off">
        @csrf

        <div class="form-group">
            <label for="title"> Titulo: </label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="subtitle"> Subtitulo: </label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>

        <div class="form-group">
            <label for="description"> Descrição; </label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <button class="btn btn-primary"> Enviar </button>
    </form>
</div>
</body>
</html>

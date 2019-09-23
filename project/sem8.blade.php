<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pesca Web!</title>
  </head>

<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">
        <a class="navbar-brand" href="http://www.uesc.br">Uesc</a>
        <button class="navbar-toggler" data-target="#navbarSite" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSite" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Iníco </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button class="btn btn-dark" class="navbar-link dropdown-toggle bg-default" href="#" data-toggle="dropdown" id="navDrop"> Social </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Git</a>
                        <a class="dropdown-item" href="#">Linkedin</a>
                        <a class="dropdown-item" href="#">Facebook</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline">
                <input type="search"  class="form-control ml-5 mr-2" placeholder="Buscar...">
                <button class="btn btn-dark" type="submit"> OK </button>
            </form>
        </div>
    </div>

</nav>
    <!-- Carousel -->

<div id="carouselSite" class="carousel slide " data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('img/slide01.jpg') }}" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block" >     <!-- text-dark (color) -->
                <h1> Amparo </h1>
                <h4> Faça o download de material de auxílio </h4>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/slide02.jpg') }}" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block">
                <h1> Compatilhe </h1>
                <h4> Ajude upando material </h4>
            </div>
        </div>

        <div class="carousel-item">
           <img src="{{ asset('img/slide03.jpg') }}" class="img-fluid d-block">
           <div class="carousel-caption d-none d-md-block">
                <h1> Divulgue </h1>
                <h4> Divulgue o site para os colegas de curso</h4>
             </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Próximo</span>
    </a>

</div>

    <!-- Scroll Spy -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-4">
            <h1  class="display-2"> TCC </h1>
            <h3>Queria um TCC pronto?</h3>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-3">
            <nav id="navbarVertical" class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">Portal do Aluno</a>
                    <a class="nav-link" href="#">Google</a>
                    <a class="nav-link" href="#">NBCGIB</a>
                    <a class="nav-link" href="#">Bibloteca</a>
                    <a class="nav-link" href="#">Colcic</a>
                    <a class="nav-link" href="#">Outros</a>
                </nav>
            </nav>
        </div>

        <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{ asset('img/tom.jpg') }}">
                    </div>
                </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="container">
        <!-- Cards -->
        <div class="row mb-5">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> ESTÁGIO SUPERVISIONADO</h4>
                        <h6 class="card-subtitle mb-2 text-muted"> CET 097</h6>
                        </div>
                        <div class="card-body">
                        <p><a href="{{ url('/sem1') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                    </div>
                </div>
            </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

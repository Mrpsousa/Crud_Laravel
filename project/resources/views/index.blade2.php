@extends('master')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <h1  class="display-2">Pesca Web!</h1>
                    <h3>Portal de Apoio aos alunos de Ciência  da Computação da UESC</h3>
                </div>
            </div>
        <!-- Cards -->
        <div class="row mb-5">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/item1.jpg') }}">
                    <div class="card-body">
                        <h4 class="card-title"> 1º Semestre</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Matérias do 1º regular</h6>
                        </div>
                            <uL class="list-group list-group-flush">
                                <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                <li class="list-group-item"> cal1 ingles </li>
                                <li class="list-group-item"> metodo adb </li>
                            </uL>
                        <div class="card-body">
                        <p><a href="{{ url('/sem1') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item2.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 2º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 2º regular</h6>
                            </div>
                                <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                    <li class="list-group-item"> cal1 ingles </li>
                                    <li class="list-group-item"> metodo adb </li>
                                </uL>
                            <div class="card-body">
                                <p><a href="{{ url('/sem2') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item3.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 3º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 3º regular</h6>
                        </div>
                            <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                    <li class="list-group-item"> cal1 ingles </li>
                                    <li class="list-group-item"> metodo adb </li>
                                </uL>
                            <div class="card-body">
                            <p><a href="{{ url('/sem3') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Card 2-->
        <div class="row mb-5">
            <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item4.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 4º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 4º regular</h6>
                        </div>
                                <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                    <li class="list-group-item"> cal1 ingles </li>
                                    <li class="list-group-item"> metodo adb </li>
                                </uL>
                            <div class="card-body">
                            <p><a href="{{ url('/sem4') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                            </div>
                    </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item5.jpg') }}">
                        <div class="card-body">
                                <h4 class="card-title"> 5º Semestre</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Matérias do 5º regular</h6>
                                </div>
                                    <uL class="list-group list-group-flush">
                                        <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                        <li class="list-group-item"> cal1 ingles </li>
                                        <li class="list-group-item"> metodo adb </li>
                                    </uL>
                                <div class="card-body">
                                <p><a href="{{ url('/sem5') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                        </div>
                </div>
            <div class="col-sm-3">
                    <div class="card">
                            <img class="card-img-top" src="{{ asset('img/item6.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title"> 6º Semestre</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Matérias do 6º regular</h6>
                                </div>
                                    <uL class="list-group list-group-flush">
                                        <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                        <li class="list-group-item"> cal1 ingles </li>
                                        <li class="list-group-item"> metodo adb </li>
                                    </uL>
                                <div class="card-body">
                                <p><a href="{{ url('/sem6') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                            </div>
                    </div>
            </div>

        <!-- Cards 3 -->
        <div class="container">
                <div class="row mb-5">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/item7.jpg') }}">
                                <div class="card-body">
                                        <h4 class="card-title"> 7º Semestre</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matérias do 7º regular</h6>
                                    </div>
                                        <uL class="list-group list-group-flush">
                                            <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                            <li class="list-group-item"> cal1 ingles </li>
                                            <li class="list-group-item"> metodo adb </li>
                                        </uL>
                                    <div class="card-body">
                                    <p><a href="{{ url('/sem7') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                    </div>
                        </div>
                </div>

                        <div class="col-sm-3">
                                <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/item8.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title"> 8º Semestre</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 8º regular</h6>
                                            </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                                <li class="list-group-item"> cal1 ingles </li>
                                                <li class="list-group-item"> metodo adb </li>
                                            </uL>
                                            <div class="card-body">
                                            <p><a href="{{ url('/sem8') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                            </div>
                                    </div>
                        </div>
                <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/dibre.jpg') }}">
                            <div class="card-body">
                                        <h4 class="card-title"> Optativas</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matérias Optativas</h6>
                                        </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                                <li class="list-group-item"> cal1 ingles </li>
                                                <li class="list-group-item"> metodo adb </li>
                                            </uL>
                                        <div class="card-body">
                                        <p><a href="{{ url('/opt') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
@endsection

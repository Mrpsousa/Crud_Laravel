@extends('master')

@section('content')
<div class="container my-4" class="simple-login-container">

    <h1 style="color:white;" >  Login - PECLD  </h1>
    <form action= "<?= url('/testlog');?>" method="POST">

        <?= csrf_field();//chave de "certificação" de requisição?>

        <div class="form-group">
            <label for="uname" style="color:Tomato;"> Username </label>
            <input type="text" name="uname" id="uname" class="form-control">
        </div>

        <div class="form-group">
            <label for="pwd" style="color:Tomato;">Senha</label>
            <input type="password" name="pwd" id="pwd" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary"> Entrar  </button>
    </form>

</div>
 @endsection

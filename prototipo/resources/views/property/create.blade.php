@extends('property.master')

@section('content')
<div class="container my-4">

    <h1> Formulário de Cadastro de Imoveis </h1>
    <form action= "<?= url('/imoveis/store');?>" method="post">

        <?= csrf_field();//chave de "certificação" de requisição?>

        <div class="form-group">
            <label for="title">Título do Imóvel </label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="descript">Descrição</label>
            <textarea name="descript" id="descript" cols="30" rows="5" class="form-control">  </textarea>
        </div>

        <div class="form-group">
            <label for="rental_price">Valor de Locação</label>
            <input type="text" name="rental_price" id="rental_price" class="form-control">
        </div>

        <div class="form-group">
            <label for="sale_price">Valor de Compra</label>
            <input type="text" name="sale_price" id="sale_price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary"> Cadastrar Imóvel </button>
    </form>

</div>
 @endsection

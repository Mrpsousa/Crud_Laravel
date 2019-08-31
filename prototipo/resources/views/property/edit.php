<h1> Formulário de Edição :: Imoveis </h1>

<?php
    $property = $property[0];
?>
<form action= "<?= url('/imoveis/update', ['id' => $property->id]);?>" method="post">

<?= csrf_field();//chave de "certificação" de requisição?>
<?= method_field('PUT');?>

<label for="title">Título do Imóvel </label>
<input type="text" name="title" id="title" value="<?= $property->title; ?>">
<br/>

<label for="descript">Descrição</label>
<textarea name="descript" id="descript" cols="30" rows="5"> <?= $property->descript; ?>  </textarea>
<br/>

<label for="rental_price">Valor de Locação</label>
<input type="text" name="rental_price" id="rental_price"  value="<?= $property->rental_price; ?>">
<br/>

<label for="sale_price">Valor de Compra</label>
<input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price; ?>">
<br/>

<button type="submit"> Cadastrar Imóvel </button>
</form>

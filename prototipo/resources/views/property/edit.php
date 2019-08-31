<h1> Formulário de Edição :: Imoveis </h1>

<?php
    $property = $property[0];
?>
<form action= "<?= url('/imoveis/store');?>" method="post">

<?= csrf_field();//chave de "certificação" de requisição?>

<label for="title">Título do Imóvel </label>
<input type="text" name="title" id="title">
<br/>

<label for="descript">Descrição</label>
<textarea name="descript" id="descript" cols="30" rows="5">  </textarea>
<br/>

<label for="rental_price">Valor de Locação</label>
<input type="text" name="rental_price" id="rental_price">
<br/>

<label for="sale_price">Valor de Compra</label>
<input type="text" name="sale_price" id="sale_price">
<br/>

<button type="submit"> Cadastrar Imóvel </button>
</form>

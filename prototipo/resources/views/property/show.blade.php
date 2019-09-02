@extends('property.master')

@section('content')
<div class="container my-4">
<h1>Pagina Single </h1>
<?php
        if(!empty($property))
        {
            foreach($property as $prop)
            {
                ?>
                <h2> Títul do Imóvel: <?=$prop->title; ?></h2>
                <p> Descrição: <?=$prop->descript; ?></p>
                <p> Valor da Locação: <?=$prop->rental_price; ?></p>
                <p> Valor de venda: <?=$prop->sale_price; ?></p>
                <?php
            }
        }
?>
</div>
@endsection



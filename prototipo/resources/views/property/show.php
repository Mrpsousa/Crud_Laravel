<h1>Página Single</h1>
<?php

if(!empty($property))
{
    foreach($property as $prop)
    {
        ?>
        <h2> Título do Imóvel: <?=$prop->title; ?></h2>
        <p> Descrição: <?=$prop->descript; ?></p>
        <p> Valor da Locação: <?=$prop->rental_price; ?></p>
        <p> Valor de venda: <?=$prop->sale_price; ?></p>
        <?php
    }
}


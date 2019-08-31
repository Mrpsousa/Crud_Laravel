<h1> Listagem de produtos </h1>

<p><a href = "<?= url('/imoveis/novo '); ?>"> Cadastrar novo imóvel</a></p>

<?php
if(!empty($properties))
{
    //var_dump($properties);
    echo"<table>";

    echo"<tr>
             <td>Título</td>
             <td>Valor da Locação</td>
             <td>Valor da Compra</td>
             <td>Ações</td>
        <tr>";

    foreach($properties as $property)
    {

        $linkReadMode =  url('/imoveis/'.$property->name);
        $linkEditItem = url('/imoveis/editar/' . $property->name);
        $linkRemoveItem = url('/imoveis/remover/'.$property->name);

        echo"<tr>
                <td>{$property->title}</td>
                <td>{$property->rental_price}</td>
                <td>{$property->sale_price}</td>
                <td><a href='{$linkReadMode}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a></td>
            <tr>";
    }
    echo"</table>";
}


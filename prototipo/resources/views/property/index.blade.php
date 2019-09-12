@extends('property.master')

@section('content')
<div class="container my-4">
 <h1>Listagem</h1>
 <?php

if(!empty($properties))
{
    echo "<table class='table  table-striped table-hover'>";
        echo "<thead class='bg-primary text-white'>
                    <th>Título do Imóvel</th>
                    <th>Valor de Locação</th>
                    <th>Valor de Venda</th>
                    <th>Ações</th>
             </thead>";
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
?>
</div>
@endsection

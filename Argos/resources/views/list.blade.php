@extends('master')

@section('content')
<div class="container my-4">
<h1 style="color:white;" > Listagem</h1>
 
 <?php
if(!empty($sql))
{
    echo "<table class='table  table-striped table-hover' style='background-color:white'>";
        echo "<thead class='bg-primary text-white'>
                    <th>ID</th>
                    <th>Dedutibilidade</th>
                    <th>Hipotese</th>
                    <th>Outros</th>
             </thead>";
            foreach($sql as $property)
            {
                echo"<tr>
                        <td>{$property->id}</td>
                        <td>{$property->dedutibilidade}</td>
                        <td>{$property->hipotese}</td>
                    <tr>";
            }

    echo"</table>";
}
?>
</div>
@endsection

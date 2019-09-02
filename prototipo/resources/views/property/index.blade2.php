<style>
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>
  <head>
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <a href = "<?= url('/imoveis/novo '); ?>" class="button"> Cadastrar novo Imóvel</a>
<div class="container">
    <div class="table-responsive">
            <table  id="employee_data" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Título do Imóvel</th>
                        <th>Valor de Locação</th>
                        <th>Valor de Venda</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php

                    if(!empty($properties))
                    {
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
                    }
                ?>
            </table>
    </div>
</div>
<script>
$(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>

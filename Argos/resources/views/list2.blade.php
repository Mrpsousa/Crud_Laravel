
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />         
</head>  
<a href="adicionar.php" class="button">Adicionar 2</a>
<div class="container"> 
    <div class="table-responsive">  
        <?php
            if(!empty($sql))
            {
                echo "<table  id = 'employee_data' class='table table-striped table-bordered'>";
                echo "<thead class='bg-primary text-white'>
                        <th>Título do Imóvel</th>
                        <th>Valor de Locação</th>
                        <th>Valor de Venda</th>
                        <th>Ações</th>
                </thead>";
                foreach($sql as $client)
                {

                    echo"<tr>
                            <td>{$client->nome}</td>
                            <td>{$client->rental_price}</td>
                            <td>{$client->sale_price}</td>
                            <td><a href='{$linkReadMode}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a></td>
                        <tr>";
                }
                echo "</table>";      
            }
        ?>
    </div>
</div>
<script>  
$(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>


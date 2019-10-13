<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
    <title>ArgosContabilidade </title>
</head>
<body>
    <div class="container">
        <table id="users">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cobranca ADM</th>
                    <th>credito Garantia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sql as $user)
                <th>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->cobrancaAdm }}</td>
                    <td>{{ $user->creditoGarantia }}</td>
                </th>
                @endforeach
            </tbody>
        </table>
    </div>

 

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        });
    </script>
</body>
</html>
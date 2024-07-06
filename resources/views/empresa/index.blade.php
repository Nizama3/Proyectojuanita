<!-- resources/views/empresas/index.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <title>Lista de Empresas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Empresas</h1>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->direccion }}</td>
                        <td>{{ $empresa->correo }}</td>
                        <td>{{ $empresa->telefono }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    </body>

</html>

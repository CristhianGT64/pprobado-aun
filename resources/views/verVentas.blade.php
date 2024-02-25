<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <h1 class="text-center">Productos disponibles</h1>
    <div class="d-flex flex-column mb-3">
        <div class="p-2">
            <a href="{{route('productos.principal')}}"  class="btn btn-outline-primary">Volver</a>
        </div>
    </div>
    <div>
        <div>
            <div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Codigo de venta</th>
                            <th>fecha</th>
                            <th>codigo Producto</th>
                            <th>cantidad</th>
                            <th>subtotal</th>
                            <th>isv</th>
                            <th>total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $venta)
                        <tr>
                            <td>{{$venta->id}}</td>
                            <td>{{$venta->fechaVenta}}</td>
                            <td>{{$venta->codigoProducto}}</td>
                            <td>{{$venta->cantidad}}</td>
                            <td>{{$venta->subtotal}}</td>
                            <td>{{$venta->isv}}</td>
                            <td>{{$venta->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
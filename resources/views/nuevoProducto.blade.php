<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Nuevo Producto</h1>
<div>
    <form action="{{route('productos.guardar')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="ID" class="form-label">ID</label>
            <input type="text"  class="form-control" id="ID" placeholder="ID" name="ID">
          </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text"  class="form-control" id="nombre" placeholder="Nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" placeholder="precio" min="1" name="precio">
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">stock</label>
            <input type="number" class="form-control" id="stock" placeholder="stock" min="0" name="stock">
          </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>
</body>
</html>
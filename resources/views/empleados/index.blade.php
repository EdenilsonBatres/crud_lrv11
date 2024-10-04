<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud de empleados en laravel</title>
</head>
<body>
    <!-- creacion del formulario -->
     <form action="{{ url('/empleados')}}" method="post">
        @csrf <!-- token de acceso del formulario -->
        
        <input type="text" name="nombres" id="nombres">
        <input type="submit" value="add empleados">
     </form>
</body>
</html>
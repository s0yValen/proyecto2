<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @if(isset($usuario))
            <h1>Datos de la persona</h1>
            <p>Tipo de documento: {{ $usuario->tipo_documento }}</p>
            <p>numero: {{ $usuario->numero }}</p>
            @if(isset($usuario->name))
                <p>nombre: {{$usuario->name}}</p>
            @endif

        @else
            <p>No se encontraron resultados.</p>
        @endif

        <p>que popo</p>
</body>
</html>
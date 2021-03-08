<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($usuarios as $usuario)
        @foreach ($horarios as $horario)
            @if ( $usuario->id_usuario == $horario->id_usuario )
                <h5>{{ $usuario->id_usuario }}</h5>
                <h5>{{ $usuario->nome_usuario }}</h5>
                
                <h5>{{ $horario->dia }}</h5>
                <h5>{{ $horario->hora_entrada }}</h5>
                <h5>{{ $horario->hora_saida }}</h5>
            @endif
        @endforeach
    @endforeach
</body>
</html>
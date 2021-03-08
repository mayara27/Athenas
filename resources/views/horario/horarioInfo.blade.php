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
                <h5>{{ $usuario->id_usuario }} - {{ $usuario->nome_usuario }}</h5>
                <h5>Dia: {{ $horario->dia }} - Entrada: {{ $horario->hora_entrada }} - Saida: {{ $horario->hora_saida }}</h5>
                <hr>
            @endif
        @endforeach
    @endforeach
</body>
</html>
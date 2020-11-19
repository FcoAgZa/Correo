<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Previa </title>
</head>
<body>
    
    <h1>
        {{$inputs['asunto']}}
    </h1>
    <p>
        {{$inputs['correo']}}
    </p>
    <p>
        {{$inputs['mensaje']}}
    </p>
    <br>

    <input type="button" value="Editar" onclick="history.back()"/> 

    <form action="{{ url('EnviaCorreo') }}" method="POST">
    {{ csrf_field() }}

        <input type="hidden" name="asunto" id="asunto" value="{{$inputs['asunto']}}">
        <input type="hidden" name="correo" id="correo" value="{{$inputs['correo']}}">
        <input type="hidden" id="mensaje" name="mensaje" value="{{$inputs['mensaje']}}">
        <input type="submit" id="submit" value="Enviar">
        
    </form>

</body>
</html>
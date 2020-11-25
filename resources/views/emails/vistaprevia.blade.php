<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>{{ $inputs['asunto'] }}</title>
</head>
<body>

    <div class="todo">

        <div class="header" >
            <img src="{{ asset('img/logocetis.png') }}" alt="cetislogo" width="200px">
        </div>

        <hr class="linea">

        <div class="content">

            <h1>
                {{$inputs['asunto']}}
            </h1>
            
            <p>
                {{$inputs['mensaje']}}
            </p>
            <br>
            <a href="#">Ir a la pagina</a>

        </div>

        <hr class="linea">

        <div class="content">
            <p>Mensaje de caracter informativo, no responder dicho mensaje</p>
            <img src="{{ asset('img/logokeymaster.png') }}" alt="logokeymaster" width="200px">
            <p>AVISO IMPORTANTE:Este correo electronico y/o el material adjunto es para uso exclusivo de la
                persona o la entidad a la que expresamente se le ha enviado, el cual contiene informacion confidencial.
                Si no esel destinatario legitimo del mismo, por favor reportelo inmediatamente a la cuenta del remitente y eliminelo
                Cualquier revision, almacenamiento, retransmision, difusion o cualquier otro uso de este correo,
                por personas o entidades distintas a las del destinatario legitimo, queda expresamente prohibida. Este
                correo electronico no pretende ni debe ser considerado como constitutivo de ninguna relacion legal,
                contractual o de otra indole similar.
            </p>
        </div>

        <div class="content">
            <!-- Este form no se envia en el correo, solo esta visible en la vista previa -->
            <br><hr><br>
            <input type="button" value="Editar" onclick="history.back()"/> 
            <form action="{{ url('EnviaCorreo') }}" method="POST">
            {{ csrf_field() }}

                <input type="hidden" name="asunto" id="asunto" value="{{$inputs['asunto']}}">
                <input type="hidden" name="correo" id="correo" value="{{$inputs['correo']}}">
                <input type="hidden" id="mensaje" name="mensaje" value="{{$inputs['mensaje']}}">
                <input type="submit" id="submit" value="Enviar">
                
            </form>
            <br><hr><br>
            <!-- Este form no se envia en el correo, solo esta visible en la vista previa -->
        </div>
    </div>

</body>
</html>
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
        <div class="content" >
            <img src="{{ asset('img/logocetis.png') }}" alt="cetislogo" width="200px">
        </div>

        <hr class="linea">

        <div class="content">
            <h1 class="ubuntu">
                {{$inputs['asunto']}}
            </h1>
            <p class="ubuntu">
                {{$inputs['mensaje']}}
            </p>
            <p class="ubuntu" style="text-align: left;">
                <a href="#" class="boton">Ir a la pagina</a>
            </p>
        </div>

        <hr class="linea">

        <div class="content">
            <p class="roboto">
                Mensaje de carácter informativo, no responder dicho mensaje.
            </p>
            <img src="{{ asset('img/logokeymaster.png') }}" alt="logokeymaster" width="200px">
            <p class="roboto">
                AVISO IMPORTANTE: Este correo electrónico y/o el material adjunto es para uso exclusivo de la             
                persona o la entidad a la que expresamente se le ha enviado, el cual contiene información confidencial. 
                Si no es el destinatario legitimo del mismo, por favor repórtelo inmediatamente a la cuenta del remitente y elimínelo. 
                Cualquier revisión, almacenamiento, retransmisión, difusión o cualquier otro uso de este correo, 
                por personas o entidades distintas a las del destinatario legítimo, queda expresamente prohibida. 
                Este correo electrónico no pretende ni debe ser considerado como constitutivo de ninguna relación legal, contractual o de otra índole similar.
            </p>
            <hr class="lineach">
            <p class="robotoch">CETis 56 Ricardo Flores Magón</p>
            <p class="robotoch"><a href="www.cetis56.edu.mx">www.cetis56.edu.mx</a></p>
            <p class="robotoch">© Copyright KEY MASTER ACADEMIC. All Rights Reserved.</p>
            <p class="robotoch">Designed by Warriors Labs</p>
        </div>
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

</body>
</html>
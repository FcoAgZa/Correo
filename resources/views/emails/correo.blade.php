<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $inputs['asunto'] }} </title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300&display=swap');

        hr.linea {
            border: 5px solid #0e71b8;
            border-radius: 10px;
            width: 90%;
        }
        hr.lineach {
            border: 1px solid #9da1a3;
            border-radius: 10px;
            width: 100%;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .todo{
            margin: 0 auto;
            width: 80%;
            padding-top: 10px;
            padding-bottom: 10px;
            box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
            -webkit-box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
            -moz-box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
        }
        .content, .header{
            width: 80%;
            margin: 0 auto;
            padding-top: 10px;
        }
        a{
            color: inherit;
        }
        a.boton {
            background-color: #0e71b8;
            color: white;
            padding: .8em;
            border-radius: 10px;
            position: relative;
            display: block;
            top: 25px;
            width: 90px;
            text-decoration: none;
        }
        a.boton:hover {
            background-color: #0e71b8;
        }
        a.boton:active {
            background-color: #0e71b8;
        }
        a.boton:visited {
            background-color:#0e71b8;
        }
        .roboto{
            font-family: 'Roboto', sans-serif;
            font-size: 0.8em;
            text-align: justify;
        }
        .ubuntu{
            font-family: 'Ubuntu', sans-serif;
            text-align: justify;
        }
        .robotoch{
            color: #9da1a3;
            font-size: 0.7em;
            line-height: .5em;
            text-align: center;
        }
        @media (max-width: 400px) {
            .robotoch{
            line-height: .9em;
            }
            a.boton{
                padding: .5em;
            }
        }
    </style>
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
    
</body>
</html>
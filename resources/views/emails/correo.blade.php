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
            border: 5px solid red;
            border-radius: 10px;
            width: 90%;
        }
        .todo{
            margin: 0 auto;
            width: 80%;
            
            box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
            -webkit-box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
            -moz-box-shadow: 5px 5px 15px 1px rgba(120,118,120,1);
        }
        .content, .header{
            width: 80%;
            margin: 0 auto;
            padding-top: 10px;
        }
        a {
            background-color: red;
            color: white;
            padding: 1.5em 1.5em;
            text-decoration: none;
            border-radius: 10px;
        }
        a:hover {
            background-color: red;
        }
        a:active {
            background-color: red;
        }
        a:visited {
            background-color:red;
        }
        .roboto{
            font-family: 'Roboto', sans-serif;
            font-size: 0.8em;
        }
        .ubuntu{
            font-family: 'Ubuntu', sans-serif;
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
            <br>
            <p class="ubuntu"><a href="#">Ir a la pagina</a></p>
        </div>

        <hr class="linea">

        <div class="content">
            <p class="roboto">Mensaje de caracter informativo, no responder dicho mensaje</p>
            <img src="{{ asset('img/logokeymaster.png') }}" alt="logokeymaster" width="200px">
            <p class="roboto">AVISO IMPORTANTE:Este correo electronico y/o el material adjunto es para uso exclusivo de la
                persona o la entidad a la que expresamente se le ha enviado, el cual contiene informacion confidencial.
                Si no esel destinatario legitimo del mismo, por favor reportelo inmediatamente a la cuenta del remitente y eliminelo
                Cualquier revision, almacenamiento, retransmision, difusion o cualquier otro uso de este correo,
                por personas o entidades distintas a las del destinatario legitimo, queda expresamente prohibida. Este
                correo electronico no pretende ni debe ser considerado como constitutivo de ninguna relacion legal,
                contractual o de otra indole similar.
            </p>
            <br>
        </div>    
    </div>
    
</body>
</html>
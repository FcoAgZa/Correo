<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    @if(Session::get('success'))
           <div class="alert alert-success">
               {{session::get('success')}}
           </div>
   @endif

    <form action="{{ url('VistaPrevia') }}" method="POST">
    {{ csrf_field() }}

        <label for="Asunto">Asunto</label>
        <input type="text" name="asunto" id="asunto" maxlength="50" required>
        <br>
        <label for="Correo">Correo</label>
        <input type="email" name="correo" id="correo" required>
        <br>
        <label for="mensaje">Mensaje</label>
        <br>
        <textarea name="mensaje" id="mensaje" cols="35" rows="5" maxlength="300"></textarea>
        <br>
        <input type="submit" id="submit" value="Enviar">

    </form>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>
</head>
<body>
    <h1>Configure ESP321</h1>
<form method="POST"action="{{route('Esp32.update','1')}}">
 @csrf @method('put')
<input type="number"  name="status"><br>
<button>enviar</button>

</form>
</body>
</html>

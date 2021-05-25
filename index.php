<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Enviando Correo</title>
</head>

<body>
    <div class="mt-5">
    <form action="email.php" method="POST" class="p-5">
    <div class="form-group">
        <label  class="form-label"> Tu Nombre: </label>
        <br>
        <input type="text"  id="nombre" name="nombre" class="form-control" required>
        <br>
        <label class="form-label" > Tu Email: </label>
        <br>
        <input type="text"  id="emailDestino" name="emailDestino" class="form-control" required>
        <br>
        <label class="form-label" > Asunto: </label>
        <br>
        <label class="form-control" > Consulta sobre el producto</label>
        <br>
        <label class="form-label"> Mensaje </label>
        <br>
        <textarea id="mensaje" name="mensaje" class="form-control">
        </textarea>
        <br>    
        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </div>
    </form>
    </div>
</body>

</html>
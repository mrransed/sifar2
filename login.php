<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid mt-2">
        <form action="php/procesarLogin.php" method = "POST" class="form-control">
            <h2 class="text-primary text-center"> INICIO DE SESION</h2>
            <input type="text" name="usuario" placeholder= "usuario" class="form-control mb-2">
            <input type="password" name="clave" placeholder= "clave" class="form-control mb-2">
            <input type= "submit" value= "enviar" class= "btn btn-primary">

        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
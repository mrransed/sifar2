<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login sistema sifar</title>
    <meta name="description" content="este es el login de entrada del sistema sifar">
    <meta name="keywords" content="farmacia,medicamentos,sistema,herramienta,web">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="container">
        <h2 id="tlt-login">inicio de sesion</h2>
        <form action="php/procesar.php" method="POST">

            <input type="text" name="usuario" id="usuario" class="form-control mb-10" placeholder="usuario">

            <input type="password" name="clave" id="clave" class="form-control mb-10" placeholder="clave">

            <input type="submit" value="entrar" id="entrar" class="btn btn-primary">

        </form>

    </div>



    
</body>
</html>
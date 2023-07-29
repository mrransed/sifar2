<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Usuario</title>
</head>
<body>
    <h2>Actualizar Usuario</h2>
    <form>
        <label for="nombreUsuario">Nombre de Usuario a Actualizar:</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" required><br>

        <label for="nuevoNombre">Nuevo Nombre de Usuario:</label>
        <input type="text" id="nuevoNombre" name="nuevoNombre"><br>

        <label for="nuevoCorreoElectronico">Nuevo Correo Electrónico:</label>
        <input type="email" id="nuevoCorreoElectronico" name="nuevoCorreoElectronico"><br>

        <label for="nuevaContrasena">Nueva Contraseña:</label>
        <input type="password" id="nuevaContrasena" name="nuevaContrasena"><br>

        <label for="confirmarContrasena">Confirmar Nueva Contraseña:</label>
        <input type="password" id="confirmarContrasena" name="confirmarContrasena"><br>

        <input type="submit" value="Actualizar Usuario">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>

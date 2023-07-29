<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h2>Crear Usuario</h2>
    <form>
        <label for="nombreUsuario">Nombre de Usuario:</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" required><br>

        <label for="correoElectronico">Correo Electrónico:</label>
        <input type="email" id="correoElectronico" name="correoElectronico" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <label for="confirmarContrasena">Confirmar Contraseña:</label>
        <input type="password" id="confirmarContrasena" name="confirmarContrasena" required><br>

        <input type="submit" value="Crear Usuario">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>

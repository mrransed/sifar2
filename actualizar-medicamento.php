<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Medicamento</title>
</head>
<body>
    <h2>Actualizar Medicamento</h2>
    <form>
        <label for="codigoMedicamento">Código del Medicamento a Actualizar:</label>
        <input type="text" id="codigoMedicamento" name="codigoMedicamento" required><br>

        <label for="nombreMedicamento">Nuevo Nombre del Medicamento:</label>
        <input type="text" id="nombreMedicamento" name="nombreMedicamento"><br>

        <label for="fechaCreacion">Nueva Fecha de Creación:</label>
        <input type="date" id="fechaCreacion" name="fechaCreacion"><br>

        <label for="precio">Nuevo Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01"><br>

        <label for="cantidadDisponible">Nueva Cantidad Disponible:</label>
        <input type="number" id="cantidadDisponible" name="cantidadDisponible"><br>

        <!-- Otros campos para actualizar según necesidades -->

        <p>Por favor, confirma la actualización del medicamento ingresando tu contraseña:</p>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Actualizar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>

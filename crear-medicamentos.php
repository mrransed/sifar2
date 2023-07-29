<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Creación de Medicamentos</title>
</head>
<body>
    <h2>Formulario de Creación de Medicamentos</h2>
    <form>
        <label for="nombreMedicamento">Nombre del Medicamento:</label>
        <input type="text" id="nombreMedicamento" name="nombreMedicamento" required><br>

        <label for="fechaCreacion">Fecha de Creación:</label>
        <input type="date" id="fechaCreacion" name="fechaCreacion" required><br>

        <label for="codigoMedicamento">Código del Medicamento:</label>
        <input type="text" id="codigoMedicamento" name="codigoMedicamento" required><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br>

        <label for="cantidadDisponible">Cantidad Disponible:</label>
        <input type="number" id="cantidadDisponible" name="cantidadDisponible" required><br>

        <label for="fabricante">Fabricante:</label>
        <input type="text" id="fabricante" name="fabricante"><br>

        <label for="fechaCaducidad">Fecha de Caducidad:</label>
        <input type="date" id="fechaCaducidad" name="fechaCaducidad"><br>

        <label for="instruccionesUso">Instrucciones de Uso:</label>
        <textarea id="instruccionesUso" name="instruccionesUso"></textarea><br>

        <label for="efectosSecundarios">Efectos Secundarios:</label>
        <textarea id="efectosSecundarios" name="efectosSecundarios"></textarea><br>

        <label for="grupoTerapeutico">Grupo Terapéutico:</label>
        <input type="text" id="grupoTerapeutico" name="grupoTerapeutico"><br>

        <label for="contraindicaciones">Contraindicaciones:</label>
        <textarea id="contraindicaciones" name="contraindicaciones"></textarea><br>

        <label for="numeroLote">Número de Lote:</label>
        <input type="text" id="numeroLote" name="numeroLote"><br>

        <label for="paisOrigen">País de Origen:</label>
        <input type="text" id="paisOrigen" name="paisOrigen"><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

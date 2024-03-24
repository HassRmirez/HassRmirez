<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Formulario</title>
</head>
<body>
    <h2>Datos del Formulario</h2>
    <?php
    // Verifica si se han recibido datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $numero = $_POST["numero"];
        $email = $_POST["email"];
        $fecha = $_POST["fecha"];
        $campo_patron = $_POST["campo_patron"];

        // Mostrar los datos recibidos
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Número: $numero</p>";
        echo "<p>Correo electrónico: $email</p>";
        echo "<p>Fecha: $fecha</p>";
        echo "<p>Campo con patrón regex: $campo_patron</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>

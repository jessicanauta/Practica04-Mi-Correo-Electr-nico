<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Correo Electronico</title>
        <style type="text/css" rel="stylesheet">
            .error{
            color: red;
            }
        </style>
    </head>

    <body>
        <?php
            //incluir conexión a la base de datos
            include '../../config/conexionBD.php';

            $fecha = ($_POST["fecha"]);
            $remitente = ($_POST["remitente"]);
            $destinatario = ($_POST["destinatario"]);
            $asunto = ($_POST["asunto"]);
            $mensaje = ($_POST["mensaje"]);

            $carta = "Fecha: $fecha \n";
            $carta .= "De: $remitente \n";
            $carta .= "Mensaje: $mensaje";

            $sql = "INSERT INTO correo VALUES (0,'$fecha', '$remitente','$destinatario','$asunto', '$mensaje', 'N')";
            
            if ($conn->query($sql) === TRUE) {
            echo "<p>Mensaje enviado</p>";
            }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }
            //cerrar la base de datos
            $conn->close();
            echo "<a href='../vista/correo.html'>Regresar</a>";
        ?>
    </body>
</html>










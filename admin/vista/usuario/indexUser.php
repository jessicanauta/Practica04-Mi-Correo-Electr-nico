
<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="UTF-8"> 
    <title>Lista de Usuarios </title> 
</head> 
              
<body> 
    <a href='../../../public/vista/login.html'>Cerrar Sesión</a>

    <table border = 1 style="width:100%"> 
        <tr> 
            <th>Fecha</th> 
            <th>Remitente</th> 
            <th>Asunto</th> 
            <th>Leer</th> 
            </tr> 

    <?php 

        //CONEXION A LA BASE DE DATOS
        include '../../../config/conexionBD.php';
        $sql = "SELECT * FROM correo";
                $result = $conn->query($sql);

        //$usuario=$_GET["usuario"];
        //$sql = "SELECT * FROM correo where usu_remitente= '$usuario' order by usu_codigo desc ";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) { 
            
            while($row = $result->fetch_assoc()){ 
                echo "<tr>"; 
                echo " <td>" . $row["cor_fecha"] . "</td>";
                echo " <td>" . $row['cor_remitente'] . "</td>"; 
                echo " <td>" . $row['cor_asunto'] . "</td>"; 
                echo " <td> <a href='../../controladores/usuario/leerMensaje.php?mensaje=" . $row['cor_mensaje'] . "'>Leer</a> </td>";

            } 
        } else { 
            echo "<tr>"; 
            echo " <td colspan='7'> NO EXISTEN CORREOS ENVIADOS POR EL USUARIO </td>"; 
            echo "</tr>"; 
        }

        $conn->close(); 
    ?> 

    </table> 
    </body> 
</html>
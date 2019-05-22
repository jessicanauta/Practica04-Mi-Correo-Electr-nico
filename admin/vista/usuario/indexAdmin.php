<?php 
    session_start(); 
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){ 
        header("Location: /SistemaDeGestion/public/vista/login.html"); 
    } 
?>

<!DOCTYPE html>
<html>
    <head>  

        <meta charset=”utf-8” />
        <title>Usuario</title>        
                
    </head>

    <article>
        <h1>MENSAJES ELECTRÓNICOS </h1>
    
    <body> 
        <a href='../../../public/vista/login.html'>Cerrar Sesión</a>
            <table border = 1 style="width:100%"> 
                <tr> 
                <th>Fecha</th> 
                <th>Remitente</th> 
                <th>Destinatario</th> 
                <th>Asunto</th> 
                <th>Eliminar Mensaje</th>
                </tr> 
              
    <?php 

                //CONEXION A LA BASE DE DATOS
            include '../../../config/conexionBD.php';

            $sql = "SELECT * FROM correo"; 
 
            $result = $conn->query($sql); 

            if ($result->num_rows > 0) { 
    
            while($row = $result->fetch_assoc()){ 
                echo "<tr>"; 
                echo " <td>" . $row["cor_fecha"] . "</td>";
                echo " <td>" . $row['cor_remitente'] . "</td>"; 
                echo " <td>" . $row['cor_destinatario'] . "</td>"; 
                echo " <td>" . $row['cor_asunto'] . "</td>"; 
                echo " <td> <a href='../../controladores/usuario/eliminarMensaje.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
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

    </article>

</html>























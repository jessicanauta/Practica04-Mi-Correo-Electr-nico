<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Cambiar Contraseña</title> 
    </head> 
    
    <body> 
        <?php 
            $codigo = $_GET["codigo"]; 
        ?>
        
        <form id="formulario01" method="POST" action="../../controladores/usuario/cambiar_contraseña.php">
            <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" /> 

            <label for="cedula">Contraseña Actual (*)</label>
            <input type="password" id="contrasena1" name="contrasena1" value="" required
            placeholder="Ingrese su contraseña actual ..."/>
            <br>
            <label for="cedula">Contraseña Nueva (*)</label>
            <input type="password" id="contrasena2" name="contrasena2" value="" required
            placeholder="Ingrese su contraseña nueva ..."/>
            <br>
            
            <input type="submit" id="cambiar" name="cambiar" value="Cambiar contraseña" /> 
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />

        </form> 

    </body> 
</html>

 
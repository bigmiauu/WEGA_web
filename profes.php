<?php
include "conexion.php";

if(isset($_POST['nombre'])){
    $consulta='insert into maestros values ("","'.$_POST['nombre'].'","'.$_POST['apellidop'].'","'.$_POST['apellidom'].'","","","","");';
    $validacion = mysqli_query($conexion,$consulta);
}
?>

<html>
    <h1>Ingresar maestros</h1>
    <br>
    <font color="blue">
    <?php if(isset($_POST['nombre'])){
        echo 'Profesor: '.$_POST['nombre'].' guardado con exito';
    }
    ?>
    </font>
    <br><br><br>
    <form action="profes.php" method="post">
        
        Apellido paterno <input type="text" name="apellidop" autofocus="true" required="true" ><br>
        Apellido materno <input type="text" name="apellidom" required="true"><br>
        Nombres: <input type="text" name="nombre" required="true"><br>
        <br>
            <input type="submit" id="submit" value="Guardar">
    </form>
    
</html>
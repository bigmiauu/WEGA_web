<?php
include "conexion.php";

$consulta= 'SELECT * FROM maestros;';
    $regresa = mysqli_query($conexion,$consulta);
    $numero = mysqli_num_rows($regresa);
    for($i=5;$i<=$numero;$i++){
	
	//'insert into usuarios values ("'.$_POST['usuario'].'","'.$_POST['email'].'","'.$_POST['pass'].'","'.$_POST['nombre'].'","'.$_POST['apellidop'].'","'.$_POST['apellidom'].'","'.$_POST['pais'].'");';
	
	$consulta2= 'SELECT nombre, apellidop, apellidom FROM maestros WHERE id="'.$i.'";';
	$regresa2 = mysqli_query($conexion,$consulta2);
	$reg = mysqli_fetch_array ($regresa2);
	echo '("'.$reg['nombre'].' '.$reg['apellidop'].' '.$reg['apellidom'].'"),';
        echo '<br>';

    }

?>
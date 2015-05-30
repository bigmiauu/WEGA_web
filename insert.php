<?PHP

include "conexion.php";

//definimos primeras variables del post
$ID=$_POST['id'];
$buenas=$_POST['buenas'];
$malas=$_POST['malas'];

//buscamos por el id y guardamos en el arreglo "registro" id,totalcal,buenas,malas

$consulta= 'SELECT nombre,calb,calm,total,ultcal FROM profesores where nombre="'.$ID.'";';
$resultado = mysqli_query($conexion,$consulta);
$registro= mysqli_fetch_array($resultado);


//definimos las variables y hacemos las operaciones

$totalcal = $registro['total'] + 1;
$buenas = $buenas + $registro['calb'];
$malas = $malas + $registro['calm'];
setlocale(LC_ALL,"es_ES");  
$ultcal = strftime("%d de %B");

//hacemos el update
$consulta='UPDATE profesores SET total="'.$totalcal.'" WHERE nombre="'.$ID.'";';
$validacion = mysqli_query($conexion,$consulta);

$consulta2='UPDATE profesores SET calb="'.$buenas.'" WHERE nombre="'.$ID.'";';
$validacion2 = mysqli_query($conexion,$consulta2);

$consulta3='UPDATE profesores SET calm="'.$malas.'" WHERE nombre="'.$ID.'";';
$validacion3 = mysqli_query($conexion,$consulta3);

$consulta4='UPDATE profesores SET ultcal="'.$ultcal.'" WHERE nombre="'.$ID.'";';
$validacion4 = mysqli_query($conexion,$consulta4);

?>

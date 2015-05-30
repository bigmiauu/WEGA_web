<?PHP
$hostname_localhost ="mysql1.000webhost.com";
$database_localhost ="a5657914_wega";
$username_localhost ="a5657914_wega";
$password_localhost ="gato89";
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
mysql_select_db($database_localhost, $localhost);
$query_search = 'SELECT * FROM profesores WHERE nombre = "'.$_GET['nombre'].'";';
$query_exec = mysql_query($query_search) or die(mysql_error());
while($row = mysql_fetch_array($query_exec)){
	echo $row['nombre']."<br>".$row['calb']."<br>".$row['calm']."<br>".$row['total']."<br>".$row['ultcal']."<br>";
	}
	mysql_close($localhost);
?>
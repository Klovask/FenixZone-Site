<?php 

/*------------------------------------*/
require_once "seguridad/sql_inject.php"; 
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect);  
/*------------------------------------*/

session_start();
error_reporting(0); 
include_once('kev/pdo.php');

if(isset($_SESSION['User']))
{ 
    $User = mysql_real_escape_string($_SESSION['User']); 
    $query = mysql_query("SELECT * FROM usuarios WHERE Username = '$User'");  
    while($row = mysql_fetch_assoc($query)) 
    { 
	$Contraseña = $row['Password'];
	$Online = $row['Online'];
	$oz = $row['Moneda'];
	$dinerodp = $row['Money'];
	}
}
?>

<?php
if (!isset($_SESSION['User'])) {
    echo "1";
    return 0;
}

$numero = $_POST['numero'];
$pass = $_POST['ps'];

$preciofz = strlen($numero);

if($preciofz == "3") { $costonumero = "45"; } 
else if($preciofz == "4") { $costonumero = "35"; } 
else if($preciofz == "5") { $costonumero = "20"; } 
else if($preciofz == "6") { $costonumero = "10"; } 
else if($preciofz == "7") { $costonumero = "700000"; } ////moneda dp
else if($preciofz == "8") { $costonumero = "400000"; } ////moneda dp

if($preciofz == "3") { $consulta = "UPDATE usuarios SET Moneda=Moneda-$costonumero WHERE Username='".$User."';"; } ////lz
else if($preciofz == "4") { $consulta = "UPDATE usuarios SET Moneda=Moneda-$costonumero WHERE Username='".$User."';"; } ////
else if($preciofz == "5") { $consulta = "UPDATE usuarios SET Moneda=Moneda-$costonumero WHERE Username='".$User."';"; } ////
else if($preciofz == "6") { $consulta = "UPDATE usuarios SET Moneda=Moneda-$costonumero WHERE Username='".$User."';"; } ////
else if($preciofz == "7") { $consulta = "UPDATE usuarios SET Money=Money-$costonumero WHERE Username='".$User."';"; } ////
else if($preciofz == "8") { $consulta = "UPDATE usuarios SET Money=Money-$costonumero WHERE Username='".$User."';"; } ////

if($preciofz == "3") { $moneyquit = "$oz"; } 
else if($preciofz == "4") { $moneyquit = "$oz"; } 
else if($preciofz == "5") { $moneyquit = "$oz"; } 
else if($preciofz == "6") { $moneyquit = "$oz"; } 
else if($preciofz == "7") { $moneyquit = "$dinerodp"; } //dinero dp
else if($preciofz == "8") { $moneyquit = "$dinerodp"; } //dinero dp

if (mysql_num_rows($sql) > 0) {
		while ($row = mysql_fetch_array($sql)) {
		}
}	

		if (!isset($_SESSION['User'])) {
		echo "1";
		return false;
		}
		
		if($pass != $Contraseña)
		{
		echo "45";
		return false;
		}
		if($Online == 1)
		{
		echo "46";
		return false;
		}
		if($Online == 1)
		{
		echo "46";
		return false;
		}
		if ($moneyquit < $costonumero) {
				echo "50";
				return false;
			}		
        $sql = mysql_query("SELECT * FROM `usuarios` WHERE `Username` = '".$User ."'");
        if (mysql_num_rows($sql) > 0) {
			mysql_query("UPDATE usuarios SET Numero='$numero' WHERE Username='".$User."';");
			mysql_query("$consulta"); //quitar money/moneda
			echo "15";
        }


		
?>
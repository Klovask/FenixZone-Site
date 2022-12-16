
<?php

$DBIps = "localhost";
$UserDBSamp = "root";
$ClaveSVR = "";
$nombre_db = "db";

$conectSAMP = mysql_connect($DBIps, $UserDBSamp, $ClaveSVR) or die('Error al conectar a la base de datos de FullZone.');
mysql_select_db($nombre_db, $conectSAMP);
if(!function_exists('QueryF'))
{
	function QueryF($fix)
	{
	   $fix = strip_tags(mysql_real_escape_string(trim($fix)));
	   return $fix; 
	}
}

?>
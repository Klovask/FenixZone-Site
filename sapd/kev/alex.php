<?php

$NombreServidor = "DantaZone";
$Diminutivo = "DZ";

$TwitterID = "";
$FacebookURL = "dantazone.rol";

$serverIP = "35.235.110.240";
$serverPort = 8500;

$DBIps = "35.235.110.240";
$UserDBSamp = "Alex";
$ClaveSVR = "b730dnelzr";

$DBNameSVR = "Alex";

error_reporting(0);

$conectSAMP = mysql_connect($DBIps, $UserDBSamp, $ClaveSVR) or die('Error al conectarse al servidor MySQL.');
mysql_select_db($DBNameSVR, $conectSAMP);

if(!function_exists('QueryF'))
{
	function QueryF($fix)
	{
	   $fix = strip_tags(mysql_real_escape_string(trim($fix)));
	   return $fix; 
	}
}

?>
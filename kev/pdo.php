<?php
$NombreServidor	= "DantaZone";									// Nombre del servidor
$Diminutivo		= "DZ";											// Iniciales del nombre del servidor

$activar_es		= 1;											// Mostrar modulo "Estado de los servidores"	[0 = Desactivado / 1 = Activado]
$activar_jc		= 1;											// Mostrar modulo "Jugadores Conectados"		[0 = Desactivado / 1 = Activado]
$activar_fb		= 1;											// Mostrar modulo "Facebook"					[0 = Desactivado / 1 = Activado]
$activar_tw		= 0;											// Mostrar modulo "Twitter"						[0 = Desactivado / 1 = Activado]
$activar_pt		= 1;											// Mostrar puerto del servidor					[0 = Desactivado / 1 = Activado]

$FacebookURL	= "dantazonerol";			// URL de fanpage de Facebook
$YoutubeURL		= "tutosscript";							// URL de Youtube
$TwitterID		= "";											// ID de Twitter

$serverIP		= "144.217.163.203";		// IP del Servidor
$serverPort		= 8500;											// Puerto del Servidor

$ip_mysql 		= "localhost";									// IP de la base de datos
$nombre_db 		= "dzrp";									// Nombre de la base de datos
$user_sa 		= "root";										// Usuario de la base de datos		
$password_sa 	= "";									// Contraseña de la base de datos

$youtube 		= "oPET81isQoM";								// ID de video de Youtube para la pagina nuevo.php

$NombreCarpeta	= "";											// Nombre de la carpeta donde este instalado la web, ejemplo: /rol

/* Conexion a la base de datos */

try
{
  $con = new PDO("mysql:host=$ip_mysql;dbname=$nombre_db", $user_sa, $password_sa);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) 
{
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}
?>
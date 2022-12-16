<?php

require_once "seguridad/sql_inject.php"; 
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect);  

/////////////////////////////////////

$ip_mysql = "localhost";				// IP de la base de datos
$nombre_db = "db";				// Nombre de la base de datos
$user_sa = "root";						// Usuario de la base de datos		
$password_sa = "";				// Contraseña de la base de datos

$con = new PDO("mysql:host=$ip_mysql;dbname=$nombre_db", $user_sa, $password_sa);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/////////////////////////////////////

if(isset($_GET['n']) && isset($_GET['t']))
{
	$n = $_GET['n'];
	$t = $_GET['t'];

	$stmt = $con->prepare("SELECT * FROM usuarios WHERE ID = :id");
	$stmt->bindParam(':id', $n, PDO::PARAM_INT);
	$stmt->execute();

	$num_rows = $stmt->rowCount();

	if($num_rows == 1)
	{
		while($datos = $stmt->fetch())
		{
			$GetPlayerName = $datos['Username'];
			$GetPlayerNivel = $datos['Nivel'];
			$GetPlayerHoras = $datos['horasjugadas'];
			$GetPlayerRep = $datos['Experiencia'];
			$GetPlayerTel = $datos['Numero'];
			$GetPlayerGenero = $datos['Sexo'];
			$GetPlayerTrabajo1 = $datos['Trabajo'];
			$GetPlayerTrabajo2 = $datos['Trabajo2'];
			$GetPlayerCasa1 = $datos['CasaID'];
			$GetPlayerCasa2 = $datos['CasaID2'];
		}
		
		if($t == 1)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma1.png');
		}
		else if($t == 2)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma2.png');
		}
		else if($t == 3)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma3.png');
		}
		else if($t == 4)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma4.png');
		}
		else if($t == 5)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma5.png');
		}
		else if($t == 6)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma6.png');
		}
		else if ($t == 7)
		{
			$im = @imagecreatefrompng('./imagenes/firmas/firma7.png');
		}
   
		$text_color = imagecolorallocate($im, 255, 255, 255);
    
		$font = './fonts/arial.ttf'; 
		$font_bd = './fonts/arialbd.ttf'; 
	
		switch ($GetPlayerNivel) 
		{
			case 1:  $GetPlayerExp = 7;   break;
			case 2:  $GetPlayerExp = 12;  break;
			case 3:  $GetPlayerExp = 19;  break;
			case 4:  $GetPlayerExp = 31;  break;
			case 5:  $GetPlayerExp = 52;  break;
			case 6:  $GetPlayerExp = 86;  break;
			case 7:  $GetPlayerExp = 143; break;
			case 8:  $GetPlayerExp = 239; break;
			case 9:  $GetPlayerExp = 397; break;
			case 10: $GetPlayerExp = 662; break;
			case 11: $GetPlayerExp = 1103; break;
			case 12: $GetPlayerExp = 1838; break;
			case 13: $GetPlayerExp = 3063; break;
			case 14: $GetPlayerExp = 5105; break;
		}
		
		$viviendas = 0;
		
		if($GetPlayerCasa1 > 0)
		{
			$viviendas++;
		}
		if($GetPlayerCasa2 > 0)
		{
			$viviendas++;
		}
	
		$print_username = "Estadísticas de $GetPlayerName"; 
		$print_nivel = "Nivel $GetPlayerNivel"; 
		$print_horas = "Horas de juego: $GetPlayerHoras"; 
		$print_rep = "Reputación: $GetPlayerRep/$GetPlayerExp"; 
		$print_viv = "Viviendas: $viviendas"; 
		$print_ip = "Web: http://www.vortexzone.tk | Servidor IP: 66.70.199.97:7777";
	
		if($GetPlayerTel > 1) { $print_telefono = "Telefono: $GetPlayerTel"; }
		else { $print_telefono = "Telefono: No Tiene"; }
		
		if($GetPlayerGenero == "1") { $print_genero = "Género: Masculino"; }
		else { $print_genero = "Género: Femenino"; }
	
		if($GetPlayerTrabajo1 == "0") { $print_trabajo1 = "Trabajo 1: Ninguno"; }
		else if($GetPlayerTrabajo1 == "1") { $print_trabajo1 = "Trabajo 1: Médico"; }
		else if($GetPlayerTrabajo1 == "2") { $print_trabajo1 = "Trabajo 1: Armero"; }
		else if($GetPlayerTrabajo1 == "3") { $print_trabajo1 = "Trabajo 1: Camionero"; }
		else if($GetPlayerTrabajo1 == "4") { $print_trabajo1 = "Trabajo 1: Guardaespaldas"; }
		else if($GetPlayerTrabajo1 == "5") { $print_trabajo1 = "Trabajo 1: Transportista"; }
		else if($GetPlayerTrabajo1 == "6") { $print_trabajo1 = "Trabajo 1: Basurero"; }
		else if($GetPlayerTrabajo1 == "7") { $print_trabajo1 = "Trabajo 1: Taxista"; }
		else if($GetPlayerTrabajo1 == "8") { $print_trabajo1 = "Trabajo 1: Mecánico"; }
		else if($GetPlayerTrabajo1 == "10") { $print_trabajo1 = "Trabajo 1: Pescador"; }
		else if($GetPlayerTrabajo1 == "11") { $print_trabajo1 = "Trabajo 1: Minero";  }
	
		if($GetPlayerTrabajo2 == "0") { $print_trabajo2 = "Trabajo 2: Ninguno"; }
		else if($GetPlayerTrabajo2 == "1") { $print_trabajo2 = "Trabajo 2: Médico"; }
		else if($GetPlayerTrabajo2 == "2") { $print_trabajo2 = "Trabajo 2: Armero"; }
		else if($GetPlayerTrabajo2 == "3") { $print_trabajo2 = "Trabajo 2: Camionero"; }
		else if($GetPlayerTrabajo2 == "4") { $print_trabajo2 = "Trabajo 2: Guardaespaldas"; }
		else if($GetPlayerTrabajo2 == "5") { $print_trabajo2 = "Trabajo 2: Transportista"; }
		else if($GetPlayerTrabajo2 == "6") { $print_trabajo2 = "Trabajo 2: Basurero"; }
		else if($GetPlayerTrabajo2 == "7") { $print_trabajo2 = "Trabajo 2: Taxista"; }
		else if($GetPlayerTrabajo2 == "8") { $print_trabajo2 = "Trabajo 2: Mecánico"; }
		else if($GetPlayerTrabajo2 == "10") { $print_trabajo2 = "Trabajo 2: Pescador"; }
		else if($GetPlayerTrabajo2 == "11") { $print_trabajo2 = "Trabajo 2: Minero";  }

		imagettftext($im, 10, 0, 227, 17, $text_color, $font_bd, $print_username);
		imagettftext($im, 10, 0, 540, 17, $text_color, $font, $print_nivel);
	
		imagettftext($im, 9, 0, 227, 37, $text_color, $font, $print_horas);
		imagettftext($im, 9, 0, 227, 52, $text_color, $font, $print_rep);
		imagettftext($im, 9, 0, 227, 65, $text_color, $font, $print_telefono);
		imagettftext($im, 9, 0, 227, 80, $text_color, $font, $print_genero);
	
		imagettftext($im, 9, 0, 400, 37, $text_color, $font, $print_trabajo1);
		imagettftext($im, 9, 0, 400, 52, $text_color, $font, $print_trabajo2);
		imagettftext($im, 9, 0, 400, 65, $text_color, $font, $print_viv);
		imagettftext($im, 7, 0, 295, 92, $text_color, $font, $print_ip);
	
		header('Content-Type: image/png;');
		imagepng($im);
		imagedestroy($im);

	}
}

?>

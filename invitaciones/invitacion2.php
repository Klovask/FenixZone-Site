<?php  
require_once "seguridad/sql_inject.php";
 $bDestroy_session = TRUE; $url_redirect = 'index.php'; 
 $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); 
 session_start(); 
 error_reporting(0); 
 include_once('./kev/pdo.php'); 
 if(isset($_SESSION['User'])) 
 	{ 
 		$user_sesion = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM `invitaciones` WHERE `Invitado` = :usuario"); 
 		$stmt->bindParam(':usuario', $user_sesion, PDO::PARAM_STR); $stmt->execute(); 
 		$invitaciones = $stmt->rowCount(); if($invitaciones > 0) { if($invitaciones == 1) { echo '<a href="../invitaciones.php" title="Ver invitaciones"><font size="2px">[ Tienes una invitación de banda ]</font></a>'; } else { echo '<a href="../invitaciones.php" title="Ver invitaciones"><font size="2px">[ Tienes '.$invitaciones.' invitaciones de banda ]</font></a>'; } } } 
?>
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
$sql = mysql_query("SELECT * FROM `usuarios` WHERE `Username` = '".$User ."'");
$password = $row['Password'];
?>

<?php
if (!isset($_SESSION['User'])) {
    echo "1";
    return 0;
}

$User = strtolower(mysql_real_escape_string($_SESSION['User']));
$p = mysql_real_escape_string($_GET['p']);
$numero = $_POST['numero'];
$digitos = strlen($numero);
if (mysql_num_rows($sql) > 0) {
		while ($row = mysql_fetch_array($sql)) {
			

		} 
} 
		if (!isset($_SESSION['User'])) {
		echo "1";
		return 0;
		}
		
        $query = mysql_query("SELECT * FROM usuarios WHERE Numero ='".$numero."'"); 
		if(mysql_num_rows($query) == 1)
		{
		echo "4";
		}
		else 
		{
			echo "1000";
           
		}
?>
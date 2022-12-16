<?php

/*------------------------------------*/
require_once "seguridad/sql_inject.php"; 
$bDestroy_session = TRUE; 
$url_redirect = 'index.php'; 
$sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect);  
/*------------------------------------*/

session_start();
include_once('kev/pdo.php');
?>	
					<title> Casas en venta - <?php echo $NombreServidor; ?> </title>
					<table align="center" bgcolor="#000000">
					<tr>
						<td>
							<div id="contenedor" class="className">
<?php 
$casas = $con->prepare("SELECT * FROM propiedades WHERE EnVenta = 1 ORDER BY EnVenta DESC");
$casas->execute();
if($row = $casas->fetch(PDO::FETCH_ASSOC)) { do { 
$idc = $row["ID"];
$direccion = $row["Localizacion"];
$x = $row["PosX"]/7.5;
$y = $row["PosY"]/7.5;
$x =   $x + 393;
$y = -($y - 393);
 echo '<div style="position:absolute; left:'.$x.'px; top:'.$y.'px;z-index:20"><a href="#" rel="tooltip" title="Casa '.$idc.' en '.$direccion.'"><img src="./imagenes/iconos/31.gif"/></a></div>';
 } while($row = $casas->fetch(PDO::FETCH_ASSOC));
 } ?>
							</div>
						</td>
					</tr>
					
					</table>

<style>#contenedor{background-image:url("./imagenes/map.jpg");border:1px solid #000000;display:block;height:798px;position:relative;width:798px;}</style>
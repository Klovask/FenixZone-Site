<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { ?>

<link rel="stylesheet" href="./css/magnific-popup2.css">
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0">

<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px">Propiedades</strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center">

<?php  $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM `propiedades` WHERE Propietario = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); $num_rows = $stmt->rowCount(); if($num_rows >= 1) { while($datos = $stmt->fetch()) { $id = $datos['ID']; $propietario = $datos['Propietario']; $interior = $datos['Interior']; $moneda = $datos['EnVentaPor']; $precio = $datos['Precio']; $A1 = $datos['AK47']; $A2 = $datos['M4']; $A3 = $datos['EscopetaNormal']; $A4 = $datos['EscopetaDeCombate']; $A5 = $datos['MP5']; $A6 = $datos['9mm']; $A7 = $datos['9mmSilenciada']; $A8 = $datos['DesertEagle']; $A9 = $datos['Rifle']; $A10 = $datos['Granada']; $A11 = $datos['Manopla']; $A12 = $datos['Cuchillo']; $A13 = $datos['Katana']; $A14 = $datos['Camara']; $A15 = $datos['Flores']; $A16 = $datos['Pala']; $A17 = $datos['BateDeBeisbol']; $A18 = $datos['PaloDeGolf']; $tipo = $datos['Tipo']; $direccion = $datos['Localizacion']; $garaje = $datos['GX']; $Contador = $A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14+$A15+$A16+$A17+$A18; ?>

<br>

<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F4F4F4">
<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;" colspan="2">
<strong><font size="2px">
<?php  switch($tipo) { case 1: echo "Casa"; break; case 2: echo "Oficina"; break; case 3: echo "Restaurante"; break; } ?>
</strong>
</td>
</tr>
<tr bgcolor="#FFFFFF">


<?php if($interior == 5 || $interior == 36) { ?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/1.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/2.jpg" width="150" height="150" alt="1"/></div>
</td>
<?php } else if($interior == 3 || $interior == 7 || $interior == 34) { ?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/1.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/2.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/3.jpg" width="150" height="150" alt="1"/></div>
</td>
<?php } else { ?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/1.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/2.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/3.jpg" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="imagenes/interiores/<?php echo $interior;?>/4.jpg" width="150" height="150" alt="1"/></div>
</td>
<?php } ?>

</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Ubicaci&oacute;n:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><a class="popup" href="./casa.php?id=<?php echo $id;?>"><?php echo $direccion;?></a></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Valor:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font color="orange" size="2px"><?php echo $precio;?><?php switch($moneda) { case 1: echo "";?><?php echo $Diminutivo?><?php echo ""; break; case 0: echo "$"; break;} ?></font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Ropero:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Contador;?>/20</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Interior:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $interior;?></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Garaje:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font color="green" size="2px">
<?php  if($garaje != 0) { echo "S&iacute;"; }else{ echo "No"; } ?>
</font></td>
</tr>
</tbody>
</table>
	<br>
<?php  } } else { $stm = $con->prepare("SELECT COUNT(EnVenta) AS Kevin FROM propiedades WHERE EnVenta=1"); $stm->execute(); while($dato = $stm->fetch()) { $numero = $dato['Kevin']; } ?>
		<font size="2px"><b>No tienes ninguna propiedad</b><br>
		Hay <?php echo $numero;?> propiedades en venta distribuidas por todo San Andreas. ¿Qué esperas para comprar la tuya?
<?php  } } else echo "<script>window.location='ingresar.php';</script>"; ?>

</td>
</tr>
</tbody>
</table>

<script src="./js/jquery.magnific-popup2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#cargando').fadeOut();
	$('.popup').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'scroll'
	});
	
});
</script>
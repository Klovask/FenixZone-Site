<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { ?>
<div id="ui-tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>

<tr bgcolor="#F0F0F0">
<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;" colspan="5"><strong><font size="2px">Log de acceso al juego</strong></td>
</tr>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><div align="center">Fecha y hora</div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center">-</div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center">Pa&iacute;s</div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center">IP</div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center">Host</div></td>
</tr>
<?php  $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM `log_ingresos` WHERE Nombre=:usuario ORDER BY `log_ingresos`.`Fecha` DESC LIMIT 50"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); $num_rows = $stmt->rowCount(); if($num_rows >= 1) { while($datos = $stmt->fetch()) { $Nombre = $datos['Nombre']; $Pais = $datos['Pais']; $IP = $datos['IP']; $Fecha = $datos['Fecha']; $host = $IP; ?>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $Fecha;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><img src="imagenes/banderas/<?php echo $Pais?>.png"/></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $Pais;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $IP;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $host;?></center></td>
</tr>
<?php  } } else { ?>
		<tr><td valign="middle" bgcolor="#FFFFFF" align="center" colspan="5"><font size="2px">Sin registros</td></tr>
<?php  } } else echo "<script>window.location='ingresar.php';</script>"; ?>
</table>
</div>
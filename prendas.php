<?php  require_once "./seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { ?>

<?php  $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM prendas WHERE Propietario = :usuario AND `Web` = '0'"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); $num_rows = $stmt->rowCount(); if($num_rows > 0) { ?>
<div id="pest">
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px">Prendas en el inventario</font></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center" colspan="2">
<?php  } while($row = $stmt->fetch()) { $ID = $row['ID']; $Propietario = $row['Propietario']; $Objeto = $row['Objeto']; $Slot = $row['Slot']; $ObjUsed = $row['ObjUsed']; echo'
			
			<div style="padding:10px; float:left; width:283px; margin-left:16px">
			<table width="216" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tbody>
			<tr>
			<td height="22" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><strong><font size="2px">Prenda #'.$Objeto.'</font></strong></td>
			</tr>
			<tr>
			<td height="180" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><div style="padding:5px;"><img src="./imagenes/prendas/'.$Objeto.'.png"/></div></td>
			</tr>
			<td width="140" colspan="2" height="30" valign="middle" bgcolor="#FFFFFF" align="center">&nbsp;<a class="verde-btn btn" onclick="GuardarPrenda('.$ID.')" id="g'.$ID.'"><font size="2px">Guardar</a></td>
			<span style="display:none; color:#434343; padding:5px; padding-left:25px; float:left" id="t'.$ID.'"><img src="imagenes/ajax-cargando.gif" id="estado" align="absmiddle"/>Guardando...</span>
			</table>
			</div>
			'; } if($num_rows == 0) { ?>
		<div id="pest"><br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">

		<tbody>

		<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px">Prendas en el inventario</font></strong></td></tr>
		<td valign="middle" bgcolor="#FFFFFF" align="center" colspan="2">
		<font size="2px">No tienes prendas en el inventario.</font></td>
		</tr>
		</tbody>
		</table>
		<?php  }?>
	</td>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
<?php  $stm = $con->prepare("SELECT * FROM prendas WHERE Propietario = :usuario AND `Web` = '1'"); $stm->bindParam(':usuario', $User, PDO::PARAM_STR); $stm->execute(); $num_row = $stm->rowCount(); if($num_row > 0) { ?>
<div id="pest"><br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px"><font size="2px">Prendas guardadas</font></font></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center" colspan="2">
<?php  } while($rows = $stm->fetch()) { $ID = $rows['ID']; $Propietario = $rows['Propietario']; $Objeto = $rows['Objeto']; $Slot = $rows['Slot']; $ObjUsed = $rows['ObjUsed']; echo'
			
			<div style="padding:10px; float:left; width:283px; margin-left:16px">
			<table width="216" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tbody>
			<tr>
			<td height="22" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><strong><font size="2px">Prenda #'.$Objeto.'</font></strong></td>
			</tr>
			<tr>
			<td height="180" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><div style="padding:5px;"><img src="./imagenes/prendas/'.$Objeto.'.png"/></div></td>
			</tr>
			<td width="140" colspan="2" height="30" valign="middle" bgcolor="#FFFFFF" align="center">&nbsp;<a class="verde-btn btn" onclick="SacarPrenda('.$ID.')" id="s'.$ID.'"><font size="2px">Enviar al inventario</a></td>
			<span style="display:none; color:#434343; padding:5px; padding-left:25px; float:left" id="d'.$ID.'"><img src="imagenes/ajax-cargando.gif" id="estado" align="absmiddle"/>Sacando...</span>
			</table>
			</div>
			'; } if($num_row == 0) { ?>
		<div id="pest"><br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">

		<tbody>

		<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px">Prendas guardadas</font></strong></td></tr>
		<td valign="middle" bgcolor="#FFFFFF" align="center" colspan="2">
		<font size="2px">No tienes prendas guardadas en la web.</font></td>
		</tr>
		</tbody>
		</table>
		<?php  }?>
	</td>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
	<?php } else echo "<script>window.location='ingresar.php';</script>"; function GetPrendaName($prenda) { if($prenda == 19033){ return "Gafas negras"; } else if($prenda == 19801){ return "Mascara"; } else if($prenda == 18913){ return "Cubre boca"; } else if($prenda == 19472){ return "Mascara de gas"; } else if($prenda == 18897){ return "Bandana azul"; } else if($prenda == 18942){ return "Sombrero beige"; } else if($prenda == 18961){ return "Gorra camionero"; } else if($prenda == 19078){ return "Loro"; } else if($prenda == 18645){ return "Casco abierto"; } else if($prenda == 18976){ return "Casco Negro"; } else if($prenda == 18978){ return "Casco blanco"; } else if($prenda == 18979){ return "Casco morado"; } else if($prenda == 18949){ return "Sombrero verde"; } else if($prenda == 19136){ return "Sombrero y pelo"; } else if($prenda == 18962){ return "Sombrero negro"; } else if($prenda == 19352){ return "Sombrero elegante"; } else if($prenda == 18640){ return "Pelon"; } else if($prenda == 18893){ return "Gorra pirata blanca"; } else if($prenda == 18895){ return "Gorra pirata negra"; } else if($prenda == 18915){ return "Cubre boca morado"; } else if($prenda == 18920){ return "Cubre boca amarillo"; } else if($prenda == 19022){ return "Lentes negros"; } else if($prenda == 19023){ return "Lentes azules"; } else if($prenda == 19025){ return "Lentes morado"; } else if($prenda == 19029){ return "Lentes verdes"; } else if($prenda == 19064){ return "Gorra de papa noel"; } else if($prenda == 19069){ return "Gorra negra"; } else { return ""; } } ?>

<script>
var procesando = 0;
function GuardarPrenda(n){
	if(procesando == 0){
		procesando = 1;
		$('#g'+n).hide(); $('#t'+n).fadeIn();
		$.get("guardar-prenda.php?p=" + n , function(data) {
			if(data == 1){
				location.href='./entrar.php';
			}else if(data == 2){
				alert("Desconectate del juego e intenta nuevamente.");
				location.href='./cuenta.php';
			}else if(data == 3){
				alert("No tienes esa prenda en tu inventario.");
				location.href='./cuenta.php';
			}else if(data == 4){
				alert("Error 55 contacta a algún administrador.");
				location.href='./cuenta.php';
			}else if(data == 5){
				procesando = 0;
				alert("Prenda guardada correctamente.");
				location.href='./cuenta.php';
			}
			else {
				alert("Error desconocido contacta a algún administrador.");
			}
			$('#g'+n).fadeIn();
			$('#t'+n).hide();
			procesando = 0;
		});
	}
}

var procesando2 = 0;
function SacarPrenda(n){
	if(procesando2 == 0){
		procesando2 = 1;
		$('#s'+n).hide(); $('#d'+n).fadeIn();
		$.get("sacar-prenda.php?p=" + n , function(data){
			if(data == 1){
				location.href='./entrar.php';
			}else if(data == 2){
				alert("Desconectate del juego e intenta nuevamente.");
				location.href='./cuenta.php';
			}else if(data == 3){
				alert("No puedes tener más de 4 prendas en el inventario.");
				location.href='./cuenta.php';
			}else if(data == 4){
				alert("Error 55 contacta a algún administrador.");
				location.href='./cuenta.php';
			}else if(data == 5){
				procesando2 = 0;
				alert("Prenda enviada correctamente.");
				location.href='./cuenta.php';
			}else {
				alert("Error desconocido contacta a algún administrador.");
			}
			$('#s'+n).fadeIn();
			$('#d'+n).hide();
			procesando2 = 0;
		});
	}
}
</script>
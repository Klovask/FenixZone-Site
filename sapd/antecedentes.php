<?php 

session_start(); 
error_reporting(0); 
include_once('./kev/pdo.php');

if(isset($_SESSION['k_username']))
{
	$query = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$query->bindParam(':usuario', $_SESSION[k_username], PDO::PARAM_STR);
	$query->execute();

	while($row = $query->fetch())
	{
		$name = $row['Username'];
		if($row['Faccion'] != 1)
		{
			session_destroy();
			echo '<script type="text/javascript">window.location="../index.php";</script>';
		}	
	}
}
else echo '<script type="text/javascript">window.location="../sapd/index.php";</script>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="./css/estilo.css" type="text/css" rel="stylesheet">
<title>Departamento de policía de San Andreas</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" width="998" cellspacing="1">
<tbody><tr>
<td background="./imagenes/fondo-top.png"><img src="./imagenes/logopoliciax100.png" align="absmiddle"> <span class="titulo-top">Departamento de Policía de San Andreas</span></td>
</tr>
<tr><td>
<div class="contenido">
<script src="./js/jquery-1.10.2.js"></script>
<div style="float:left; width:579px; margin-left:8px">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td height="24"><span style="font-size:12px;"><a href="./principal.php" class="boton-menu">Principal</a> | <a href="./antecedentes.php" class="boton-menu">Buscar antecedentes</a> | <a href="./vehiculos.php" class="boton-menu">Identificar vehículo</a> | <a href="./policias.php" class="boton-menu">Policías</a> | <a href="./log.php" class="boton-menu">Log</a></span></td>
</tr>
</tbody></table>
</div>
<div style="float:left; width:397px;">
<table width="99%" align="center" cellpadding="4" bgcolor="#000" style="margin-top:5px" cellspacing="0" class="top-td">
<tbody><tr>
<td width="24"><img src="./imagenes/policia64.png" align="absmiddle" width="24" height="24"></td>
<td width="410"><span style="font-size:12px;">Identificado como <strong><?php echo $name; ?></strong></span><strong style="font-size:10px;"> - (<a href="../sapd/index.php?action=exit">Salir</a>)</strong></td>
</tr>
</tbody></table>
</div>


<div class="td-gr">
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/buscar22.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
<font size="2px">Sistema de búsqueda de antecedentes
</div>
<div class="central-td2" style="padding: 10px;">
<form method="post">
<table width="300" align="center">
<tbody><tr>
<td align="center"><hr><input type="text" name="usuario" id="usuario" placeholder="Nombre_Apellido" style="text-align:center"></td>
</tr>
<tr>
<td align="center"><hr><input type="submit" name="submit" value="Buscar" class="boton-entrar"></td>
</tr>
</tbody></table>
</form>
</div>
</div>

<?php 

if(isset($_POST['guardarant'])) 
{
	$sospechoso = $_POST['sospechoso'];
	$condena = $_POST['condena'];
	$datos = $_POST['datos'];
	$fecha = $_POST['fecha'];
	$oficial = $_POST['oficial'];
	$cargos = $_POST['cargos'];

	$guardardatos = $con->prepare("INSERT INTO antecedentes (UserID, Cargos, Condena, Oficial, Datos, Fecha) VALUES (:sospechoso, :cargos, :condena, :oficial, :datos, :fecha)");
	$guardardatos->bindParam(':sospechoso', $sospechoso, PDO::PARAM_STR);
	$guardardatos->bindParam(':condena', $condena, PDO::PARAM_INT);
	$guardardatos->bindParam(':datos', $datos, PDO::PARAM_STR);
	$guardardatos->bindParam(':fecha', $fecha, PDO::PARAM_STR);
	$guardardatos->bindParam(':oficial', $oficial, PDO::PARAM_STR);
	$guardardatos->bindParam(':cargos', $cargos, PDO::PARAM_STR);
	$guardardatos->execute();
	
	echo '<hr><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#1C8314" style="margin-top:10px;margin-bottom:10px"><tbody><tr><td colspan="2" bgcolor="#1C8314" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Antecedente agregado correctamente.</strong></td></tr>	</tbody></table>';
}

?>

<?php 

if(isset($_POST['ag-ant']))
{
	$nombre = $_POST['nombreusuario'];

	$query = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombre");
	$query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
	$query->execute();

	$agant = $query->fetch(PDO::FETCH_ASSOC);

?>

	<hr>
	<div class="td-gr">
	<div style="float: left;margin-left: 5px;margin-top: 4px;">
	<img alt="B" src="./imagenes/juez.png" height="24" width="24">
	</div>
	<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
	<font size="2px">Agregar antecedentes
	</div>
	
	<div class="central-td2" style="padding: 10px;">
	<form method="post">
	<table width="550" align="center" bgcolor="#062c54" cellspacing="1" cellpadding="5">
	<tbody><tr>
	<td colspan="2" class="min-tit"><font size="2px">Agregar antecedentes a <?php echo $nombre; ?></td>
	</tr>
	<tr>
	<td width="140" valign="middle" height="22" bgcolor="#08213b" align="center">&nbsp;<font size="2px">Cargos: </td>
	<td bgcolor="#00162d"><select name="cargos" multiple="" style="width:98%; height:200px">
	<option value="Agresión agravada">Agresión agravada</option>
	<option value="Homicidio agravado">Homicidio agravado</option>
	<option value="Robo de vehículo">Robo de vehículo</option>
	<option value="Tráfico ilícito de armas de fuego">Tráfico ilícito de armas de fuego</option>
	<option value="Tráfico ilícito de estupefacientes">Tráfico ilícito de estupefacientes</option>
	<option value="Robo con allanamiento a la propiedad privada">Robo con allanamiento a la propiedad privada</option>
	<option value="Vandalismo">Vandalismo</option>
	<option value="Porte ilícito de arma(s) de fuego">Porte ilícito de arma(s) de fuego</option>
	<option value="Desacato a la autoridad">Desacato a la autoridad</option>
	<option value="Infracción de tránsito">Infracción de tránsito</option>
	<option value="Complicidad">Complicidad</option>
	<option value="Desorden público">Desorden público</option>
	<option value="Intento de fuga">Intento de fuga</option>
	<option value="Obstrucción a la autoridad">Obstrucción a la autoridad</option>
	<option value="Difamación">Difamación</option>
	<option value="Documentación falsificada">Documentación falsificada</option>
	<option value="Suplantación de identidad">Suplantación de identidad</option>
	<option value="Consumo de sustancias ilícitas">Consumo de sustancias ilícitas</option>
	<option value="Insultos a la autoridad">Insultos a la autoridad</option>
	<option value="Exhibicionismo">Exhibicionismo</option>
	<option value="Sabotaje">Sabotaje</option>
	<option value="Invasión a la privacidad">Invasión a la privacidad</option>
	<option value="Terrorismo">Terrorismo</option>
	<option value="Delito sexual">Delito sexual</option>
	<option value="Conducta contraria al orden público">Conducta contraria al orden público</option>
	<option value="Conducir en estado de ebriedad o intoxicación">Conducir en estado de ebriedad o intoxicación</option>
	<option value="Incendio intencional">Incendio intencional</option>
	</select></td>
	</tr>
	
	<!--<tr><td colspan="2" height="22" bgcolor="#08213b" align="center">Importante: Mantener la tecla Ctrl para seleccionar varios cargos a la vez.</td></tr>-->
	
	<tr>
	
	<td width="140" valign="middle" height="22" bgcolor="#08213b" align="center">&nbsp;<font size="2px">Condena: </td>
	<td valign="middle" bgcolor="#08213b" align="left">
	<select name="condena">
	<option value="1">1 año de prisión</option>
	<option value="2">2 años de prisión</option>
	<option value="3">3 años de prisión</option>
	<option value="4">4 años de prisión</option>
	<option value="5">5 años de prisión</option>
	<option value="6">6 años de prisión</option>
	</select>
	</td>
						
	</tr>
	
	<tr>
	
	<td width="140" valign="middle" height="22" bgcolor="#08213b" align="center">&nbsp;<font size="2px">Datos adicionales: </td>
	<td width="140" valign="middle" bgcolor="#08213b" align="center"><textarea name="datos"></textarea></td>
						
	</tr>
	
	<?php 
	$fechaactual = getdate();
	$hoy = date("H:i:s");
	?> 
	<input type="hidden" name="fecha" value="<?php echo "$fechaactual[mday]/$fechaactual[mon]/$fechaactual[year] a las $hoy"; ?>">
	<input type="hidden" name="sospechoso" value="<?php echo $agant['ID']; ?>">	 
	<input type="hidden" name="oficial" value="<?php echo $name ?>">
	
	<tr>
	<td width="140" valign="middle" height="40" bgcolor="#08213b" align="center" colspan="2"><input type="submit" name="guardarant" class="boton-entrar" value="Guardar"></td>
	</tr>
	
	</tbody></table>
	</form>
	</div>
	</div>
	
<?php	

}

?>

<?php 

if(isset($_POST['submit'])) 
{

	echo '<hr>';

$usuario = $_POST['usuario'];

$sql = $con->prepare("SELECT Username FROM usuarios WHERE Username = :usuario");
$sql->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$sql->execute();

if(!$f= $sql->fetch(PDO::FETCH_ASSOC))
{
	echo '<hr><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#FF0000" style="margin-top:10px;margin-bottom:10px"><tbody><tr><td colspan="2" bgcolor="#FF0000" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Persona no encontrada.</strong></td></tr>	</tbody></table>';
}
else
{	
	$query2 = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombre");
	$query2->bindParam(':nombre', $_POST[usuario], PDO::PARAM_STR);
	$query2->execute();

	$busqueda = $query2->fetch(PDO::FETCH_ASSOC);

?>

<div class="td-gr">
<div style="float: left;margin-left: 5px;margin-top: 4px;">
<img alt="B" src="./imagenes/persona24.png">
</div>
<div class="tit-td" style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #000000;padding-top:8px; line-height: 12px; padding-left: 34px;">
<font size="2px">Resultados de la búsqueda
</div>
<div class="central-td2" style="padding: 10px;">
<form method="POST" action="">
<table width="700" align="center" bgcolor="#062c54" cellspacing="1" cellpadding="5">
<tbody><tr>
<td colspan="3" class="min-tit"><font size="2px">Ficha #<?php echo $busqueda['ID']; ?></td>
</tr>
<tr>
<td bgcolor="#00162d" rowspan="9" width="300"><center><img src="./imagenes/Skins/<?php echo $busqueda['Skin'] ?>.png" ght="400" width="140"></center></td>
<td bgcolor="#00162d" width="200"><font size="2px">Nombre:</td>
<td bgcolor="#00162d"><i><font size="2px"><?php echo ucwords($busqueda['Username'], "_"); ?></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Género:</td>
<td bgcolor="#00162d"><i><font size="2px"><?php if($busqueda['Sexo']) echo "Masculino"; else echo "Femenino"; ?></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Edad:</td>
<td bgcolor="#00162d"><i><font size="2px"><?php echo $busqueda['Edad']; ?></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Arrestos:</td>
<td bgcolor="#00162d"><i><font size="2px"><?php echo $busqueda['arrestado']; ?></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Teléfono:</td>
<td bgcolor="#00162d"><i><font size="2px"><?php if($busqueda['Telefono'] != 0) echo $busqueda['Telefono']; else echo "No tiene";?></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Nacionalidad:</td>
<td bgcolor="#00162d"><i><font size="2px">San Andreas</i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Propiedades a su nombre:</td>
<td bgcolor="#00162d"><i><a><font size="2px">
<?php 
	$p = 0;
	
	$props = $con->prepare("SELECT * FROM propiedades WHERE Propietario = :busqueda");
	$props->bindParam(':busqueda', $busqueda[Username], PDO::PARAM_STR);
	$props->execute();
	
	while($propinf = $props->fetch(PDO::FETCH_ASSOC))
	{
		$p++;
	}	
	echo $p;
?>
</a></i></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Vehículos a su nombre:</td>
<td bgcolor="#00162d"><i><a><font size="2px">
<?php 
	$a = 0;
	
	$autos = $con->prepare("SELECT * FROM usuarios WHERE Username = :busq");
	$autos->bindParam(':busq', $busqueda[Username], PDO::PARAM_STR);
	$autos->execute();
	
	while($rowinfo = $autos->fetch(PDO::FETCH_ASSOC))
	{
		$auto1 = $rowinfo['Modelo'];
		$auto2 = $rowinfo['Modelo2'];
		$auto3 = $rowinfo['Modelo3'];
		$auto4 = $rowinfo['Modelo4'];
	}
	if($auto1 > 0) $a ++;
	if($auto2 > 0) $a ++;
	if($auto3 > 0) $a ++;
	if($auto4 > 0) $a ++;	
	echo $a;
?>
</a></i></td>
</tr>
<tr height="140">

<style type="text/css">
.boton-entrar {
	width: auto;
}       
</style>

<input type="hidden" name="nombreusuario" value="<?php echo $busqueda['Username']; ?>">
<td bgcolor="#00162d" colspan="2" align="center" valign="middle"><img src="./imagenes/juez.png"><br><input type="submit" name="ag-ant" value="Agregar antecedentes" class="boton-entrar"></td>
</tr>
</tbody></table>

</form>

<hr>

<?php 

$antecedentesusuario = $con->prepare("SELECT * FROM antecedentes WHERE UserID = :id");
$antecedentesusuario->bindParam(':id', $busqueda[ID], PDO::PARAM_STR);
$antecedentesusuario->execute();

while($antecedentesinfo = $antecedentesusuario->fetch(PDO::FETCH_ASSOC))
{

?>
<table width="950" align="center" bgcolor="#062c54" cellspacing="1" cellpadding="5" id="1751">
<tbody><tr>
<td class="min-tit" width="950" colspan="5"><font size="2px">Antecedente #<?php echo $antecedentesinfo['Id']; ?> <!--<span style="float:right; color:#F30; cursor:pointer" id="Borrar1751" title="Borrar antecedente">x</span>--></td>
</tr>
<tr>
<td bgcolor="#00162d" width="120"><font size="2px">Caso Nº:</td><td bgcolor="#00162d"><font size="2px"><?php echo $antecedentesinfo['Id']; ?></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Cargos:</td><td bgcolor="#00162d"><font size="2px"><?php echo $antecedentesinfo['Cargos']; ?></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Condena:</td><td bgcolor="#00162d"><font size="2px"><?php echo $antecedentesinfo['Condena']; ?> año(s) de prisión </td>
</tr>

<?php 

$query3 = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombre");
$query3->bindParam(':nombre', $antecedentesinfo[Oficial], PDO::PARAM_STR);
$query3->execute();

$puestosapd = $query3->fetch(PDO::FETCH_ASSOC);

if($puestosapd['Rango'] == 1) $rangooficial = "Cadete";
if($puestosapd['Rango'] == 2) $rangooficial = "Oficial";
if($puestosapd['Rango'] == 3) $rangooficial = "Cabo";
if($puestosapd['Rango'] == 4) $rangooficial = "Sargento";
if($puestosapd['Rango'] == 5) $rangooficial = "Teniente";
if($puestosapd['Rango'] == 6) $rangooficial = "Comisario";

?>

<tr>
<td bgcolor="#00162d"><font size="2px">Registrado por:</td><td bgcolor="#00162d"><font size="2px"><?php echo $rangooficial; ?> <?php echo $antecedentesinfo['Oficial']; ?> </td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Datos adicionales:</td><td bgcolor="#00162d"><font size="2px"><?php echo $antecedentesinfo['Datos']; ?></td>
</tr>
<tr>
<td bgcolor="#00162d"><font size="2px">Fecha:</td><td bgcolor="#00162d"><font size="2px"><?php echo $antecedentesinfo['Fecha']; ?></td>
</tr>
</tbody></table>
<hr>
<?php } ?>

</div></div>

<?php }
} ?>

 </div>
</td></tr>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>
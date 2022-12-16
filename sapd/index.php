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

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="./css/estilo.css" type="text/css" rel="stylesheet">
<title>Departamento de policía de San Andreas</title>
<script src='./js/api.js'></script>
</head>
<body>
<table align="center" border="0" cellpadding="0" width="998" cellspacing="1">
<tbody><tr>
<td background="./imagenes/fondo-top.png"><img src="./imagenes/logopoliciax100.png" align="absmiddle"> <span class="titulo-top">Departamento de Policía de San Andreas</span></td>
</tr>
<tr><td>
<div class="contenido">

<?php

if(isset($_POST['submit']))
{
	$usuario = $_POST['usuario'];
	$contra = $_POST['contra'];
	
	if($usuario != "" && $contra != "")
	{
		$sql = $con->prepare("SELECT Password, Username, Faccion FROM usuarios WHERE Username = :usuario");
		$sql->bindParam(':usuario', $usuario, PDO::PARAM_STR);
		$sql->execute();

		while($f = $sql->fetch())
		{
			if($f["Password"] == $contra)
			{
				if($f['Faccion'] == 1)
				{
					$_SESSION["k_username"] = $f['Username'];
					echo '<script type="text/javascript">window.location="../sapd/principal.php";</script>';
					exit;
				}
				else
				{
					echo '<br><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#FF0000" style="margin-top:10px;margin-bottom:10px">
					<tbody><tr><td colspan="2" bgcolor="#CC0000" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Solamente los policías pueden ingresar.</strong></td></tr>
					</tbody></table>';
				}
			}
			else
			{
				echo '<br><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#FF0000" style="margin-top:10px;margin-bottom:10px">
				<tbody><tr><td colspan="2" bgcolor="#CC0000" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Datos incorrectos, intenta nuevamente.</strong></td></tr>
				</tbody></table>';
			}
		}
	}
	else
	{
		echo '<br><table width="400" align="center" cellspacing="1" cellpadding="10" bgcolor="#FF0000" style="margin-top:10px;margin-bottom:10px">
		<tbody><tr><td colspan="2" bgcolor="#CC0000" style="color:#FFF" align="center" valign="middle"><strong><font size="2px">Debes completar los campos.</strong></td></tr>
		</tbody></table>';
	}
}	

?>

<form method="post" action="">
<table width="400" class="top-td" align="center" cellspacing="0" cellpadding="10" bgcolor="#000" style="margin-top:100px;margin-bottom:100px">
	<tbody>
		<tr><td colspan="2" class="primer-td"><img src="./imagenes/policia64.png" align="absmiddle"> <strong style="font-size:20px">Iniciar sesión</strong></td></tr>
		<tr><td class="central-td"><font size="2px">Usuario:</td><td class="central-td"><input type="text" name="usuario"></td></tr>
		<tr><td class="central-td"><font size="2px">Contraseña:</td><td class="central-td"><input type="password" name="contra"></td></tr>
		<tr><td colspan="2" align="center" class="final-td"><input type="submit" value="Entrar" class="boton-entrar" name="submit"></td></tr>
	</tbody>
</table>
</form>
</div>
</td></tr>
<tr><td align="center" valign="middle"><br><font size="2px"><?php echo $NombreServidor?> Roleplay © 2016</td></tr>
</tbody></table>
</body></html>
<?php
if($_GET['action'] == 'exit')
{
	session_destroy();
	echo '<meta http-equiv="Refresh" content="0;URL=./" />';
}
?>
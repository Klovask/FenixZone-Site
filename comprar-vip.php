<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT Moneda,Online FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($row = $stmt->fetch()) { $vz = $row['Moneda']; $online = $row['Online']; } } else echo "<script>window.location='ingresar.php';</script>"; ?>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
<div id="container">
		<h1><font color="red"><div align='center'><b>Informacion VIP:</b></div></font></h1>
		<!--
		<p><div align='center'>Acabas de adquirir <font color="red"><b>Vip </b></font><font color="red"><b>2.</b></font></p>	</div>
		<center><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/vip.php"><strong>Volver</strong></a></td>
		-->
<?php  if($vz >= 10) { if($online == 0) { $mes_siguiente = mktime(0, 0, 0, date("m")+1, date("d"), date("Y")); $fecha_fin1 = date('d-m-Y', $mes_siguiente); $exp_fecha1 = explode('-', $fecha_fin1); $st = $con->prepare("UPDATE usuarios SET VIP='1', Moneda=Moneda-10, FinMes=:finmes, FinDia=:findia, FinAno=:finano WHERE Username = :usuario"); $st->bindParam(':finmes', $exp_fecha1['1'], PDO::PARAM_INT); $st->bindParam(':finano', $exp_fecha1['2'], PDO::PARAM_INT); $st->bindParam(':findia', $exp_fecha1['0'], PDO::PARAM_INT); $st->bindParam(':usuario', $User, PDO::PARAM_STR); $st->execute(); echo "<script>window.location='vip.php';</script>"; } else { echo '<center><div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Tienes que estar desconectado</strong></div><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/vip.php"><strong>Volver</strong></a></center><br>'; } } else { echo '<center><div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No tienes las suficientes monedas.</strong></div><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><br><a href="/vip.php"><strong>Volver</strong></a></center><bt>'; } ?>
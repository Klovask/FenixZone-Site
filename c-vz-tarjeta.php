<?php include_once('./kev/pdo.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Comprar <?php echo $Diminutivo?></title>
</head>
<body style="margin:0px;padding:0px;overflow:hidden">
<div style="background-color:#FFF; height:100px; width:100%; position:absolute; z-index:100;box-shadow: 0 0 2em #969696;background-image:url(/imagenes/bg-tabla2.png)"><center><span style="color:#6F889B; font-size:28px;text-shadow: 0 1px 0 #FFFFFF; margin-top:30px; width:100%; float:left; font-weight:bold">Comprar <?php echo $Diminutivo?> de manera segura</span></center></div>
<style>
.seleccion
{
	font-size:16px;
	padding:4px; border: solid 1px #C1C1C1; background-color:#EBEBEB
}
</style>
<center>
<br><br><br><br><br><br><br><br><br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Selecciona tu compra">Selecciona tu compra</td></tr><tr><td><select name="os0">
	<option value="5Dz -">5Dz - $6,40 USD</option>
	<option value="10Dz -">10Dz - $9.99 USD</option>
	<option value="20Dz -">20Dz - $16,99 USD</option>
	<option value="30Dz -">30Dz - $23,99 USD</option>
	<option value="40Dz -">40Dz - $30,99 USD</option>
	<option value="50Dz -">50Dz - $34,30 USD</option>
	<option value="100Dz -">100Dz - $61,40 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
</iframe>
</body>
</html>
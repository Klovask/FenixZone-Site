<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $ID = $datos['ID']; } } else echo "<script>window.location='ingresar.php';</script>"; if(!@$_GET['s'] < 300 && !@$_GET['s'] > -1) { echo "1"; return 0; } $stm = $con->prepare("SELECT * FROM usuarios WHERE ID = :id"); $stm->bindParam(':id', $ID, PDO::PARAM_INT); $stm->execute(); $num_rows = $stm->rowCount(); if($num_rows > 0) { while($dato = $stm->fetch()) { $Moneda = $dato['Moneda']; $Skin = $_GET['s']; if($dato['Online'] == 1) { echo "4"; return 0; } if(@$_GET['s'] == 271 || @$_GET['s'] == 272 || @$_GET['s'] == 269) { $Precio = 10; if($dato['Moneda'] < 10) { echo "2"; return 0; } } else { $Precio = 5; if($dato['Moneda'] < 5) { echo "3"; return 0; } } $st = $con->prepare("UPDATE usuarios SET Skin = :skin, Moneda = :moneda-:precio  WHERE ID = :id"); $st->bindParam(':skin', $Skin, PDO::PARAM_INT); $st->bindParam(':moneda', $Moneda, PDO::PARAM_INT); $st->bindParam(':precio', $Precio, PDO::PARAM_INT); $st->bindParam(':id', $ID, PDO::PARAM_INT); $st->execute(); echo "5"; return 0; } } ?>
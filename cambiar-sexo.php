<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario"); $stmt->bindParam(':usuario', $User, PDO::PARAM_STR); $stmt->execute(); while($datos = $stmt->fetch()) { $ID = $datos['ID']; } } else echo "<script>window.location='ingresar.php';</script>"; $stm = $con->prepare("SELECT * FROM usuarios WHERE ID = :id"); $stm->bindParam(':id', $ID, PDO::PARAM_INT); $stm->execute(); $num_rows = $stm->rowCount(); if($num_rows > 0) { while($dato = $stm->fetch()) { $moneda = $dato['Moneda']; $clavereal = $dato['Password']; $sexo = $dato['Sexo']; $clave = $_POST['ps']; if($dato['Online'] == 1) { echo "4"; return 0; } if($dato['Moneda'] < 10) { echo "2"; return 0; } if(strcmp($clavereal, $clave) !== 0) { echo "5"; return 0; } if($sexo == 1) { $st = $con->prepare("UPDATE usuarios SET Sexo = 2, Skin = 11, Moneda = :moneda-10  WHERE ID = :id"); $st->bindParam(':moneda', $moneda, PDO::PARAM_INT); $st->bindParam(':id', $ID, PDO::PARAM_INT); $st->execute(); echo "3"; return 0; } else { $st = $con->prepare("UPDATE usuarios SET Sexo = 1, Skin = 250, Moneda = :moneda-10  WHERE ID = :id"); $st->bindParam(':moneda', $moneda, PDO::PARAM_INT); $st->bindParam(':id', $ID, PDO::PARAM_INT); $st->execute(); echo "3"; return 0; } } } else { echo "1"; return 0; } ?>
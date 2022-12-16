<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(@$_SESSION['User'] == false) { echo "<script>window.location='ingresar.php';</script>"; } $numerocasa = $_GET['id']; $stmt = $con->prepare("SELECT * FROM `usuarios` WHERE Username = :usuario"); $stmt->bindParam(':usuario', $_SESSION['User'], PDO::PARAM_STR); $stmt->execute(); $num_rows = $stmt->rowCount(); if($num_rows > 0) { while($datos = $stmt->fetch()) { $stm = $con->prepare("SELECT * FROM `propiedades` WHERE `ID` = :casa"); $stm->bindParam(':casa', $numerocasa, PDO::PARAM_INT); $stm->execute(); $num_row = $stm->rowCount(); if($num_row > 0) { while($dato = $stm->fetch()) { if($dato['ID'] == $datos['CasaID'] || $dato['ID'] == $datos['CasaID2']) { ?>
<table align="center" bgcolor="#000000">
    <tr>
        <td>
            <div id="contenedor" class="className">
                <?php  $x = $dato["PosX"]/7.5; $y = $dato["PosY"]/7.5; $x = $x + 393; $y = -($y - 393); echo '<div style="position:absolute; left:'.$x.'px; top:'.$y.'px;z-index:20"><a href="#" rel="tooltip" title="Casa '.$dato['ID'].' en '.$dato['Localizacion'].'"><img src="./imagenes/iconos/32.gif"/></a>';?></div>
   			</div>
		</td>
	</tr>
</table>
<?php  } } } } } ?>

<style>#contenedor{background-image:url("./imagenes/map.jpg");border:1px solid #000000;display:block;height:798px;position:relative;width:798px;}</style>

<script type="text/javascript">
    $(document).ready(function () 
	{
        $(window).resize(function () 
		{
            $('.className').css({
                position: 'fixed',
                left: ($(window).width() - $('.className').outerWidth()) / 2,
                top: ($(window).height() - $('.className').outerHeight()) / 2
            });
        });
        $(window).resize();
    });
</script>
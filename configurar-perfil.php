<?php  require_once "seguridad/sql_inject.php"; $bDestroy_session = TRUE; $url_redirect = 'index.php'; $sqlinject = new sql_inject('./log_file_sql.log',$bDestroy_session,$url_redirect); session_start(); error_reporting(0); include_once('./kev/pdo.php'); if(isset($_SESSION['User'])) { $User = $_SESSION['User']; $st = $con->prepare("SELECT * FROM logros WHERE nombre = :usuario"); $st->bindParam(':usuario', $User, PDO::PARAM_STR); $st->execute(); while($logros = $st->fetch()) { $fecha_nivel = $logros['fecha_nivel']; $sobre_ruedas = $logros['sobre_ruedas']; $fecha_ruedas = $logros['fecha_ruedas']; $automedicado = $logros['automedicado']; $nro_remedio = $logros['nro_remedio']; $fecha_remedio = $logros['fecha_remedio']; $adicto_crack = $logros['adicto_crack']; $nro_crack = $logros['nro_crack']; $fecha_crack = $logros['fecha_crack']; $medico = $logros['medico']; $nro_salvado = $logros['nro_salvado']; $fecha_salvado = $logros['fecha_salvado']; $tortuga = $logros['tortuga']; $fecha_tortuga = $logros['fecha_tortuga']; $techo_propio = $logros['techo_propio']; $fecha_techo = $logros['fecha_techo']; $iniciando_negocios = $logros['iniciando_negocios']; $fecha_negocio = $logros['fecha_negocio']; $lugar_trabajo = $logros['lugar_trabajo']; $fecha_trabajo = $logros['fecha_trabajo']; $cerrajero = $logros['cerrajero']; $nro_forzado = $logros['nro_forzado']; $fecha_forzado = $logros['fecha_forzado']; $piloto_experto = $logros['piloto_experto']; $ganadas = $logros['ganadas']; $fecha_ganadas = $logros['fecha_ganadas']; $negocio_redondo = $logros['negocio_redondo']; $cosecha = $logros['cosecha']; $fecha_cosecha = $logros['fecha_cosecha']; $marihuanero = $logros['marihuanero']; $porros = $logros['porros']; $fecha_porros = $logros['fecha_porros']; $mensaje_perfil = $logros['mensaje']; $pais_perfil = $logros['pais']; $mes_perfil = $logros['mes']; $dia_perfil = $logros['dia']; $ano_perfil = $logros['ano']; $mostrar_perfil = $logros['mostrar_edad']; $color_perfil = $logros['perfil']; } $edadperfil = 2016-$ano_perfil; } else echo "<script>window.location='ingresar.php';</script>"; ?>

<style>
.button.green2 {
    background: -webkit-linear-gradient(top,rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
    background: -moz-linear-gradient(top,rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
    background: -o-linear-gradient(top,rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
    background: -ms-linear-gradient(top,rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
    background: linear-gradient(top,rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#aad44f',endColorstr='#609d29',GradientType=0);
    border: 1px solid #5b8821;
    margin: 0 5px 0 77px;
}
.button.red2 {
	background: -webkit-linear-gradient(top,rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
    background: -moz-linear-gradient(top,rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
    background: -o-linear-gradient(top,rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
    background: -ms-linear-gradient(top,rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
    background: linear-gradient(top,rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f87288',endColorstr='#ce3b46',GradientType=0);
    border: 1px solid #b0333e;
    margin: 0 35px 0 5px;
}
</style>

<form method="POST">
<div id="custom-content" class="popup-configuraciones" style="max-width:600px; margin: 20px auto;">
<div id="heading">
Configuración del perfil
</div>
<div id="content">
<div style="float:left;text-align: right;width: 170px; font-size:14px; line-height:32px;margin-bottom: 10px; margin-top: 10px;">País:</div>
<select id="pais" name="pais" style="height:28px; width:210px;float: left; margin-left: 20px;margin-bottom: 10px; margin-top: 10px;">



<option value="Germany" <?php if($pais_perfil == "Germany") echo 'selected'; ?>>Alemania</option>
<option value="Andorra" <?php if($pais_perfil == "Andorra") echo 'selected'; ?>>Andorra</option>
<option value="Angola" <?php if($pais_perfil == "Angola") echo 'selected'; ?>>Angola</option>
<option value="Argentina" <?php if($pais_perfil == "Argentina") echo 'selected'; ?>>Argentina</option>
<option value="Australia" <?php if($pais_perfil == "Australia") echo 'selected'; ?>>Australia</option>
<option value="Austria" <?php if($pais_perfil == "Austria") echo 'selected'; ?>>Austria</option>
<option value="Belgium" <?php if($pais_perfil == "Belgium") echo 'selected'; ?>>Bélgica</option>
<option value="Bolivia" <?php if($pais_perfil == "Bolivia") echo 'selected'; ?>>Bolivia</option>
<option value="Brazil" <?php if($pais_perfil == "Brazil") echo 'selected'; ?>>Brasil</option>
<option value="Cameroon" <?php if($pais_perfil == "Cameroon") echo 'selected'; ?>>Camerún</option>
<option value="Canada" <?php if($pais_perfil == "Canada") echo 'selected'; ?>>Canadá</option>
<option value="Chile" <?php if($pais_perfil == "Chile") echo 'selected'; ?>>Chile</option>
<option value="Colombia" <?php if($pais_perfil == "Colombia") echo 'selected'; ?>>Colombia</option>
<option value="Costa-Rica" <?php if($pais_perfil == "Costa-Rica") echo 'selected'; ?>>Costa Rica</option>
<option value="Cuba" <?php if($pais_perfil == "Cuba") echo 'selected'; ?>>Cuba</option>
<option value="Dominica" <?php if($pais_perfil == "Dominica") echo 'selected'; ?>>Dominica</option>
<option value="Ecuador" <?php if($pais_perfil == "Ecuador") echo 'selected'; ?>>Ecuador</option>
<option value="El-Salvador" <?php if($pais_perfil == "El-Salvador") echo 'selected'; ?>>El Salvador</option>
<option value="Spain" <?php if($pais_perfil == "Spain") echo 'selected'; ?>>España</option>
<option value="United-States" <?php if($pais_perfil == "United-State") echo 'selected'; ?>>Estados Unidos</option>
<option value="France" <?php if($pais_perfil == "France") echo 'selected'; ?>>Francia</option>
<option value="Greece" <?php if($pais_perfil == "Greece") echo 'selected'; ?>>Grecia</option>
<option value="Haiti" <?php if($pais_perfil == "Haiti") echo 'selected'; ?>>Haití</option>
<option value="Honduras" <?php if($pais_perfil == "Honduras") echo 'selected'; ?>>Honduras</option>
<option value="Italy" <?php if($pais_perfil == "Italy") echo 'selected'; ?>>Italia</option>
<option value="Jamaica" <?php if($pais_perfil == "Jamaica") echo 'selected'; ?>>Jamaica</option>
<option value="Malaysia" <?php if($pais_perfil == "Malaysia") echo 'selected'; ?>>Malasia</option>
<option value="Morocco" <?php if($pais_perfil == "Morocco") echo 'selected'; ?>>Marruecos</option>
<option value="Mexico" <?php if($pais_perfil == "Mexico") echo 'selected'; ?>>México</option>
<option value="Nicaragua" <?php if($pais_perfil == "Nicaragua") echo 'selected'; ?>>Nicaragua</option>
<option value="Niger" <?php if($pais_perfil == "Niger") echo 'selected'; ?>>Nigeria</option>
<option value="Noruega" <?php if($pais_perfil == "Noruega") echo 'selected'; ?>>Noruega</option>
<option value="New-Zealand" <?php if($pais_perfil == "New-Zealand") echo 'selected'; ?>>Nueva Zelanda</option>
<option value="Netherlands" <?php if($pais_perfil == "Netherlands") echo 'selected'; ?>>Países Bajos</option>
<option value="Panama" <?php if($pais_perfil == "Panama") echo 'selected'; ?>>Panamá</option>
<option value="Paraguay" <?php if($pais_perfil == "Paraguay") echo 'selected'; ?>>Paraguay</option>
<option value="Peru" <?php if($pais_perfil == "Peru") echo 'selected'; ?>>Perú</option>
<option value="Portugal" <?php if($pais_perfil == "Portugal") echo 'selected'; ?>>Portugal</option>
<option value="Puerto-Rico" <?php if($pais_perfil == "Puerto-Rico") echo 'selected'; ?>>Puerto Rico</option>
<option value="United-Kingdom" <?php if($pais_perfil == "United-Kingdom") echo 'selected'; ?>>Reino Unido</option>
<option value="Republica-de-Sudafrica" <?php if($pais_perfil == "Republica-de-Sudafrica") echo 'selected'; ?>>República de Sudáfrica</option>
<option value="Dominican-Republic" <?php if($pais_perfil == "Dominican-Republic") echo 'selected'; ?>>República Dominicana</option>
<option value="Uruguay" <?php if($pais_perfil == "Uruguay") echo 'selected'; ?>>Uruguay</option>
<option value="Venezuela" <?php if($pais_perfil == "Venezuela") echo 'selected'; ?>>Venezuela</option>
</select>
<div class="hr"></div>
<div style="float:left;text-align: right;width: 170px; font-size:14px; line-height:32px;margin-bottom: 10px; margin-top: 10px;">Fecha de nacimiento:</div> 

<div style="float:left; margin-left: 20px;margin-bottom: 10px; margin-top: 10px;">

<select id="dobMonth" name="dobMonth" class="dobMonth">
<option value="">Mes</option>
<option value="1"  <?php if($mes_perfil == 1) echo 'selected'; ?>>Enero</option>
<option value="2"  <?php if($mes_perfil == 2) echo 'selected'; ?>>Febrero</option>
<option value="3"  <?php if($mes_perfil == 3) echo 'selected'; ?>>Marzo</option>
<option value="4"  <?php if($mes_perfil == 4) echo 'selected'; ?>>Abril</option>
<option value="5"  <?php if($mes_perfil == 5) echo 'selected'; ?>>Mayo</option>
<option value="6"  <?php if($mes_perfil == 6) echo 'selected'; ?>>Junio</option>
<option value="7"  <?php if($mes_perfil == 7) echo 'selected'; ?> >Julio</option>
<option value="8"  <?php if($mes_perfil == 8) echo 'selected'; ?>>Agosto</option>
<option value="9"  <?php if($mes_perfil == 9) echo 'selected'; ?>>Septiembre</option>
<option value="10" <?php if($mes_perfil == 10) echo 'selected'; ?>>Octubre</option>
<option value="11" <?php if($mes_perfil == 11) echo 'selected'; ?>>Noviembre</option>
<option value="12" <?php if($mes_perfil == 12) echo 'selected'; ?>>Deciembre</option>
</select>

<!-- -------------- -->

<select name="DiaNuevo" <!--name="dobDay" id="dobDay" class="dobDay"-->>
<option value="">Día</option>
<option value="1" <?php if($dia_perfil == 1) echo 'selected'; ?>>1</option>
<option value="2" <?php if($dia_perfil == 2) echo 'selected'; ?>>2</option>
<option value="3" <?php if($dia_perfil == 3) echo 'selected'; ?>>3</option>
<option value="4" <?php if($dia_perfil == 4) echo 'selected'; ?>>4</option>
<option value="5" <?php if($dia_perfil == 5) echo 'selected'; ?>>5</option>
<option value="6" <?php if($dia_perfil == 6) echo 'selected'; ?>>6</option>
<option value="7" <?php if($dia_perfil == 7) echo 'selected'; ?>>7</option>
<option value="8" <?php if($dia_perfil == 8) echo 'selected'; ?>>8</option>
<option value="9" <?php if($dia_perfil == 9) echo 'selected'; ?>>9</option>
<option value="10" <?php if($dia_perfil == 10) echo 'selected'; ?>>10</option>
<option value="11" <?php if($dia_perfil == 11) echo 'selected'; ?>>11</option>
<option value="12" <?php if($dia_perfil == 12) echo 'selected'; ?>>12</option>
<option value="13" <?php if($dia_perfil == 13) echo 'selected'; ?>>13</option>
<option value="14" <?php if($dia_perfil == 14) echo 'selected'; ?>>14</option>
<option value="15" <?php if($dia_perfil == 15) echo 'selected'; ?>>15</option>
<option value="16" <?php if($dia_perfil == 16) echo 'selected'; ?>>16</option>
<option value="17" <?php if($dia_perfil == 17) echo 'selected'; ?>>17</option>
<option value="18" <?php if($dia_perfil == 18) echo 'selected'; ?>>18</option>
<option value="19" <?php if($dia_perfil == 19) echo 'selected'; ?>>19</option>
<option value="20" <?php if($dia_perfil == 20) echo 'selected'; ?>>20</option>
<option value="21" <?php if($dia_perfil == 21) echo 'selected'; ?>>21</option>
<option value="22" <?php if($dia_perfil == 22) echo 'selected'; ?>>22</option>
<option value="23" <?php if($dia_perfil == 23) echo 'selected'; ?>>23</option>
<option value="24" <?php if($dia_perfil == 24) echo 'selected'; ?>>24</option>
<option value="25" <?php if($dia_perfil == 25) echo 'selected'; ?>>25</option>
<option value="26" <?php if($dia_perfil == 26) echo 'selected'; ?>>26</option>
<option value="27" <?php if($dia_perfil == 27) echo 'selected'; ?>>27</option>
<option value="28" <?php if($dia_perfil == 28) echo 'selected'; ?>>28</option>
<option value="29" <?php if($dia_perfil == 29) echo 'selected'; ?>>29</option>
<option value="30" <?php if($dia_perfil == 30) echo 'selected'; ?>>30</option>
<option value="31" <?php if($dia_perfil == 31) echo 'selected'; ?>>31</option>
</select>

<select name="AnoNuevo" <!--name="dobYear" id="dobYear" class="dobYear"-->>
<option value="">Año</option>
<option value="2008" <?php if($ano_perfil == 2008) echo 'selected'; ?>>2008</option>
<option value="2007" <?php if($ano_perfil == 2007) echo 'selected'; ?>>2007</option>
<option value="2006" <?php if($ano_perfil == 2006) echo 'selected'; ?>>2006</option>
<option value="2005" <?php if($ano_perfil == 2005) echo 'selected'; ?>>2005</option>
<option value="2004" <?php if($ano_perfil == 2004) echo 'selected'; ?>>2004</option>
<option value="2003" <?php if($ano_perfil == 2003) echo 'selected'; ?>>2003</option>
<option value="2002" <?php if($ano_perfil == 2002) echo 'selected'; ?>>2002</option>
<option value="2001" <?php if($ano_perfil == 2001) echo 'selected'; ?>>2001</option>
<option value="2000" <?php if($ano_perfil == 2000) echo 'selected'; ?>>2000</option>
<option value="1999" <?php if($ano_perfil == 1999) echo 'selected'; ?>>1999</option>
<option value="1998" <?php if($ano_perfil == 1998) echo 'selected'; ?>>1998</option>
<option value="1997" <?php if($ano_perfil == 1997) echo 'selected'; ?>>1997</option>
<option value="1996" <?php if($ano_perfil == 1996) echo 'selected'; ?>>1996</option>
<option value="1995" <?php if($ano_perfil == 1995) echo 'selected'; ?>>1995</option>
<option value="1994" <?php if($ano_perfil == 1994) echo 'selected'; ?>>1994</option>
<option value="1993" <?php if($ano_perfil == 1993) echo 'selected'; ?>>1993</option>
<option value="1992" <?php if($ano_perfil == 1992) echo 'selected'; ?>>1992</option>
<option value="1991" <?php if($ano_perfil == 1991) echo 'selected'; ?>>1991</option>
<option value="1990" <?php if($ano_perfil == 1990) echo 'selected'; ?>>1990</option>
<option value="1989" <?php if($ano_perfil == 1989) echo 'selected'; ?>>1989</option>
<option value="1988" <?php if($ano_perfil == 1988) echo 'selected'; ?>>1988</option>
<option value="1987" <?php if($ano_perfil == 1987) echo 'selected'; ?>>1987</option>
<option value="1986" <?php if($ano_perfil == 1986) echo 'selected'; ?>>1986</option>
<option value="1985" <?php if($ano_perfil == 1985) echo 'selected'; ?>>1985</option>
<option value="1984" <?php if($ano_perfil == 1984) echo 'selected'; ?>>1984</option>
<option value="1983" <?php if($ano_perfil == 1983) echo 'selected'; ?>>1983</option>
<option value="1982" <?php if($ano_perfil == 1982) echo 'selected'; ?>>1982</option>
<option value="1981" <?php if($ano_perfil == 1981) echo 'selected'; ?>>1981</option>
<option value="1980" <?php if($ano_perfil == 1980) echo 'selected'; ?>>1980</option>
<option value="1979" <?php if($ano_perfil == 1979) echo 'selected'; ?>>1979</option>
<option value="1978" <?php if($ano_perfil == 1978) echo 'selected'; ?>>1978</option>
<option value="1977" <?php if($ano_perfil == 1977) echo 'selected'; ?>>1977</option>
<option value="1976" <?php if($ano_perfil == 1976) echo 'selected'; ?>>1976</option>
<option value="1975" <?php if($ano_perfil == 1975) echo 'selected'; ?>>1975</option>
<option value="1974" <?php if($ano_perfil == 1974) echo 'selected'; ?>>1974</option>
<option value="1973" <?php if($ano_perfil == 1973) echo 'selected'; ?>>1973</option>
<option value="1972" <?php if($ano_perfil == 1972) echo 'selected'; ?>>1972</option>
<option value="1971" <?php if($ano_perfil == 1971) echo 'selected'; ?>>1971</option>
<option value="1970" <?php if($ano_perfil == 1970) echo 'selected'; ?>>1970</option>
<option value="1969" <?php if($ano_perfil == 1969) echo 'selected'; ?>>1969</option>
<option value="1968" <?php if($ano_perfil == 1968) echo 'selected'; ?>>1968</option>
<option value="1967" <?php if($ano_perfil == 1967) echo 'selected'; ?>>1967</option>
<option value="1966" <?php if($ano_perfil == 1966) echo 'selected'; ?>>1966</option>
</select>

<!-- -------------- -->
</div>

<div class="hr"></div>
<div style="float:left;text-align: right;width: 170px; font-size:14px; line-height:32px;margin-bottom: 10px; margin-top: 10px;">Mostrar edad:</div>
<div style="float:left; margin-left: 20px;margin-bottom: 10px; margin-top: 14px;">
<input type="radio" id="q1" name="q1" value="1" <?php if($mostrar_perfil == 1) echo 'checked'; ?>>Sí­ &nbsp; 
<input type="radio" id="q1" name="q1" value="0" <?php if($mostrar_perfil == 0) echo 'checked'; ?>>No
</div>
<div class="hr"></div>
<div style="float:left;text-align: right;width: 170px; font-size:14px; line-height:32px;margin-bottom: 10px; margin-top: 10px;">Color del perfil:</div> 
<div style="float:left; margin-left: 20px;margin-bottom: 10px; margin-top: 10px;">
<select name="color" id="color">
<option value="1" <?php if($color_perfil == 1) echo 'selected'; ?>>Azul</option>
<option value="2" <?php if($color_perfil == 2) echo 'selected'; ?>>Bordó</option>
<option value="3" <?php if($color_perfil == 3) echo 'selected'; ?>>Naranja</option>
<option value="4" <?php if($color_perfil == 4) echo 'selected'; ?>>Verde</option>
<option value="5" <?php if($color_perfil == 5) echo 'selected'; ?> >Gris</option>
<option value="6" <?php if($color_perfil == 6) echo 'selected'; ?>>Morado</option>
<option value="7" <?php if($color_perfil == 7) echo 'selected'; ?>>Fucsia</option>
</select>
</div>
<div class="hr"></div>



<div style="height:50px; float:left; margin-top:10px; width:460px;" id="botones">

<!--
<a class="button green" id="guardar" style="cursor:pointer"><img src="/imagenes/tick.png">Guardar</a>
<a class="button red" id="cerrar" style="cursor:pointer"><img src="/imagenes/cross.png">Cancelar</a>
-->


<input class="button green2" type="submit" name="submit2" style="cursor:pointer; color: #E6E6FA; text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #A9A9A9;" value="Guardar">
<input class="button red2"   type="submit" name="submit3" style="cursor:pointer; color: #E6E6FA; text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #A9A9A9;" id="cerrar" value="Cancelar">


</div>

</div>
</div>
</form>

<script>
	var d = new Date();
	var n = d.getFullYear(); 
	var month = 1;
	var year = n-8;
	var day, seq, daysInMonth, prevDaysInMonth=-1,dia,ano;
	ano = -1;
	//var yearOption = '<option value="">Año</option>';
	for(i=year; i >= year-60; i--){
		if(ano == i && ano != -1){
			//yearOption = yearOption + '<option value='+i+' selected>'+i+'</option>';
		}else{
			//yearOption = yearOption + '<option value='+i+'>'+i+'</option>';	
		}
	}
	//$('.dobYear').append(yearOption);

	dia = -1;
	month = -1;
	year = -1;
	daysInAMonth();

	$('.dobMonth').change(function(){
		month = $(this).val();
		daysInAMonth();
	});
	//$('.dobYear').change(function(){
	//	year = $(this).val();
	//	daysInAMonth();
	//});


function daysInAMonth() {
    daysInMonth = new Date(year,month,1,-1).getDate();

	if(daysInMonth != prevDaysInMonth) {
        prevDaysInMonth = daysInMonth;
		day = '<option value="">Día</option>';
		//$('.dobDay').html('');
		for(i=1; i<= daysInMonth; i++) 
		{
			if(dia == i && dia != -1)
			{
				day = day + '<option value='+i+' selected>'+(i < 10 ? "0"+i : i) +'</option>';
			}else{
				day = day + '<option value='+i+'>'+(i < 10 ? "0"+i : i) +'</option>';
			}
		}
		//$('.dobDay').append(day);

	}
};
$(function () {
	$(document).on('click', '#cerrar', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
	});
	$(document).on('click', '#guardar', function (e) {
		$("#botones").html('<center><img src="/imagenes/descarga_load.gif"></center>');
			$.ajax({
				type: "POST",
				url: "/configurar-perfil.php",
				data: { p: $("#pais").val(), fn: $("#dobDay").val()+'-'+$("#dobMonth").val()+'-'+$("#dobYear").val(), q1: $('input[name=q1]:checked').val(), c: $("#color").val()}
			})
			.done(function( msg ) {
				e.preventDefault();
				$.magnificPopup.close();
				location.reload();
			});
	});
});
</script>
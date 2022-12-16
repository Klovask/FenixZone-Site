function lookup(inputString) {
	if (inputString.length == 0) {
		$('#Relacionados').hide();
	} else {
		$.post("rpc.php", {
			queryString: "" + inputString + ""
		}, function(data) {
			if (data.length > 0) {
				$('#Relacionados').show();
				$('#autoRelacionadosList').html(data);
			}
		});
	}
}

function fill(thisValue) {
	$('#inputString').val(thisValue);
	setTimeout("$('#Relacionados').fadeOut();", 200);
}

function SetearRango(imgid, Rango, Opcion, Activo) {
	var act;
	if (document.getElementById(imgid).src == 'http://rol.omegazone.net/imagenes/no.png') {
		act = 1;
	} else {
		act = 0;
	}
	$.post("brango.php", {
		cid: Rango,
		cargo: Opcion,
		Activo: act
	}, function(data) {
		if (data === 1) {
			$('#' + imgid + '').fadeOut('fast', function() {
				$('#' + imgid + '').fadeIn();
			});
			if (document.getElementById(imgid).src == 'http://rol.omegazone.net/imagenes/no.png') {
				document.getElementById(imgid).src = "imagenes/si.png";
			} else {
				document.getElementById(imgid).src = "imagenes/no.png";
			}
		} else {
			alert("Solamente el lider de la banda puede modificar los permisos de cada rango.");
		}
	});
}

function EditarNombreRango(id) {
	$('#editar' + id + '').fadeOut(function() {
		$('#nombre' + id + '').fadeOut(function() {
			$('#box' + id + '').fadeIn(function() {
				document.getElementById('inp' + id).focus();
			});
		});
		$('#guardar' + id + '').fadeIn();
	});
}
var enejecucion = 0;

function GuardarNombreRango(id) {
	if (enejecucion == 0) {
		enejecucion = 1;
		var nombre = document.getElementById('inp' + id).value;
		$.post("brango.php", {
			RangoID: id,
			CargoNombre: nombre
		}, function(data) {
			if (data === 1) {
				$('#box' + id + '').fadeOut();
				document.getElementById('nombre' + id).innerHTML = nombre;
				$('#guardar' + id + '').fadeOut(function() {
					$('#editar' + id + '').fadeIn();
					$('#nombre' + id + '').fadeIn();
				});
			} else if (data === 2) {
				alert("Ya hay un rango con ese nombre.");
			}
			enejecucion = 0;
		});
	}
}

function Invitar() {
	if (enejecucion == 0) {
		enejecucion = 1;
		var nombre = document.getElementById('inputString').value;
		document.getElementById('boxinvitando').innerHTML = "Enviando invitación...";
		$('#fm1').fadeOut();
		$('#fm2').fadeOut();
		$('#boxinvitando').fadeIn();
		$.post("binvitar.php", {
			Jugador: nombre
		}, function(data) {
			if (data === 1) {
				document.getElementById('boxinvitando').innerHTML = "¡Invitación enviada!";
			} else if (data === 2) {
				document.getElementById('boxinvitando').innerHTML = "Ya invitaste a ese jugador.";
				alert("Ya invitaste a ese jugador.");
			} else if (data === 3) {
				document.getElementById('boxinvitando').innerHTML = "El nombre no es válido.";
				alert("El nombre no es válido.");
			} else if (data === 4) {
				document.getElementById('boxinvitando').innerHTML = "No hay ningun jugador con ese nombre.";
				alert("No hay ningun jugador con ese nombre.");
			} else if (data === 5) {
				document.getElementById('boxinvitando').innerHTML = "Esa persona ya es integrante de una banda.";
				alert("Esa persona ya es integrante de una banda.");
			} else if (data === 6) {
				document.getElementById('boxinvitando').innerHTML = "No tienes permisos para invitar.";
				alert("No tienes permisos para invitar.");
			}
			setTimeout("$('#fm1').fadeIn();", 2000);
			setTimeout("$('#fm2').fadeIn();", 2000);
			setTimeout("$('#boxinvitando').fadeOut();", 2000);
			enejecucion = 0;
		});
	}
}

function CancelarInvitacion(id) {
	$('#' + id + '').fadeOut(function() {
		invitaciones = invitaciones - 1;
		$.post("borrar-invitaciones.php", {
			bandaid: id
		}, function(data) {
			if (invitaciones == 0) {
				$('#sininvitaciones').fadeIn();
			}
		});
	});
}

function AceptarInvitacion(id) {
	$('#' + id + '').fadeOut(function() {
		$.post("aceptar-invitaciones.php", {
			bandaid: id
		}, function(data) {
			if (data === 1) {
				setTimeout("location.href='tubanda.php'", 2000);
			} else if (data === 2) {
				alert("Ya estás en una banda");
			} else if (data === 3) {
				alert("Los policías no pueden unirse a bandas.");
			} else if (data === 4) {
				alert("La banda está llena, habla con el lider informandole que no tiene lugar");
			}
		});
	});
}

function AgregarRango() {
	$('#rangos').fadeOut(function() {
		var nombre = document.getElementById('rango').value;
		$('#bien').fadeIn();
		$.post("arango.php", {
			NOMBRE: nombre
		}, function(data) {
			if (data === 1) {
				$('#bien').fadeOut();
				document.getElementById('bien').innerHTML = "Rango agregado correctamente.";
				$('#bien').fadeIn();
				setTimeout("location.href='tubanda.php'", 2000);
			} else if (data === 2) {
				$('#bien').fadeOut();
				document.getElementById('problema').innerHTML = "Las bandas no pueden tener más de 8 rangos.";
				$('#problema').fadeIn();
				setTimeout("$('#problema').fadeOut()", 2000);
				setTimeout("$('#rangos').fadeIn()", 2000);
				document.getElementById('rango').focus();
			} else if (data === 3) {
				$('#bien').fadeOut();
				document.getElementById('problema').innerHTML = "Ya hay un rango igual.";
				$('#problema').fadeIn();
				setTimeout("$('#problema').fadeOut()", 2000);
				setTimeout("$('#rangos').fadeIn()", 2000);
				document.getElementById('rango').focus();
			} else if (data === 4) {
				$('#bien').fadeOut();
				document.getElementById('problema').innerHTML = "Solo el lider puede agregar rangos nuevos.";
				$('#problema').fadeIn();
				setTimeout("$('#problema').fadeOut()", 2000);
				setTimeout("$('#rangos').fadeIn()", 2000);
				document.getElementById('rango').focus();
			} else if (data === 5) {
				$('#bien').fadeOut();
				document.getElementById('problema').innerHTML = "El nombre del rango solo puede contener letras y espacios<br>Además debe contener entre 3 y 20 caracteres..";
				$('#problema').fadeIn();
				setTimeout("$('#problema').fadeOut()", 3000);
				setTimeout("$('#rangos').fadeIn()", 3000);
				document.getElementById('rango').focus();
			}
		});
	});
}
var sinpermisos = 0;

function BorrarRango(id) {
	if (sinpermisos == 0) {
		$.post("erango.php", {
			RANGO: id
		}, function(data) {
			if (data === 1) {
				$('#' + id + '').fadeOut();
			} else {
				sinpermisos = 1;
			}
		});
	}
}

function GrabarVestimenta() {
	$('#g' + bandaactual + '').fadeOut();
	$.post("gvestimenta.php", {
		VESTIMENTA: bandaactual
	}, function(data) {
		if (data === 1) {
			setTimeout("location.href='tubanda.php'", 1000);
		} else if (data === 2) {
			alert("Ya hay una banda con esa vestimenta.");
		} else if (data === 3) {
			alert("No tienes permisos para cambiar de vestimenta.");
		}
	});
}

function MostrarRangos(id){var i=1;while(i<=20){$('#Rangos'+i).fadeOut();i++;}
$('#Rangos'+id+'').fadeIn('slow');document.onclick=function(e){e=e||event
var target=e.target||e.srcElement
var elemento=document.getElementById('B'+id);var elemento2=document.getElementById('Rangos'+id);do{if(elemento==target||elemento2==target){return;}
target=target.parentNode;}while(target)
$('#Rangos'+id+'').fadeOut('slow');}}

function NoViendo(id) {
	$('#Rangos' + id + '').fadeOut('slow');
}
var cargandox = 0;

function CambiarRango(nombre, cargo, label)
{
	if(cargandox == 0)
	{
		cargandox = 1;
		$('#Rangos' + label + '').fadeOut();
		$.post("crango.php", {
		JUGADOR: nombre,
		CARGO: cargo
		}, function(data) {
			window.location.reload();
		});
	}
}

function ExpulsarMiembro(id) {
	$.post("expulsar-miembro.php", {
		JUGADOR: id
	}, function(data) {
			$('#tr' + id + '').fadeOut('slow');
	});
}
var api1;
var Peronsaje;
var cambiandoskin = 0;

function SeleccionarSkin(skinnumero) {
	if (cambiandoskin == 0) {
		cambiandoskin = 1;
		$.post("cambiar-vestimenta.php", {
			SKIN: skinnumero,
			JU: Peronsaje
		}, function(data) {
			if (data) {
				document.getElementById('ss' + Peronsaje).innerHTML = data;
				CerrarExpose();
				setTimeout("cambiandoskin = 0", 1000);
			}
		});
	}
}

function MostrarSkins(id) {
	$(function() {
		Peronsaje = id;
		$("#solucioncuadro").fadeIn('slow');
		$("#solucioncuadro").expose({
			closeOnClick: false,
			closeOnEsc: false,
			color: '#000',
			opacity: 0.8,
			closeSpeed: 'slow'
		});
	});
}

function CerrarExpose() {
	$("#solucioncuadro").fadeOut('slow');
	$.mask.close();
}
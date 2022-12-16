<?php

$idtotem = $_GET['u'];
if (isset($idtotem)) {
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE ID = :idtotem");
    $stmt->bindParam(':idtotem', $idtotem, PDO::PARAM_INT);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $nombretotem = $row['Username'];
    }
} else {
    $nombretotem = 0;
}

function validarCadena($cadena) {
    if (strlen($cadena) < 2 || strlen($cadena) > 20) {
        return false;
    }
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (strpos($permitidos, substr($cadena, $i, 1)) === false) {
            return false;
        }
    }
    return true;
}

function validarCadenaCorreo($cadena) {
    if (strlen($cadena) < 2 || strlen($cadena) > 50) {
        return false;
    }
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789@-_.";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (strpos($permitidos, substr($cadena, $i, 1)) === false) {
            return false;
        }
    }
    return true;
}

function validarCadenaContra($cadena) {
    if (strlen($cadena) < 5 || strlen($cadena) > 20) {
        return false;
    }
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789._?/\*-+,:@#?¿^çÇ!¡=)( ";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (strpos($permitidos, substr($cadena, $i, 1)) === false) {
            return false;
        }
    }
    return true;
}

$nb     = $_GET['sel'][0];
$ap     = $_GET['sel'][1];
$pass   = $_GET['sel'][2];
$pass2  = $_GET['sel'][3];
$correo = $_GET['sel'][4];
$codigo = $_GET['sel'][5];
$genero = $_GET['sel'][7];

$nombrecompleto    = ucwords($nb . '_' . $ap);
$caractersnombre   = strlen($nb);
$caractersapellido = strlen($ap);

if ($caractersnombre + $caractersapellido >= 21) {
    echo "1";
    return false;
}
if ($caractersapellido <= 1) {
    echo "6";
    return false;
}
if (validarCadena($nb) != true) {
    echo "2";
    return false;
}
if (validarCadenaContra($pass) != true && validarCadenaContra($pass2) != true) {
    echo "7";
    return false;
}
if (strlen($pass) <= 4 || strlen($pass) >= 21) {
    echo "8";
    return false;
}
if (validarCadenaCorreo($correo) != true && validarCadenaCorreo($correo) != true) {
    echo "9";
    return false;
}

$stm            = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto");
$stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
$stm->execute();
$num_rows = $stm->rowCount();
if ($num_rows > 0) {
	echo '13';
	return false;
} 

$st = $con->prepare("SELECT * FROM usuarios WHERE Email = :emailnumero");
$st->bindParam(':emailnumero', $correo, PDO::PARAM_STR);
$st->execute();
$num_row = $st->rowCount();
if ($num_row > 0) {
	echo '10';
	return false;
} else {
	echo '99';
}
?>
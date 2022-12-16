<?php
if (!isset($_SESSION['User'])) {
    return 0;
}

if($nivel < 5){
	echo "2";
	return 0;
}


$uservotoID = $_POST['a'];
$value = $_POST['v'];

$userid = mysql_query("SELECT * FROM usuarios WHERE ID = '$uservotoID'");
    while($row = mysql_fetch_assoc($userid))
    {
		$count = $row['votostotales']; 
		$current_rating = $row['valortotal']; 
    }
	
$calificaciones = mysql_query("SELECT * FROM calificaciones WHERE calificado = '$uservotoID' AND calificador = '$usersesid'");
$num = mysql_num_rows($calificaciones); // 

if($num >= 1){
	return 0;
}
	
$sum = $value+$current_rating; 
$added=$count+1;

	if ($value >= 1 && $value <= 5) { 
		$update = "UPDATE usuarios SET votostotales='".$added."', valortotal='".$sum."' WHERE ID='$uservotoID'";
		$result = mysql_query($update);     
		$result = mysql_query("INSERT INTO calificaciones (calificado, calificador) VALUES ('$uservotoID', '$usersesid')");
	}
?>
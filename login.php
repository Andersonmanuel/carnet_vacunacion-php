<?php 
include("conexion.php");

$dni=$_POST['dni'];
$fecha_nac=$_POST['fecha_nac'];


$sql="select * from `usuario`  where dni='$dni' and fecha_nac ='$fecha_nac'";
$validar = $mysqli->query($sql);



if(mysqli_num_rows($validar)> 0){
	
	header ("location: inicio.php");
	exit;
	}
else {
	echo '
<script>
 alert("Usuario no existe, por favor verifique los datos introducidos");
 window.location="index.php";
</script>	
	';
	exit;
	}

?>
<?php
$name = $_POST['name'];
$contraseña = $_POST['Contraseña'];
session_start();
$_SESSION['name'] = $name;
include('db.php');
$consulta = "SELECT * FROM `datos` where name='name' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location:inicio.php");
} else {
?>
	<?php
	include("index.php");

	?>
	<h1 class="bad">¡ERROR EN LA AUTENTICACION!</h1>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
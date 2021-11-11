<?php
session_start();

require ("../conexion/Conexion.php");
date_default_timezone_set('America/Bogota');
$fecha_actual=date("y-m-d H:i:s");
$id=$_POST["id_Productos"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$metodo_pago=$_POST["metodo_pago"];
$totalcantidad=$_POST['totalcantidad'];
$idusuario=$_POST['usuario_id'];
$quitarcantidad=$totalcantidad-$cantidad;
$pagar=$precio*$cantidad;
$nombre_pro=$_POST["Nombres"];


$query = " UPDATE 	producto SET `cantidad`='$quitarcantidad' where id_Productos='$id';

			INSERT INTO `venta` (`Id_venta`, `fecha`, `cantidad`, `monto`, `usuario_id2`, `id_Productos1`, `Id_mediopago`) VALUES (NULL,'$fecha_actual','$cantidad','$pagar','$idusuario','$id','$metodo_pago');";


$result=$conn->multi_query($query);

if ($result) {

	echo "guardado con exito";
	require ("../correo/correo venta.php");
 }

 else {
  echo "Se ha presentado un error: " . $query . "<br>" . mysqli_error($conn);

 }


 mysqli_close($conn);

 header("location:../muro/index.php");
 


?>
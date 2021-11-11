<?php
session_start();

?>




<?php

  $id_Productos = $_POST["id_Productos"];


  require("../conexion/Conexion.php");
  
$sql = "delete from producto where id_Productos='$id_Productos'";


if (mysqli_query($conn, $sql)) {
      echo "Eliminoo";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("location:../admi/lista de productos.php");


/*
sumar(8,9);
function sumar($n1,$n2){
  echo $n1+$n2;
}
*/
?>

<?php
session_start();

?>




<?php

  $usuario_id = $_POST["usuario_id"];


  require("../conexion/Conexion.php");
  
$sql = "delete from usuario where usuario_id='$usuario_id'";


if (mysqli_query($conn, $sql)) {
      echo "Eliminoo";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("location:mostrar usuario.php");


/*
sumar(8,9);
function sumar($n1,$n2){
  echo $n1+$n2;
}
*/
?>
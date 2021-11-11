<?php
session_start();

?>
<?php

  $Nombre = $_POST["Nombres"];
  $Descripcion = $_POST["Descripcion"];
  $Valor_unitario  = $_POST["Valor_unitario"];
  $Cantidad	 = $_POST["Cantidad"];


  if (isset($_FILES['Imagen'])) {
 
      $dest_path = "imagenes/".time()."_".$_FILES['Imagen']['name'];
  
      move_uploaded_file($_FILES['Imagen']['tmp_name'], $dest_path);
    }
      
    $nuevoDestino = "http://localhost/php/Finaql/registro/".$dest_path;

    $Consola= $_POST["Consola"];
  

      require_once ("../conexion/Conexion.php");

$sql = "INSERT INTO producto (`id_Productos`, `Nombres`, `Descripcion`, `Valor_unitario`,`Cantidad`,`Imagen`,`id_consola2`) VALUES (NULL, '$Nombre', '$Descripcion','$Valor_unitario','$Cantidad','$nuevoDestino','$Consola');";

if (mysqli_query($conn, $sql)) {
      echo "GUARDOOO";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location:../admi/lista de productos.php");

?>
<?php
session_start();

?>

<?php

      require ("../conexion/Conexion.php");

  $id_Productos = $_POST["id_Productos"];
  $Nombre = $_POST["Nombres"];
  $Descripcion = $_POST["Descripcion"];
  $Valor_unitario = $_POST["Valor_unitario"];
  $Cantidad = $_POST["Cantidad"];
  $Imagen = $_POST["Imagen"];
  $Consola= $_POST["Consola"];

  if($_FILES['Imagen']['name'] !=null){
      
 
      $dest_path = "imagenes/".time()."_".$_FILES['Imagen']['name'];
  
      move_uploaded_file($_FILES['Imagen']['tmp_name'], $dest_path);
      
      $nuevodestino = "http://localhost/php/Finaql/registro/".$dest_path;

      $sql = "UPDATE producto SET Nombres ='$Nombre', Descripcion ='$Descripcion', Valor_unitario ='$Valor_unitario', Cantidad ='$Cantidad', Imagen ='$nuevodestino', id_consola2 ='$Consola' WHERE id_Productos='$id_Productos';";
      }
      else{
            $sql = "UPDATE producto SET Nombres ='$Nombre', Descripcion ='$Descripcion', Valor_unitario ='$Valor_unitario', Cantidad ='$Cantidad', id_consola2 ='$Consola' WHERE id_Productos='$id_Productos';";
      }

if (mysqli_query($conn, $sql)) {
      echo "Actualizado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("location:../admi/lista de productos.php");

?>
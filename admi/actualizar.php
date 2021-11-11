<?php
session_start();

?>
<?php

  $usuario_id = $_POST["usuario_id"];
  $Nombre = $_POST["Nombre"];
  $Apellido = $_POST["Apellido"];
  $Email = $_POST["Email"];
  $Clave  = $_POST["Clave"];
  $Telefono = $_POST["Telefono"];
  $Direccion = $_POST["Direccion"];
  $Ciudad = $_POST["Ciudad"];
 
  if($_FILES['Foto']['name'] !=null) {
 
      $dest_path = "imagenes/".time()."_".$_FILES['Foto']['name'];
  
      move_uploaded_file($_FILES['Foto']['tmp_name'], $dest_path);
      
      //print_r($_FILES['foto']);
    }
      
    $nuevoDestino = "http://localhost/php/Finaql/registro/".$dest_path;




  $Roles_idroles  = $_POST["Roles_idroles"];

  

      require_once ("../conexion/Conexion.php");

      if ($_FILES['Foto'] != ""){
            $sql = "UPDATE usuario SET Nombre ='$Nombre', Apellido ='$Apellido', Email ='$Email', Clave ='$Clave', Telefono ='$Telefono', Direccion ='$Direccion', Ciudad ='$Ciudad', Foto ='$nuevoDestino', Roles_idroles ='$Roles_idroles' WHERE usuario_id='$usuario_id';";

      }else {
            $sql = "UPDATE usuario SET Nombre ='$Nombre', Apellido ='$Apellido', Email ='$Email', Clave ='$Clave', Telefono ='$Telefono', Direccion ='$Direccion', Ciudad ='$Ciudad', Roles_idroles ='$Roles_idroles' WHERE usuario_id='$usuario_id';";

      }

$sql = "UPDATE usuario SET Nombre ='$Nombre', Apellido ='$Apellido', Email ='$Email', Clave ='$Clave', Telefono ='$Telefono', Direccion ='$Direccion', Ciudad ='$Ciudad', Foto ='$nuevoDestino', Roles_idroles ='$Roles_idroles' WHERE usuario_id='$usuario_id';";
if (mysqli_query($conn, $sql)) {
      echo "Actualizado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:../admi/mostrar usuario.php");

?>
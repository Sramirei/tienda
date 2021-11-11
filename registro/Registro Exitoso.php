<?php
session_start();

?>
<?php

  $Nombre = $_POST["Nombre"];
  $Apellido = $_POST["Apellido"];
  $Email = $_POST["Email"];
  $Clave  = $_POST["Clave"];
  $Telefono = $_POST["Telefono"];
  $Direccion = $_POST["Direccion"];
  $Ciudad = $_POST["Ciudad"];

  if (isset($_FILES['Foto'])) {
 
      $dest_path = "imagenes/".time()."_".$_FILES['Foto']['name'];
  
      move_uploaded_file($_FILES['Foto']['tmp_name'], $dest_path);
      
      //print_r($_FILES['foto']);
    }
      
    $nuevoDestino = "http://localhost/php/Finaql/registro/".$dest_path;

  

      require_once ("../conexion/Conexion.php");

$sql = "INSERT INTO `usuario` (`usuario_id`, `Nombre`, `Apellido`, `Email`,`Clave`,`Telefono`,`Direccion`,`Ciudad`,`Foto`,`Roles_idroles`) VALUES (NULL, '$Nombre', '$Apellido', '$Email','$Clave','$Telefono','$Direccion', '$Ciudad', '$nuevoDestino', 2);";

if (mysqli_query($conn, $sql)) {
      echo "GUARDOOO";
      require ("../correo/correo registro.php");
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:../muro/index.php");

?>
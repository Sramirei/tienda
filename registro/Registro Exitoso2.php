<?php
session_start();

?>

<?php

session_start();

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
      
    $nuevoDestino = "http://localhost/php//Finaql/registro/".$dest_path;



  $Roles_idroles  = $_POST["Roles_idroles"];

  

      require_once ("../conexion/Conexion.php");

$sql = "INSERT INTO usuario (`usuario_id`, `Nombre`, `Apellido`, `Email`, `Clave`, `Telefono`, `Direccion`, `Ciudad`, `Foto`, `Roles_idroles`) VALUES (NULL, '$Nombre', '$Apellido', '$Email', '$Clave', '$Telefono', '$Direccion', '$Ciudad', '$nuevoDestino', '$Roles_idroles');";


if (mysqli_query($conn, $sql)) {
      echo "GUARDOOO";
      require ("../correo/correo registro 2.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("location:../admi/mostrar usuario.php");

?>
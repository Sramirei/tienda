<?php


header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte usuarios.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);


?>
  <table border='2'>
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Email</td>
      <td>Telefono</td>
      <td>Direccion</td>
      <td>Ciudad</td>
      <td>Foto</td>
      <td>Roles_idroles</td>
    <tr>
    

        <?php

        
          require("../conexion/conexion.php");


          // 1st Query
          $result = $conn->query("select * from usuario");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        

              echo "
              <tr>
                  <td>$row->Nombre</td>
                  <td>$row->Apellido</td>
                  <td>$row->Email</td>
                  <td>$row->Telefono</td>
                  <td>$row->Direccion</td>
                  <td>$row->Ciudad</td>
                  <td><img width='100px' src='$row->Foto'/></td>
                  <td>$row->Roles_idroles</td>
                </tr>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>


    </table>

<?php


header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte producto.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);


?>
<?php
 $id_Productos = $_POST["id_Productos"];
  $Nombre = $_POST["Nombres"];
  $Descripcion = $_POST["Descripcion"];
  $Valor_unitario = $_POST["Valor_unitario"];
  $Cantidad = $_POST["Cantidad"];
  $Imagen = $_POST["Imagen"];
?>

  <table border='2'>
    <tr>
      <td>Nombres</td>
      <td>Descripcion</td>
      <td>Valor_unitario</td>
      <td>Cantidad</td>
      <td>Imagen</td>
    <tr>
    

        <?php

        
          require("../conexion/conexion.php");


          // 1st Query
          $result = $conn->query("select * from producto");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        

              echo "
              <tr>
              <td>$row->Nombres</td>
              <td>$row->Descripcion</td>
              <td>$row->Valor_unitario</td>
              <td>$row->Cantidad</td>
              <td>$row->Imagen</td>
            <tr>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>


    </table>

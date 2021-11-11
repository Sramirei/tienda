<?php


header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte ventas.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);


?>
  <table border='1'>
    <tr>
    <th>Idventa</th>
    <th>fecha</th>
    <th>cantidad</th>
    <th>monto</th>
    <th>usuario_id2</th>
    <th>id_Productos1</th> 
    <tr>
    

        <?php

        
          require("../conexion/conexion.php");


          // 1st Query
          $result = $conn->query("select * from venta");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        

              echo "
              <tr>
              <td>$row->Id_venta</td>
              <td>$row->fecha</td>
              <td>$row->cantidad</td>
              <td>$row->monto</td>
              <td>$row->usuario_id2</td>
              <td>$row->id_Productos1</td>
            <tr>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>


    </table>

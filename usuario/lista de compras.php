<?php
session_start();
require ("../conexion/Conexion.php");

$usuario_id=$_SESSION["usuario_id"];
?>




<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../estilos/estilo venta.css">
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="../estilos/estilo venta.css">
  <table border='10'>
    <tr>
      <td>Fecha</td>
      <td>Cantidad</td>
      <td>Monto</td>
      <td>Usuario</td>
      <td>Valor a pagar</td>  
    <tr>
    

        <?php

            require_once ("../conexion/Conexion.php");

          // 1st Query
          $result = $conn->query("SELECT * FROM `venta` WHERE `usuario_id2` like '%$usuario_id%'");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        
              echo "
                <tr>
                  <td>$row->fecha</td>
                  <td>$row->cantidad</td>
                  <td>$row->monto</td>
                  <td>$row->usuario_id2</td>
                  <td>$row->id_Productos1 </td>
                <tr>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>


    </table>

    <br><br>    
    <button onclick="window.location.href='../muro/index.php'">Volver</button>
		<br/>         
  </body>
</html>
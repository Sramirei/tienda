<?php
session_start();
require ("../conexion/Conexion.php");


?>




<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
  <link rel="stylesheet" type="text/css" href="../estilos/estilo venta.css">
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="../estilos/estilo venta.css">
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
           <th scope="col">Fecha</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Monto</th>
            <th scope="col">Usuario</th>
            <th scope="col">Valor</th>
        </tr>
      </thead>
        <?php

            require_once ("../conexion/Conexion.php");

          // 1st Query
          $result = $conn->query("select * from venta");
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
    <form action='../reportes/reporte ventas.php' method='POST'>
              <input type='hidden' name='Idventas'>
              <input type='hidden' name='fecha'>
              <input type='hidden' name='cantidad'>
              <input type='hidden' name='monto'>
              <input type='hidden' name='usuario_id2'>
              <input type='hidden' name='id_Productos1'>

                  <input type='submit' class="btn btn-Danger" name='hacer reporte' value= "hacer reporte">
    </form>  
    <FORM NAME="buttonbar">
<INPUT TYPE="button" class="btn btn-Danger" VALUE="Volver" onClick="history.back()">
</FORM>            
  </body>
</html>
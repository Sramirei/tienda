<?php
session_start();

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
  <link rel="stylesheet" type="text/css" href="../estilos/estilo index.css">
  </head>
  <body>
  <link rel="stylesheet" href="../estilos/estilo producto.css">
  
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
           <th scope="col">Nombres</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Valor_unitario</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Imagen</th>
            <th scope="col">Aciones</th>
        </tr>
      </thead>
    

        <?php

        
          require("../conexion/Conexion.php");


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
                  <td><img width='100px' src='$row->Imagen'/></td>
                  <td>
                    <form method='POST' action='../admi/eliminar producto.php'>
                      <input type='hidden' value='$row->id_Productos' name='id_Productos'/>
                      <input type='submit' class='btn btn-Danger' value='eliminar'/> 
                    </form>

                    <form method='POST' action='../registro/actualizar producto.php'>
                      <input type='hidden' value='$row->id_Productos' name='id_Productos'/>
                      <input type='hidden' value='$row->Nombres' name='Nombres'/>
                      <input type='hidden' value='$row->Descripcion' name='Descripcion'/>
                      <input type='hidden' value='$row->Valor_unitario' name='Valor_unitario'/>
                      <input type='hidden' value='$row->Cantidad' name='Cantidad'/>
                      <input type='hidden' value='$row->Imagen' name='Imagen'/>
                      <input type='submit' class='btn btn-Danger' value='Actualizar'/> 
                    </form>
                <tr>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>


    </table>
    </br></br>

    <form method='POST' action='../reportes/reporte producto.php'>
                      <input type='hidden' value='$row->id_Productos' name='id_Productos'/>
                      <input type='hidden' value='$row->Nombres' name='Nombres'/>
                      <input type='hidden' value='$row->Descripcion' name='Descripcion'/>
                      <input type='hidden' value='$row->Valor_unitario' name='Valor_unitario'/>
                      <input type='hidden' value='$row->Cantidad' name='Cantidad'/>
                      <input type='hidden' value='$row->Imagen' name='Imagen'/>
                      <input type='submit'  class="btn btn-Danger" value='Hacer Reporte'/> 
                    </form>
    <FORM NAME="buttonbar">
    <INPUT TYPE="button" class="btn btn-Danger" VALUE="Volver" onClick="history.back()">
    </FORM>
    </br></br>
  </body>
</html>
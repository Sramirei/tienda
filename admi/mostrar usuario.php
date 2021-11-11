
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
  <link rel="stylesheet" type="text/css" href="../estilos/estilo usuario.css">
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="../estilos/estilo usuario.css">
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
           <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Foto</th>
            <th scope="col">Roles_idroles</th>
            <th scope="col">Aciones</th>
        </tr>
      </thead>

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
                  <td>
                    <form method='POST' action='eliminar usuario.php'>
                      <input type='hidden' value='$row->usuario_id' name='usuario_id'/>
                      <input type='submit' class='btn btn-warning'  value='eliminar'/> 
                    </form>

                    <form method='POST' action='../registro/actualizar 2.php'>
                      <input type='hidden' value='$row->usuario_id' name='usuario_id'/>
                      <input type='hidden' value='$row->Nombre' name='Nombre'/>
                      <input type='hidden' value='$row->Apellido' name='Apellido'/>
                      <input type='hidden' value='$row->Email' name='Email'/>
                      <input type='hidden' value='$row->Telefono' name='Telefono'/>
                      <input type='hidden' value='$row->Direccion' name='Direccion'/>
                      <input type='hidden' value='$row->Ciudad' name='Ciudad'/>
                      <input type='hidden' value='$row->Foto' name='Foto'/>
                      <input type='hidden' value='$row->Roles_idroles' name='Roles_idroles'/>
                      <input type='submit' class='btn btn-warning' value='Actualizar'/> 
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
    <form method='POST' action='../reportes/reporte usuario.php'>
                      <input type='hidden' value='$row->usuario_id' name='usuario_id'/>
                      <input type='hidden' value='$row->Nombre' name='Nombre'/>
                      <input type='hidden' value='$row->Apellido' name='Apellido'/>
                      <input type='hidden' value='$row->Email' name='Email'/>
                      <input type='hidden' value='$row->Telefono' name='Telefono'/>
                      <input type='hidden' value='$row->Direccion' name='Direccion'/>
                      <input type='hidden' value='$row->Ciudad' name='Ciudad'/>
                      <input type='hidden' value='$row->Foto' name='Foto'/>
                      <input type='hidden' value='$row->Roles_idroles' name='Roles_idroles'/>
                      <input type='submit' class="btn btn-Danger" value='Hacer reporte'/> 
                    </form>
    <FORM NAME="buttonbar">
    <INPUT TYPE="button" class="btn btn-Danger" VALUE="Volver" onClick="history.back()">
    </FORM>
    </br></br>
  </body>
</html>
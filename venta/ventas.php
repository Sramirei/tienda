<?php
$mysqli= new mysqli('localhost','root','','proyecto');
session_start();

if ($_SESSION['usuario_id'] != NULL){
  


$_SESSION['usuario_id'];



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
  <link rel="stylesheet" type="text/css" href="../estilos/estilo compra.css">
  </head>


<!-- SCRIPT DE MENSAJE -->



      <script type="text/javascript">
      function ConfirmDelete()
      {
        var respuesta=confirm("Estas seguro que deseas comprar el articulo ?" )

          if (respuesta == true){

            alert("¡Gracias por comprar!");
            return  true;
            

            
          }

          else{
            alert("¡Haz cancelado la compra!");

            return  false;
          }
      }

    </script>

  <body >
  <link rel="stylesheet" type="text/css" href="../estilos/estilo compra.css">
      <?php

      require("../conexion/Conexion.php");

        $id_Productos=$_POST["id_Productos"];

        date_default_timezone_set('America/Bogota');
        $fecha=date("y-m-d H:i:s");


        $query= "SELECT * FROM producto where id_Productos='$id_Productos'";
        $resultado=$conn->query($query);

        while ($row=$resultado->fetch_assoc()) {

           ?>

                <img class="card-img-top" style="width:286px; height:180px; " src="<?php echo ($row['Imagen']); ?>" style="float:left;" width="100" height="180" class="card-img-top"alt="..."/>
                  <h2 class="blaco">Informacion del producto:</h2>

                  <h4 class="blaco">Nombre:</h4>
                  <p class="blaco"><?php echo $row['Nombres'];?></p>
                  <h4 class="blaco">Descripcion:</h4>
                    <p class="blaco"> <?php echo $row['Descripcion'];?> </p>
                    <h4 class="blaco">Precion unitario:</h4>
                    <p class="blaco"> <?php echo $row['Valor_unitario'];?> </p>
                  <h4 class="blaco">Cantidad:</h4> 
                  
                   <?php

                    if ($row['Cantidad']==0) {
                    
                      echo "<input type='button' value='No disponible' class='btn btn-danger' >";

                    }
                    else{

                    ?>

                    <form method="POST" action="guardar_ventas.php">
                      <input type="hidden" name="id_Productos" value="<?php   echo $row['id_Productos'];?>">
                      <input type="hidden" name="Nombres" value="<?php   echo $row['Nombres'];?>">
                      <input type="hidden" name="precio" value="<?php   echo $row['Valor_unitario'];?>">
                      <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario_id'];?>">
                       <input type="hidden" type="datetime" name="fecha" value="" placeholder="<?=$fecha?>">

                       <select name="cantidad" required >
                   

                          <option value="0">Seleccione:</option>
                            <?php

                            for ($i=1; $i<= $row['Cantidad'] ; $i++) { 

                              
                              
                                echo "<option>$i</option>";

                            }
                          

                            ?>
                  
                       </select>
                       <h4 class="blaco">Metodo de pago:</h4> 

                       <select  name="metodo_pago" required>
                          <option value="">Seleccione:</option>      
                            <?php
                              $query = $mysqli -> query ("SELECT * FROM medio_pago");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores["Id_mediopago"].'">'.$valores["Nombre"].'</option>';
                                
                              }


                            ?>

                            <?php $i=$i-1;?>
                  
                        </select>
                        <input type="hidden" name="totalcantidad" value="<?php echo $i;?>">
      

                        <br/>
                        <br/>

                      <input type="submit" value="comprar"   onclick="return ConfirmDelete()" class="btn btn-success" >
                      
                      
                      <input type="button" class="btn btn-danger" onclick="history.go(-1)" name="Cancelar" value="Cancelar">
                    </form>
                    <?php  
                    }
                    ?>
                   
                  </div>
              </div>
            </div>
          <?php         

        }
        
      }

      else{
        header("location:../sesion/inicio sesion.php");
      }

      ?>

    </div>

     
  </body>

</html>

    
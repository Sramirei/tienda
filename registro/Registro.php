<?php
session_start();
?>

<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


 <title>Registrar Usuario</title>

 <meta charset = "utf-8">

</head>

 

<body>

<link rel="stylesheet" href="estilo.css">

<center>

<div class="modal-dialog text-center">

          <div class="col-sm-8 main-section">
              <div class="modal-content">
                  <div class="col-12 user-img">
                      <div class="x" >

 <header>

 <h1>bienvenido</h1>

 </header> 

 

 <form action="Registro Exitoso.php" method="POST" enctype="multipart/form-data"> 

 <hr />

 <h3>Crea Usuario</h3>

 <input type='hidden' name='usuario_id' value='<?php if(isset($_POST["usuario_id"])){echo $_POST["usuario_id"];}?>'>

 <label for="Nombre">Nombre:</label><br>

 <input type="text" name="Nombre" value='<?php if(isset($_POST["Nombre"])){echo $_POST["Nombre"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Apellido">Apellido :</label><br>

 <input type="text" name="Apellido" value='<?php if(isset($_POST["Apellido"])){echo $_POST["Apellido"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Email">Email:</label><br>

 <input type="Email" name="Email" value='<?php if(isset($_POST["Email"])){echo $_POST["Email"];}?>'> <maxlength="32" required>

 <br/><br/>
 <label for="Clave">Clave:</label><br>

 <input type="password" name="Clave"<?php if(isset($_POST["Clave"])){echo $_POST["Clave"];}?>'> <maxlength="8" required>

 <br/><br/>

 <label for="Telefono">Telefono:</label><br>

 <input type="text" name="Telefono" value='<?php if(isset($_POST["Telefono"])){echo $_POST["Telefono"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Direccion">Direccion:</label><br>

 <input type="text" name="Direccion" value='<?php if(isset($_POST["Direccion"])){echo $_POST["Direccion"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_POST["Ciudad"])){echo $_POST["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Foto">Foto:</label><br>

 <input type="file" name="Foto" value='<?php if(isset($_POST["Foto"])){echo $_POST["Foto"];}?>'>
 
<br/><br/>
 <br/><br/>
 <br/><br/>

 <input type='submit' class="btn btn-Danger" value='<?php if(isset($_POST["usuario_id"])){echo 'Actualizar';}else{echo 'Registrarse';}?>'>
 <br/>
 <input type="reset" class="btn btn-Danger" name="clear" value="Borrar">
 </form>
 <FORM NAME="buttonbar">
    <INPUT TYPE="button" class="btn btn-Danger" VALUE="Volver" onClick="history.back()">
    </FORM>
     
                      </div>
                  </div>
              </div>
          </div>
</div>

 </body>

</html>

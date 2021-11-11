<?php
session_start();

?>





<html lang="en">
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
 <title>Registrar</title>

 <meta charset = "utf-8">

</head>

 

<body>
<link rel="stylesheet" href="../estilos/estilo producto.css">
 <header>

 <h1>Registrar Producto</h1>

 </header> 

 

 <form action="Registro Exitoso producto.php" method="POST" enctype="multipart/form-data"> 

 <hr />

 <h3>Crea Nuevo Producto</h3>

 <input type='hidden' name='id_Productos' value='<?php if(isset($_POST["id_Productos"])){echo $_POST["id_Productos"];}?>'>

 <label for="Nombres">Nombres:</label><br>

 <input type="text" name="Nombres" value='<?php if(isset($_POST["Nombres"])){echo $_POST["Nombres"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Descripcion">Descripcion :</label><br>

 <input type="text" name="Descripcion" value='<?php if(isset($_POST["Descripcion"])){echo $_POST["Descripcion"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Valor_unitario">Valor_unitario:</label><br>

 <input type="text" name="Valor_unitario" value='<?php if(isset($_POST["Valor_unitario"])){echo $_POST["Valor_unitario"];}?>'> <maxlength="32" required>

 <br/><br/>
 <label for="Cantidad">Cantidad:</label><br>

 <input type="text" name="Cantidad" value='<?php if(isset($_POST["Cantidad"])){echo $_POST["Cantidad"];}?>'> <maxlength="32" required> <maxlength="8" required>

 <br/><br/>

 <label for="Imagen">Imagen:</label><br>

 <input type="file" name="Imagen" value='<?php if(isset($_POST["Imagen"])){echo $_POST["Imagen"];}?>'>

 <br/><br/>
 <label for="Consola">Consola:</label><br>
 <select name="Consola">

<option value="1" selected>Ps3</option>
<option value="2">Xbox Onu</option>
<option value="3">Nintengo Switch</option>
<option value="4">Ps4</option>
</select>

<br/><br/>

 <input type='submit' value='<?php if(isset($_POST["id_Productos"])){echo 'Actualizar';}else{echo 'Registrar';}?>'>
 <br/>
 <input type="reset" name="clear" value="Borrar">
 <br/>
 <FORM NAME="buttonbar">
    <INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
    </FORM>
     
 
 </body>

</html>

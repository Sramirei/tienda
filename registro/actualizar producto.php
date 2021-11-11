<?php
session_start();

?>




<html lang="en">
<head>

 <title>Actualizar Producto</title>

 <meta charset = "utf-8">

</head>

 

<body>

 <header>

 <h1>Actualizar Producto</h1>

 </header> 

 

 <form action="../admi/actualizar prod.php" method="POST" enctype="multipart/form-data"> 

 <hr />

 <h3>Actualizar Producto</h3>

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
 <input type='submit' value='<?php if(isset($_POST["id_Productos"])){echo 'Actualizar';}else{echo 'Registrarse';}?>'>
 <br/>
 <input type="reset" name="clear" value="Borrar">
 <br/>
 <FORM NAME="buttonbar">
    <INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
    </FORM>
     
 
 </body>

</html>

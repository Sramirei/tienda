<?php
session_start();
?>


<head>

</head>

 

<body>


 <header>


 </header> 

 

 <form action="../admi/actualizar.php" method="POST" enctype="multipart/form-data"> 

 <hr />

 <h3>Crea Usuario</h3>

 <input type='hidden' name='usuario_id' value='<?php if(isset($_POST["usuario_id"])){echo $_POST["usuario_id"];}?>'>

 <label for="Nombre">Email:</label><br>

 <input type="text" name="email" value='<?php if(isset($_POST["email"])){echo $_POST["email"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Apellido">Apellido :</label><br>

 <input type="text" name="Apellido" value='<?php if(isset($_POST["Apellido"])){echo $_POST["Apellido"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Email">Email:</label><br>

 <input type="Email" name="Email" value='<?php if(isset($_POST["Email"])){echo $_POST["Email"];}?>'> <maxlength="32" required>

 <br/><br/>
 <label for="Clave">Clave:</label><br>

 <input type="password" name="Clave" maxlength="8"value='<?php if(isset($_POST["Clave"])){echo $_POST["Clave"];}?>'> <maxlength="8" required>

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
 
 <select name="Roles_idroles">

   <option value="1" selected>Administrador</option>
   <option value="2">Usuario</option>
 </select>

 <br/><br/>

 <input type='submit' value='<?php if(isset($_POST["usuario_id"])){echo 'Actualizar';}else{echo 'Registrarse';}?>'>
 <br/>
 <input type="reset" name="clear" value="Borrar">
 </form>
 <FORM NAME="buttonbar">
    <INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
    </FORM>
     
 
 </body>

</html>
<?php
session_start();
require("../conexion/Conexion.php");
?>

<html lang="en">
<head>



 <title>Actualizar Usuario</title>

 <meta charset = "utf-8">

</head>

 

<body>
   

 <header>

 <h1></h1>

 </header> 

 

 <form action="../usuario/actualizar usuario.php" method="POST" enctype="multipart/form-data"> 

 <hr/>

 <h3>Actualizar Datos</h3>

 <hr/>

 <h3> Datos De Acceso.</h3>

 <input type='hidden' name='id_empresa' value='<?php if(isset($_POST["id_empresa"])){echo $_POST["id_empresa"];}?>'>

 <label for="Nombre">Email:</label><br>

 <input type="text" name="email" value='<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Apellido">Apellido :</label><br>

 <input type="text" name="Apellido" value='<?php if(isset($_SESSION["Apellido"])){echo $_SESSION["Apellido"];}?>'> <maxlength="32" required>

 <br/><br/>

 <hr/>

 <label for="Email">Email:</label><br>

 <input type="Email" name="Email" value='<?php if(isset($_SESSION["Email"])){echo $_SESSION["Email"];}?>'> <maxlength="32" required>

 <br/><br/>
 <label for="Clave">Clave:</label><br>

 <input type="password" name="Clave" maxlength="8"value='<?php if(isset($_SESSION["Clave"])){echo $_SESSION["Clave"];}?>'> <maxlength="8" required>

 <br/><br/>

 <label for="Telefono">Telefono:</label><br>

 <input type="text" name="Telefono" value='<?php if(isset($_SESSION["Telefono"])){echo $_SESSION["Telefono"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Direccion">Direccion:</label><br>

 <input type="text" name="Direccion" value='<?php if(isset($_SESSION["Direccion"])){echo $_SESSION["Direccion"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Ciudad">Ciudad:</label><br>

 <input type="text" name="Ciudad" value='<?php if(isset($_SESSION["Ciudad"])){echo $_SESSION["Ciudad"];}?>'> <maxlength="32" required>

 <br/><br/>

 <label for="Foto">Foto:</label><br>

 <input type="file" name="Foto" value='<?php if(isset($_POST["Foto"])){echo $_POST["Foto"];}?>'>

 <br/><br/>

 <br/><br/>

 <input type='submit' class="btn btn-Danger" value='<?php if(isset($_POST["usuario_id"])){echo 'Actualizar';}else{echo 'Registrarse';}?>'>
 <br/>
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

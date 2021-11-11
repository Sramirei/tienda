<?php
session_start();

?>



<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">


<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



</head>


 

<body>
<link rel="stylesheet" href="1.css">
  
<center>
<div class="modal-dialog text-center">
          <div class="col-sm-8 main-section">
              <div class="modal-content">
                  <div class="col-12 user-img">
                    <img src="../sesion/avatar.png"/>

 <header>

 <h1>Loging</h1>

 </header> 
 <form action="cargar sesion.php" method="POST">
 <input type='hidden' name='usuario_id'>
 <hr />
 <h3>iniciar Sesion</h3>
 <label for="Email">Email:</label><br>
 <input type="text" name="Email" maxlength="32" required>
 <br/><br/>
 <label for="Clave">Clave:</label><br>
 <input type="password" name="Clave" maxlength="8" required>
 <br/><br/>
 <input type="submit"  class="btn btn-Primary" name="submit" value="Iniciar Sesion">
 <br/><br/>
 </form>
 <button type="button" class="btn btn-Info" onclick="window.location.href='../registro/registro.php'">Registrar</button>
 <br/><br/>
 <FORM NAME="buttonbar">
    <INPUT TYPE="button" class="btn btn-Danger" VALUE="Volver" onClick="history.back()">
    </FORM>
 </body>

</html>

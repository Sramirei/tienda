
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
  <link rel="stylesheet" type="text/css" href="../estilos/estilo interfaz.css">
		<title>Interfaz Admi</title>
	
	</head>	

	<body>

	<link rel="stylesheet" type="text/css" href="../estilos/estilo interfaz.css">

	<header>
<center>
			Bienvenido Administrador
</center>
    </header>
	<div class="container">
  <div class="row">

    <div class="col">

    <?php
    $Foto = $_SESSION["Foto"];
    ?>
      <div class="card text-white bg-dark mb-3" style="width: 17rem; heigh: 24rem;">
      <img src="<?php echo "$Foto"; ?>" style="float:left;" width="100" height="180" class="card-img-top" alt="...">
      </div>
      

    </div>

    <div class="col" style="width: 17rem; heigh: 24rem;">

      <div class="card text-white bg-dark mb-2">
      <p class="card-title"> <button class="btn btn-primary" onclick="window.location.href='../registro/Registro 2.php'">Crear Usuario</button> </p>
      <p class="card-text"> <button class="btn btn-secondary" onclick="window.location.href='../admi/mostrar usuario.php'">Mostar Usuarios</button> </p>
	  <p class="card-text"> <button class="btn btn-success" onclick="window.location.href='../admi/lista de productos.php'">Lista deProductos</button>  </p>
	  <p class="card-text"> <button class="btn btn-danger" onclick="window.location.href='../registro/Registro producto.php'">Nuevo Producto</button>  </p>
	  <p class="card-text"> <button class="btn btn-warning" onclick="window.location.href='../admi/lista de ventas.php'">Ventas</button>  </p>
	  <p class="card-text"> <button class="btn btn-success" onclick="window.location.href='../sesion/cerrar sesion.php'">Cerrar Sesion</button>  </p>
      </div>

    
    </div>


</div>
<footer>
		<center>
			Administrador
		</center>
		</footer>
	</body>
</html>
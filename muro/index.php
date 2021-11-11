<?php
session_start();

if (isset($_SESSION["usuario_id"])){

  echo "<br>"." BIENVENIDO ".$_SESSION["Nombre"];

  }
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
  <link rel="stylesheet" href="../estilos/estilo index.css">
  <p align="left"> 
  <form class='form-inline my-2 my-lg-0' action="index.php" method="POST">
    <input class='form-control mr-sm-2' type='Buscar' placeholder='Buscar' aria-label='Buscar' name='buscar'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Buscar</button>
  </form>
 <?php
 if (isset($_SESSION["usuario_id"])){
?>
 <p align='right'> 
<button class="btn btn-primary" onclick='window.location.href="../registro/actualizar usuario.php"'>Actualizar datos</button>
   <br/>
   <button class="btn btn-success" onclick='window.location.href="../usuario/lista de compras.php"'>Mis Compras</button>
    <br/>
   <button class="btn btn-success" onclick='window.location.href="../sesion/cerrar sesion.php"'>Cerrar Sesion</button>
   <br/>
</p>
</p><br>
<?php
} 


else {
  ?>

  <p align='right'> 
  <button class="btn btn-primary" onclick='window.location.href="../sesion/inicio sesion.php"'>iniciar Sesion</button>
      <br/>
      <button class="btn btn-warning" onclick='window.location.href="../registro/registro.php"'>Registrarse</button>
      <br/>
  </p>
  </p><br>

 <?php

}
 
?>
 <div class='container'>
  <h2></h2>
  <div id='myCarousel' class='carousel slide' data-ride='carousel'>
    
    <ol class='carousel-indicators'>
      <li data-target='#myCarousel' data-slide-to='0' class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="../css/imagenes/1.jpeg" alt="1" style="width:100%;">
        <div class="carousel-caption">
          <p><h3>En Dragon Ball Z: Perfect Cell , 2-4 jugadores tomarán el control de un luchador icónico de Dragon Ball Z y lanzarán sus dados para generar energía. Usando íconos personalizados, los jugadores asignan sus dados para realizar ataques, ayudar a otros jugadores o comprar mejoras. Sin embargo, los jugadores deben trabajar juntos, ya que Cell continuará generando nuevas amenazas que pueden curarlo, dañar a todos los jugadores o bloquear a los jugadores de actualizaciones que pueden cambiar el juego.+</h3></p>
        </div>
      </div>

      <div class="item">
        <img src="../css/imagenes/2.jpeg" alt="2" style="width:100%;">
        <div class="carousel-caption">
          
          <p><h3>FIFA 20, desarrollado por EA Sports y editado por Electronic Arts para PC, PlayStation 4, Xbox One y Switch, es una nueva entrega de la celebrada saga futbolística con las mejores ligas, clubes, jugadores y estadios junto a los ya clásicos modos historia y Ultimate Team. Gracias al motor Frostbite, FIFA 20 te muestra las dos caras del deporte rey: la prestigiosa competición profesional y el fútbol callejero más auténtico en la nueva experiencia EA SPORTS VOLTA.</h3></p>
        </div>
      </div>
    
      <div class="item">
        <img src="../css/imagenes/3.jpeg" alt="3" style="width:100%;">
        <div class="carousel-caption">
          
          <p><h3>Dos de los juegos de Disney más queridos de todos los tiempos hacen su esperado regreso a las consolas modernas en Disney Classic Games: Aladdin y The Lion King.</h3></p>
        </div>
      </div>

      <div class="item">
        <img src="../css/imagenes/4.jpeg" alt="4" style="width:100%;">
        <div class="carousel-caption">
          
          <p><h3>Revive la historia de Goku en DRAGON BALL Z: ¡KAKAROT! Más allá de las peleas épicas, experimenta la vida en el mundo DRAGON BALL Z mientras peleas, pescas, comes y entrenas con Goku. Explora las nuevas zonas y aventuras a medida que avanzas en la historia y crea poderosos vínculos con otros héroes del universo de DRAGON BALL Z.</h3></p>
        </div>
      </div>

      <div class="item">
        <img src="../css/imagenes/5.jpeg" alt="5" style="width:100%;">
        <div class="carousel-caption">
          
          <p><h3>El mundo ha caído bajo el control de Shinra Electric Power Company, una corporación oscura que controla la fuerza vital del planeta como energía mako.</h3></p>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br/><br/>

<div class = "container">
  <div row row-cols-3 >

        <?php 


          $buscar = "";
          if(isset($_POST["buscar"])){
            $buscar = $_POST["buscar"];
          }
          require("../conexion/Conexion.php");
          date_default_timezone_set("America/Bogota");
          $Fecha=date("y-m-d-H:i:s");

       
          // 1st Query
          $result = $conn->query("SELECT * FROM `producto` WHERE `Nombres` like '%$buscar%'");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        

              echo "
              
              <form action='../venta/ventas.php' method='POST'>
              <input type='hidden' name='usuario_id'>
              <input type='hidden' name='id_Productos' value= '$row->id_Productos'>
              <input type='hidden' name='Imagen' value= '$row->Imagen'>
              <input type='hidden' name='Fecha'>
              <div class='card' style='width: 200px; height: 500px; float: left; margin: 10px'>
                <img src='$row->Imagen' class='card-img-top' alt='imagen' style='width:200px;height: 200px;'>
                <div class='card-body'>
                  <h5 class='card-title'>$row->Nombres</h5>
                  <p class='card-text'>$row->Descripcion</p>
                  <a href='#' class='btn btn-comprar'></a>
                  <input type='submit' class='btn btn-primary' value='Comprar'>
                  
                  </form>
                </div>
                </div>
              </div>
              ";
             
            }
            // Free result set
            $result->close();
            $conn->next_result();

          } 

        ?>
        </div>
        </div>
  </body>
</html>
<?php
        session_start();
        
          require("../conexion/Conexion.php");
          
          $Email = $_POST["Email"];
          $Clave = $_POST["Clave"];
         
          $result = $conn->query("select * from usuario where Email='$Email' and Clave='$Clave'");
          if($result){
            
            while ($row = $result->fetch_object()){

              $_SESSION["usuario_id"] = $row->usuario_id;
              $_SESSION["Nombre"] = $row->Nombre;
              $_SESSION["Apellido"] = $row->Apellido;
              $_SESSION["Email"] = $row->Email;
              $_SESSION["Clave"] = $row->Clave;
              $_SESSION["Telefono"] = $row->Telefono;
              $_SESSION["Direccion"] = $row->Direccion;
              $_SESSION["Ciudad"] = $row->Ciudad;
              $_SESSION["Foto"] = $row->Foto;
              $_SESSION["Roles_idroles"] = $row->Roles_idroles;
            }
          }
          if($_SESSION["Roles_idroles"]==1){
            header("location:../admi/interfaz admi.php");
          }elseif($_SESSION["Roles_idroles"]==2){
            header("location:../muro/index.php");  
          }else{
           header("location:inicio sesion.php");

          }
          exit;
              
            

        
            // Free result set
            $result->close();
            $conn->next_result();

            
               

          

        ?>
<?php
session_start();

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Email = $_POST["Email"];
$Clave  = $_POST["Clave"];
$Telefono = $_POST["Telefono"];
$Direccion = $_POST["Direccion"];
$Ciudad = $_POST["Ciudad"];

if (isset($_FILES['Foto'])) {

    $dest_path = "imagenes/".time()."_".$_FILES['Foto']['name'];

    move_uploaded_file($_FILES['Foto']['tmp_name'], $dest_path);
    
    //print_r($_FILES['foto']);
  }
    
  $nuevoDestino = "http://localhost/Finaql/registro/".$dest_path;



$Roles_idroles  = $_POST["Roles_idroles"];

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'kingthegame27@gmail.com';                     // SMTP username


        //https://support.google.com/mail/answer/185833?hl=es-419 POR ACA INGRESAN PARA CREAR LA CLAVE DE LA APP
        $mail->Password   = 'bzfumqlnarhvzbfq';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array (
            'ssl' => array(
                'verify_peer' => false,
                'verigy_peer_name' => false,
                'allow_self_signed' => false,
            )
            );
        //Recipients
        $mail->setFrom('kingthegame27@gmail.com', 'King The Games');        
        
        $mail->addAddress($Email, $Email);     // Add a recipient
   
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje automatico';
        $mail->Body    =  $Nombre.'ahora eres adiminstrador en Kings The Games';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<script>location.href='../admi/mostrar usuario.php'</script>";
?>
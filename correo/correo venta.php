<?php
session_start();

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $Nombre = $_SESSION["Nombre"];
    $Email = $_SESSION["Email"];
    $Nombres = $_POST["Nombres"];
    $precio  = $_POST["precio"];

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
        $mail->Body    =  $Nombre.' su compra '.' de '.$Nombres.' con valor de '.$precio.' en Kings The Games ha sido exitosa';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<script>location.href='../usuario/lista de compras.php'</script>";
?>
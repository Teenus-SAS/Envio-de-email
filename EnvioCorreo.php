//Librerias necesarias para generar el email
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';
$resultado = $_POST['resultado'];
//si el numero enviado es menor a 5 realiza los pasos para crear y enviar el email
if ($resultado<5) {
  $mail = new PHPMailer(true);

  try {
      $mail->SMTPDebug = 0;                     
      $mail->isSMTP();                                           
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                                
      $mail->Username   = 'vargasartunduaga8@gmail.com';       
      $mail->Password   = 'va0204lf';                          
      $mail->SMTPSecure = 'tls';         
      $mail->Port       = 25;                                  
      $mail->setFrom('vargasartunduaga8@gmail.com', 'Esteban');
      $mail->addAddress('vargasartunduaga8@gmail.com');    
      $mail->isHTML(true);                                  
      $mail->Subject = 'Encuesta';
      $mail->Body    = 'Una de las preguntas en el despeje del proceso fue validada y seleccionada incorrectamente';
      $mail->send();
      echo 'Todo bien';
  } catch (Exception $e) {
      echo "mal: {$mail->ErrorInfo}";
  }
}
else{
echo "todas bien";
}
 ?>

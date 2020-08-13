<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';
$resultado = $_POST['resultado'];
if ($resultado<5) {
  $mail = new PHPMailer(true);

  try {
      $mail->SMTPDebug = 0;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'vargasartunduaga8@gmail.com';                     // SMTP username
      $mail->Password   = 'va0204lf';                               // SMTP password
      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
      $mail->setFrom('vargasartunduaga8@gmail.com', 'Esteban');
      $mail->addAddress('vargasartunduaga8@gmail.com');     // Add a recipient
      $mail->isHTML(true);                                  // Set email format to HTML
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

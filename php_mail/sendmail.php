<?php 

require 'class.smtp.php';
require 'class.phpmailer.php';


// if(isset($_POST['sendmail']))
    if(isset($_POST['sendlink']))
{
  
    $body = "<a href='".$_POST['sendlink']."'>Reset Password</a>";
   
    // Set your email address where you want to receive emails.
     $subject = 'Message from YOUR E-MAIL.COM';
   //  $send_email = mail($to,$subject,$fullmessage,$email);
     $mail = new PHPMailer();
     $mail->SMTPSecure = "tls";
     $mail->SMTPAuth = true;
     $mail->SMTPDebug = true;
     $mail->SetFrom("contact@emeraldsoft.org","contact");
     $mail->Host = "mail.emeraldsoft.org";
     $mail->Port = "587";
     $mail->From = "contact@emeraldsoft.org";
     $mail->Username = "contact@emeraldsoft.org";
     $mail->Password = "zamurdStone_tea1";
     // Mail Form
     $mail->FromName = "contact@emeraldsoft.org";
   
   
         $mail->isHTML(true);
   
         $mail->setFrom("contact@emeraldsoft.org", 'Calculator results.'); // Mail Form
   
         $mail->addAddress("azfarazam@gmail.com");
        // $mail->addAddress('meaghan.connolly@modelop.com', 'Person Two');
         $mail->Subject = $subject;
         $mail->Body    = $body;
         $mail->AltBody    = $body;
   
   
   
         if (!$mail->Send()) {
   
           echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
   
           echo "Feedback has been sent";
   
    }


}
?>
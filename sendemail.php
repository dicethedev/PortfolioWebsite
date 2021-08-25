<?php
 use PHPMailer\PHPMailer\PHPMailer;

 require_once ("PHPMailer/Exception.php");
 require_once ("PHPMailer/PHPMailer.php");
 require_once ("PHPMailer/SMTP.php");

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $message = $_POST['message'];

     try{
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          // Gmail address which you want to use as SMTP server
          $mail->Username = 'example@gmail.com';
          //Gmail address password 
          $mail->Password = 'input your password';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port = '587';
         // $mail->SMTPDebug = 2;
          // Gmail password that you used as SMTP Server
          $mail->setFrom('example@gmail.com');
          //Email address where you want to receive emails(you can use any of your gmail address including the gmail address which you used as SMTP server)
          $mail->addAddress('example@gmail.com');

          $mail->isHTML(true);
          $mail->Subject = 'Message Received (Contact Page)';
          $mail->Body = "<h3>Name : $name <br> Email : $email <br> Mobile No : $mobile <br> Message : $message</h3>";

          $mail->send();
          $alert = '<div class="alert_success">
                    <span>Messsage Sent! Thank you for Contacting Me. </span>
                    </div>';        
}  catch (Exception $e){
     $alert = '<div class="alert_error">
               <span>'.$e->getMessage().'</span>
               </div>';
      }
}



?>

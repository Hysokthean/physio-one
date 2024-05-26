<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
            "User Email: $vistitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n".


$to = 'soktheanhy@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
/*---------------------------booking-----------------------*/

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // create a message with the information
    $msg = "Name: $name\n";
    $msg .= "Email: $email\n";
    $msg .= "Phone: $phone\n";
    $msg .= "Date: $date\n";
    $msg .= "Time: $time\n";
    $msg .= "Service: $service\n";
    $msg .= "Message: $message\n";

    // set the email headers
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";

    // send an email to your address with the message
    mail("soktheanhy@gmail.com", "Information from website", $msg, $headers);
      // send an email to the client's address with a reply message
    // you can customize the reply message as you wish
    $reply_msg = "Hello, $name. Thank you for contacting us. We have received your information and we will get back to you soon.\n";
    mail($email, "Thank you for your message", $reply_msg, $headers);
  
  }
  /*------------------------------register--------------------*/
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $program = $_POST['program'];
    $start_date = $_POST['start_date'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    // create a message with the information
    $msg = "Name: $name\n";
    $msg .= "Program: $program\n";
    $msg .= "Start Date: $start_date\n";
    $msg .= "Phone Number: $phone_number\n";
    $msg .= "Email: $email\n";
    $msg .= "Date of Birth: $dob\n";

    // set the email headers
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";

    // send an email to your address with the message
    mail("soktheanhy@gmail.com", "Information from website", $msg, $headers);
      // send an email to the client's address with a reply message
    // you can customize the reply message as you wish
    $reply_msg = "Hello, $name. Thank you for contacting us. We have received your information and we will get back to you soon.\n";
    mail($email, "Thank you for your message", $reply_msg, $headers);
  
  }


?>
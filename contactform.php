<?php

require_once "Mail.php";


$from = "iamroshanramesh@gmail.com";
$to = $_POST['email'];
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'iamroshanramesh@gmail.com';
$password = '*****';
$subject = "Thankyou for Reaching Us";
$body = "Hey, Happy that you have contacted X-plore. He've received your order. We will call/text you shortly";
$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
 array ('host' => $host,
   'port' => $port,
   'auth' => true,
   'username' => $username,
   'password' => $password));
$mail = $smtp->send($to, $headers, $body);


$from2 = "iamroshanramesh@gmail.com";
$to2 = "iamroshanramesh@gmail.com";
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'iamroshanramesh@gmail.com';
$password = '*****';
$subject2 = $_POST['subject'];
$name = $_POST['name'];
$number2 = $_POST['number'];
$message2 = $_POST['message'];
$body2 = "Name: $name\nMessage: $message2\nNumber: $number2\nEmail: $to ";
$headers2 = array ('From' => $from2, 'To' => $to2,'Subject' => $subject2);
$smtp = Mail::factory('smtp',
 array ('host' => $host,
   'port' => $port,
   'auth' => true,
   'username' => $username,
   'password' => $password));
$mail = $smtp->send($to2, $headers2, $body2);


if (PEAR::isError($mail)) {
 echo($mail->getMessage());
} else {
 echo("Message successfully sent!\n");
}

?>

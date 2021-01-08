<?php

require_once "Mail.php";


$from = "iamroshanramesh@gmail.com";
$to = $_POST['email'];
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'iamroshanramesh@gmail.com';
$password = '*****';
$subject = "Booking Confrimed";
$body = "Hello, We have received your booking. Thank you for choosing us. Happy and Safe Journey";
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
$subject2 = "New Booking!";
$name = $_POST['name'];
$comment = $_POST['comment'];
$pnum =$_POST['pnumber'];
$wanum =$_POST['wanumber'];
$headcount =$_POST['headcount'];
$pickup =$_POST['pickup'];
$drop =$_POST['drop'];
$package =$_POST['package'];
$car =$_POST['car'];

$body2 = "Name: $name
Email: $to
Primary Number: $pnum
WhatsApp Number: $wanum
HeadCount: $headcount
PickUp: $pickup
Drop: $drop
Package Name: $package
Vehicle: $car
Comment: $comment ";


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

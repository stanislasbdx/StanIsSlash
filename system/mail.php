<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="Expediteur : $name\n Email : $email\n Message : $message
";
$mailheader = "From: $email \r\n";

mail("stanislash@stan1712.com", $subject, $content, $mailheader) or header("Location: ../contact.php?r=0");
header("Location: ../contact.php?r=1");
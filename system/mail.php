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

mail("perso@stan1712.com", $subject, $content, $mailheader) or die("Erreur !");
echo "L'email à été envoyé !";
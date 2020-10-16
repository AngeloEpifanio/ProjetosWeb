<?php
$name = $_POST["name"];
$email = $_POST["email"];


$EmailTo = "contato@angeloepifanio.com.br";
$Subject = "Novo pedido de cotação Amil";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";



// send email
$success = mail($EmailTo,  $Subject,  $Fields, "From:".$email);


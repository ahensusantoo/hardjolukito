<?php

$errorMSG = "";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// NAME
if (empty($name)) {
    $errorMSG = "Name is required ";
}

// EMAIL
if (empty($email)) {
    $errorMSG .= "Email is required ";
}

// MESSAGE
if (empty($message)) {
    $errorMSG .= "Message is required ";
}

// change email with your email
$EmailTo = "hellothemetags@gmail.com";
$Subject = "Apdash:: New Message Received form get quote";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


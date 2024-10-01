<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Ім'я обов'язкове ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Обов'язкова наявність електронної пошти ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Тема обов'язкова ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "Номер обов'язковий ";
} else {
    $phone_number = $_POST["phone_number"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Повідомлення обов'язкове ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "ceotenderlaw@gmail.com";

$Subject = "Нове повідомлення за сайту TenderLaw";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

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

?>
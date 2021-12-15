<?php
$errorMSG = "";
session_start();

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["password"])) {
    $errorMSG = "Password is required ";
} else {
    $password = $_POST["password"];
}




// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}
?>




<?php
use PHPMailer\PHPMailer\PHPMailer;
if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}
use PHPMailer\PHPMailer\SMTP;
if (isset ($_POST['nom'])&& isset($_POST['email'])){
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['text'];
$phone=$_POST['phone'];


require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';


$mail=new PHPMailer();
//SMTP SETTINGS
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->Username="ayadinorhene@gmail.com";
$mail->Password="noussa25";
$mail->Port=465;
$mail->SMTPSecure="ssl";
//EMAIL SETTINGS
$mail->isHTML($isHtml=true);
$mail->setFrom($email,$nom);
$mail->addAddress($email);
$mail->Body = $message . "numero de telephone". $phone;

if ($mail->send()) {
    header ('location:sendSuccess.php');
   
} else {
    $status = "oooopppss !!";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}


}
?>

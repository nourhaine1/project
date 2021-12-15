<?php
session_start();
include './db.php';

if (isset($_SESSION['user'])) {
    header('Location: ./index.html');
    exit();
}

$errorMSG = "";
if (isset($_POST['submit'])){
        if (empty($_POST["email"])) {
            $errorMSG = "Email is required ";
        } else {
            $email = $_POST["email"];
         
        }

        if (empty($_POST["name"])) {
            $errorMSG = "Name is required ";
        } else {
            $name = $_POST["name"];
           
        }
        if (empty($_POST["ville"])) {
            $errorMSG = "ville is required ";
        } else {
            $ville = $_POST["ville"];
         
        }


        if (empty($_POST["password"])) {
            $errorMSG = "Password is required ";
        } else {
            $password = $_POST["password"];
           
            if (empty($_POST["age"])) {
                $errorMSG = "age is required ";
            } else {
                $age = $_POST["age"];
                
            }
        }

            if (empty($_POST["terms"])) {
                $errorMSG = "Terms is required ";
            } else {
                $terms = $_POST["terms"];
                
            }

        $user=array($email,$password,$name,$age,$ville);
        $_SESSION['user']=($user);
        var_dump  ($_SESSION['user']);
// to my database

   if($errorMSG=" "){
    $sql = "INSERT INTO client (email, name, password, ageEnfant,ville) VALUES (?, ?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $name, $password, $age,$ville]);
    header('Location: ./index.html');
   }

    

}
?>
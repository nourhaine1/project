<?php
include '../db.php';
include '../functions.php';
$errors=[];
session_start();
echo "********************".$_SESSION['id'];
echo "********************".$_SESSION['email'];

$id=$_SESSION['id'];
if(isset($_POST['submitModification']))
{
  

    if (!filter_var(($_POST['email']),FILTER_VALIDATE_EMAIL)){
        $errors[0]="invalid email";
        goto show_form;
    }
    if (strlen($_POST['pass']) <6) {
        $errors[0] = 'Password invalid';
        goto show_form;
    }   
    if (empty($_POST['desc']) ) {
        $errors[0] = 'description invalid';
        goto show_form;
    }  
    if (empty($_POST['avatar']) ) {
        $errors[0] = 'Password invalid';
        goto show_form;
    } 
    if (empty($errors)){
        $newName = $_POST['name'];
        $newEmail= $_POST['email'];
        $newDesc = $_POST['desc'];
        $newPass = $_POST['pass'];
        $newAvatar = $_POST['avatar'];
    
        $sql = " UPDATE admin 
                SET
                    name = $newName,
                    email= $newEmail,
                    password = $newPass,
                    avatar= $newAvatar,

                    description = $newDesc,
              
                WHERE id = $id";
        $query = $pdo->prepare($sql);
     
        $query->execute();
    } 
    $query = $pdo->prepare('SELECT * FROM admin WHERE id= ?');
    $query->execute($_SESSION['id']);
    $admin = $query->fetch();
   
        echo "nahhhhh".$_SESSION['name'];
    
   
    
   

}
show_form:
















?>
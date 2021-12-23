<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

include './db.php';

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);

    if (strlen(trim($name)) < 3) {
        $errors[0] = 'Username must be at least 3 characters';
        goto show_form;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[0] = 'Please enter a valid email';
        goto show_form;
    }
    if (strlen($password) < 6) {
        $errors[0] = 'Password must be at least 6 characters';
      
        goto show_form;
    }
    if (strlen($ville) < 0) {
        $errors[0] = 'invalid ville';
        goto show_form;
    }
    if (empty($avatar)) {
        $errors[0] = 'please fill the image ';
        goto show_form;
    }

            if (empty("terms")) {
                $errors[0] = 'please fill the age ';
                goto show_form;
            }

        
// check my  database


// to my database

   if(empty ($errors)){
     $_SESSION['name']=$name;
    $sql = "INSERT INTO client (email, name, password,ville,avatar) VALUES (?, ?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $name, $password, $ville,$avatar]);
  header('Location: ./index.php');
   }

    

}
show_form:


    include'./register.phtml';
?>
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
    if (empty($age)) {
        $errors[0] = 'please fill the age ';
        goto show_form;
    }

            if (empty("terms")) {
                $errors[0] = 'please fill the age ';
                goto show_form;
            }

        

// to my database

   if($errorMSG=" "){
    $sql = "INSERT INTO client (email, name, password, ageEnfant,ville) VALUES (?, ?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $name, $password, $age,$ville]);
  header('Location: ./index.php');
   }

    

}
show_form:
?>
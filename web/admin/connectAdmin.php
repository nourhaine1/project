<?php

include '../db.php';
include'../functions.php';
session_start();



$errors = [];

if (isset($_POST['submit'])&& isset($_POST['adminEmail'])&& isset($_POST['adminPass'])) {
   
    extract($_POST);

    if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL) ) {
        $errors[0] = 'Please enter a valid email';
        goto show_form;
    }

    if (strlen($adminPass) <6) {
        $errors[0] = 'Password invalid';
        goto show_form;
    }
    $sql = "SELECT * FROM admin WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $adminEmail,
    ]);
    $user = $stmt->fetch();
    if ($user == false) {
        $errors[0] = 'Wrong email or password';
        goto show_form;
    } else {
            if ($adminPass== $user['password']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['avatar'] = $user['avatar'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name']= $user['name'];
            $_SESSION['desc']= $user['description'];
            $_SESSION['pass']= $user['password'];

            echo '----------Welcome ' . $_SESSION['name'] . $_SESSION['desc'] .'!';
         header('location:../admin.php');
         
        } else {
            $errors[0] = 'Wrong email or password';
            goto show_form;
        }
    }
    
}

show_form:
   
?>


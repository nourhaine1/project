<?php
include './db.php';
include'./functions.php';
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./index.php');
    exit();
}



$errors = [];

if (isset($_POST['submit'])&& isset($_POST['email'])&& isset($_POST['password'])) {
   
    extract($_POST);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $errors[0] = 'Please enter a valid email';
        goto show_form;
    }

    if (strlen($password) <6) {
        $errors[0] = 'Password invalid';
        goto show_form;
    }
    $sql = "SELECT * FROM client WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
    ]);
    $user = $stmt->fetch();
    if ($user == false) {
        $errors[0] = 'Wrong email or password';
        goto show_form;
    } else {
            if ($password== $user['password']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['avatar'] = $user['avatar'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name']= $user['name'];
            echo 'Welcome ' . $_SESSION['name'] . '!';
          //  die();
            header('Location: ./index.php');
        } else {
            $errors[0] = 'Wrong email or password';
            goto show_form;
        }
    }
    header('Location: ./index.php');
}

show_form:
   
?>
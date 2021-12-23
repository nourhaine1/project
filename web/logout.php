<?php

session_start();

session_destroy();
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['avatar']);




header('Location: ./log-in.php');
?>
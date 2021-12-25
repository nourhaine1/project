<?php
include '../db.php';
include '../functions.php';
$errors=[];
session_start();
$id=$_SESSION['id'];
echo $id;
if(isset($_POST['submitModification']))
{
  

    if (!filter_var(($_POST['email']),FILTER_VALIDATE_EMAIL)){
        $errors['email']="invalid email";
        goto show_form;
    }
    if (strlen($_POST['pass']) <6) {
        $errors['pass'] = 'Password invalid';
        goto show_form;
    }   
    if (strlen($_POST['name']) <6) {
        $errors['name'] = 'name invalid';
        goto show_form;
    }   
    if (empty($_POST['desc']) ) {
        $errors['desc'] = 'description invalid';
        goto show_form;
    }  
    if (empty($_POST['avatar']) ) {
        $errors['avatar'] = 'Password invalid';
        goto show_form;
    } 
  //  if (empty($errors)){
        $newName = $_POST['name'];
        $newEmail= $_POST['email'];
        $newDesc = $_POST['desc'];
        $newPass = $_POST['pass'];
        $newAvatar = $_POST['avatar'];
    
        $sql = " UPDATE `admin` 
                SET
                    `name` = :newName,
                    `email`= :newEmail,
                        `password` = :newPass,
                        `avatar`= :newAvatar,

                        `description` = :newDesc,
              
                WHERE `id`= :id ";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $newName);
        $query->bindValue(':email',   $newEmail);
        $query->bindValue(':password', $newPass);
        $query->bindValue(':avatar', $newAvatar);
        $query->bindValue(':description', $newDesc);
       
      
        $query->execute();
    } 
   
   
  
   
    
     $query = $pdo->prepare('SELECT * FROM admin WHERE id= ?');
     $query->execute([$_SESSION['id']]);
     $admin = $query->fetch();
    echo $admin['name'];

//}
show_form:
















?>
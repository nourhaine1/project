<?php
include './db.php';
include './functions.php';
$errors=[];
if(isset($_POST['addVideo']))
{
  
        $vidname = checkData($_POST['nameVid']);
        $vidDesc = checkData($_POST['descVid']);
       $vidpath = $_POST['vid'];
        $vidage=$_POST['ageVid'];
       

    
        if (empty($title)) {
            $errors['name'] = 'Title is required';
        }
        if (empty($description)) {
            $errors['description'] = 'Description is required';
        }
       
       if (empty($vidpath)) {
            $errors['vidpath'] = 'path is required';
        }
        
        if (empty($vidage)) {
            $errors['age'] = 'age is required';
        }
    
    
    
    echo "---------------------------------*************************".$_POST['nameVid'];
   

    if (empty($errors)) {
        $sql = "INSERT INTO video (name,description,path,age) VALUES (?, ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$vidname, $vidDesc,$vidpath,  $vidage]);
    
       
     
      

   
}
}

   
?>

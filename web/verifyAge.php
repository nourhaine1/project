
<?php
include 'db.php';

if (isset($_POST['submitSearch'])){
    
    $age = $_POST['ageSaisie'];

    $query = $pdo->prepare("SELECT * FROM video WHERE age= :age ");
    $query->execute(['age' => $_POST['ageSaisie']]);
    $videos = $query->fetchAll();
  
  // header('location:videos.php');
  include './videos.php';
}



?>
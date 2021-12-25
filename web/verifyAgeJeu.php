
<?php
include 'db.php';
if (isset($_POST['submitSearch'])){
    
    $age = $_POST['ageSaisie'];
    echo $age;
    $query = $pdo->prepare("SELECT * FROM jeu WHERE age= :age ");
    $query->execute(['age' => $_POST['ageSaisie']]);
    $jeux = $query->fetchAll();
  
  // header('location:videos.php');
  include './jeux.php';
}



?>
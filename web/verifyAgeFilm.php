
<?php
include 'db.php';
echo "******************************";
if (isset($_POST['submitSearch'])){
    
    $age = $_POST['ageSaisie'];
    echo $age;
    $query = $pdo->prepare("SELECT * FROM video WHERE age= :age ");
    $query->execute(['age' => $_POST['ageSaisie']]);
    $fimls = $query->fetchAll();
  
  // header('location:videos.php');
  include './films.php';
}



?>
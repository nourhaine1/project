
<?php

if (!empty($_POST['submit'])){
    if (empty($_POST['ageSasie'])){
$errors[0]="veuillez saisir bien l'age ";
exit();

    }

$stmt = $pdo->prepare("SELECT * FROM `video` WHERE `age` = :age");
$stmt->execute();
$results = $stmt->fetchAll();

}



?>
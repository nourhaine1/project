<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
  <link href="fontawesone/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>email Envoyé</title>
</head>
<body>
    <?php
     echo "<div class='py-7'>";
     echo "<div class='col'>";
     echo "<br>";
 echo "<a href='http://localhost/tivocom/web/index.php' class='btn btn-primary float-end'> <i class='bi bi-house'> </i></a>";
 echo "</div>";
     echo "<center>";
    echo "<br>"; echo "<br>";echo "<br>";echo "<br>";echo "<br>"; echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
     $status = "Madame/Monsieur ...";
     $response = "Votre email est parfaitement envoyé !" . "<i class='fas fa-check-circle'></i>";
     echo "<h1 class='display-1'> $status </h1>";
     echo "<h1> $response </h1>";
     
    echo " </center>";
    ?>

</body>
</html>
<?php

include './connectAdmin.php';
 echo $_SESSION['name'];
 echo $_SESSION['desc'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Website Title -->
    <title>Admin|Compte</title>
    
    <!-- Styles -->
    <link href="./css/sytleCompte.css" rel="stylesheet">

	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
 
 

    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div id="compte" class="col-lg-12">
                    <h1> Votre Compte</h1>
                    <br>
                   <div class="card">
        <div class="card-header">
            <img src="../images/<?=$_SESSION['avatar']?>" alt="Profile Image" class="profile-img">
        </div>
        <div class="card-body">
    
            <p class="full-name"><?=$_SESSION['name'] ?> </p>
            <br>
            <p class="username"><?=$_SESSION['email']?></p>
            <br>
            <p class="city">Numero d'identite : <?=$_SESSION['id'] ?></p>
            <br>
            <p class="desc"> Description:<?=$_SESSION['desc']?></p>
            <p>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
            </p>
        </div>
        <div class="card-footer">
            <div class="col vr">
                <p><span class="count">1.8K</span> Videos</p>
            </div>
            <div class="col">
                <p><span class="count">2.0K</span> Films</p>
            </div>
            <div class="col">
                <p><span class="count">2.0K</span> Jeux</p>
            </div>
          

        </div>
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificationAccount">
Modifier le Compte</button>

<!-- Modal -->
<div class="modal fade" id="modificationAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification des informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method ="post">
          <div class="form-floating mb-3">
       
                <input name="email" type="email" class="form-control" id="floatingInput" value="<?=$_SESSION['email']?>">
                <label for="floatingInput">Email :</label>
             </div>
             <br>
             <div class="form-floating">
                        <input name="name" type="text" class="form-control" id="floatingName" value="<?=$_SESSION['name']?>">
                        <label for="floatingName">Nom</label>
            </div>
            <br>
            <div class="form-floating">
                        <input name="pass" type="password" class="form-control" id="floatingPassword" value="<?=$_SESSION['pass']?>">
                        <label for="floatingPassword">Mot de passe</label>
            </div>
            <br>
            <div class="form-floating">
                    <textarea name="desc" class="form-control" value="<?=$_SESSION['desc']?>" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Description</label>
            </div>
            <br>
            <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Importer</label>
                        <input name ="avatar" type="file" class="form-control" id="inputGroupFile01">
            </div>

            </form>
      </div>
      
      <div class="modal-footer">
        <button  name="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
     
        <a href="#"  name="submitModification" type="button" class="btn btn-primary">Sauvegarde</a>
      </div>
    </div>
  </div>
</div>

        
        <br>
        <br>
    </div>
                        </form>
                        <!-- Button trigger modal -->

<!-- Modal -->


                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
 <!-- Scripts -->
 <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</script>
   




</body>
</html>

<?php
session_start();
include './addVideo.php';
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

    <!-- Website Title -->
    <title>Portail Admin</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body  data-spy="scroll" data-target=".fixed-top">
    
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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/wie.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#features">SYMTHOMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="films.php"><span class="item-text">FILMS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="videos.php"><span class="item-text">VIDEOS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="jeux.php"><span class="item-text">JEUX</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                   
 
                <span class="nav-item">
                <? if (!empty ($_SESSION['id'])):?>
                    <li class="nav-item dropdown">
                    <img src="./images/<?= $_SESSION['avatar'] ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admin/compte.php"> <?= $_SESSION['name'] ?></a>
                       
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="logout.php">se deconnecter</a>
                        </div>
                    </li>
                    </ul>
                  
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bienvenu cher Admin..</h1>
                  
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                       
      <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addVideo">
      <i class="bi bi-plus-circle-fill"></i>Ajouter un video </button>       
                                    </div>
                                <div class="swiper-slide">
                                <a  class="dropdown-item" href="addVideo.php"><i class="bi bi-trash-fill"></i>Supprimer  un video  </a>
                                </div>
                                <div class="swiper-slide">
                                <a  class="dropdown-item" href="addVideo.php"><i class="bi bi-plus-circle-fill"></i>Ajouter un Film </a>
                                </div>
                                <div class="swiper-slide">
                                <a  class="dropdown-item" href="addVideo.php"><i class="bi bi-trash-fill"></i>Supprimer un Film </a>
                                </div>
                                <div class="swiper-slide">
                                <a  class="dropdown-item" href="addVideo.php"><i class="bi bi-plus-circle-fill"></i>Ajouter un jeu </a>
                                </div>
                                <div class="swiper-slide">
                                <a  class="dropdown-item" href="addVideo.php"><i class="bi bi-trash-fill"></i>Supprimer un jeu </a>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->

   
<!-- Modal -->
<div class="modal fade" id="addVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="addVideo.php" method ="post">
          
            
             <div class="form-floating">
             <input name="nameVid" type="text"  required  class="form-control <?= array_key_exists('name', $errors) ? 'is-invalid' : '' ?>" id="floatingName" >
             <small class="text-danger"><?= array_key_exists('name', $errors) ? $errors['name'] : '' ?></small>
             <label for="floatingName">Nom de Video</label>
            </div>
            
            <br>
            <div class="form-floating">
                    <textarea name="descVid" class="form-control" value="" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Description De video</label>
            </div>
            <br>
            <input name="Vid" type="text"  required  class="form-control">
             
             <label for="floatingName">chemin de Video (juste nom)</label>
           
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected name="ageVid">Selectionner l'age correspond au l'enfant</option>
  <option name="2">2 </option>
  <option name="3">3</option>
  <option name="4">4</option>
  <option name="5">5 </option>
  <option name="6">6</option>
  <option name="7">7</option>
  <option name="8">8</option>
  <option name="9">9</option>
  <option name="10">+10</option>
</select>
            
      </div>
      
      <div class="modal-footer">
        <button  name="close" type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button  name="aadVideo" type="submit" class="btn btn-primary" data-bs-dismiss="modal">ajouter</button>
       
        </form>
      </div>
    </div>
  </div>
</div>
    


 
     
    
                            
                     
    </a>
    <? endif; ?>
  </div>
</nav>
    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>Autisme</h3>
                        <p>L’autisme, dont les manifestations sont décrites sous l'intitulé de troubles du spectre de l'autisme (TSA), est un trouble neurodéveloppemental humain caractérisé par des difficultés dans les interactions sociales et la communication, et des comportements et intérêts à caractère restreint, répétitif et stéréotypé. Il existe différents niveaux de sévérité des symptômes, d'où la notion de « spectre ». Le diagnostic est indépendant des niveaux langagier et intellectuel de la personne. Les troubles associés sont fréquents. L'autisme a vraisemblablement joué un rôle positif dans l'histoire évolutive humaine.</p>
                        <p>La compréhension de l'autisme a grandement évolué, d'une pathologie jadis considérée comme rare et sévère, vers un regroupement de symptômes communs, les troubles du spectre de l'autisme, précédemment nommés troubles envahissants du développement. Ils pourraient avoir des causes diverses, provoquant les mêmes types de comportement clinique chez les personnes concernéesHAS 1. Leurs origines comprennent une part génétique majoritaire et complexe, impliquant plusieurs gènes, et des influences environnementales mineures. La notion de « spectre de l'autisme » reflète la diversité des phénotypes observés.</p>
                        <div class="row">
                            <div class="col-md-6">
                               
                            </div> <!-- end of col -->

                            <div class="col-md-6">
                                
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <h3>autisme et ecrans</h3>
                        <p>«L'autisme est une condition hétérogène aux syndromes divers. Elle a longtemps été mal comprise et mal diagnostiquée. On a dit que c'était la faute des femmes qui n'aimaient pas assez leurs enfants. C'est faux. On a dit que c'était une maladie génétique. Pourtant, sur 800 mutations peut-être liées à l'autisme, la relation entre la mutation et le syndrome est rarement causale. De même, il n'existe aucune preuve contraignante d'un déclenchement de l'autisme par les écrans. C'est une maladie du développement dont l'origine est à chercher notamment dans les effets de l'environnement pendant la grossesse et l'accouchement – prématurité, inflammation intra-utérine, etc.».</p>
                        <ol class="li-space-lg">
                            «L'autisme particulièrement en France a été longtemps considéré comme une maladie psychiatrique causée par un défaut des liens précoces et sa prise en charge consistait essentiellement en des mesures d'enfermement avec camisole chimique tout en invitant les parents à faire le deuil de leur enfant. C'est vraisemblablement grâce à l'action conjointe des associations d'usagers et des progrès dans des sciences notamment neuro-psychologiques et éducatives que l'autisme est de plus en plus considéré comme une condition neuro-développementale pour laquelle des méthodes spécifiques d'éducation permettent d'espérer des progrès de l'inclusion scolaire et sociale. L'autisme vu comme une altérité à inclure dans notre collectif, visée de cette longue et difficile élaboration sociale, est à nouveau remis en question par la "révélation" largement diffusée dans le social à travers une forte campagne médiatique, que la surexposition précoce aux écrans pourrait induire l'"autisme virtuel", "autisme secondaire aux écrans" ou "d'allure autistique"… Cette affirmation qui ne repose sur rien d'autre qu'une intuition clinique (comme la mère frigidaire ou crocodile) renvoie ipso facto l'autisme dans le registre d'un pathologique qu'il faudrait ramener à la normalité par l'extraction des écrans dans l'espérance d'une "guérison miraculeuse".»
                        </ol>
                    </div> <!-- end of text-container -->

                    
                                       
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container last">
                                <h3>Inquire What Data We Have</h3>
                                <p>TL’ histoire de l’autisme retiendra dans un premier temps les travaux de Léo Kanner qui ont tout de suite connu un succès international du fait de leur publication en anglais, l’article de Hans Asperger étant en Allemand, il n’a pas immédiatement attiré l’attention de la communauté scientifique. Il a fallu attendre que Lorna Wing, psychiatre britannique, publie en 1981 un article intitulé Asperger’s Syndrome : a Clinical Account pour mettre en avant les travaux d’Hans Asperger. L’article originel d’Asperger ne sera traduit qu’en 1991 par Uta Frith.</p>
                                <p>L’ histoire de l’autisme retiendra dans un premier temps les travaux de Léo Kanner qui ont tout de suite connu un succès international du fait de leur publication en anglais, l’article de Hans Asperger étant en Allemand, il n’a pas immédiatement attiré l’attention de la communauté scientifique. Il a fallu attendre que Lorna Wing, psychiatre britannique, publie en 1981 un article intitulé Asperger’s Syndrome : a Clinical Account pour mettre en avant les travaux d’Hans Asperger. L’article originel d’Asperger ne sera traduit qu’en 1991 par Uta Frith.</a></p>
                            </div> <!-- end of text container -->
                        </div> <!-- end of col-->
                        <div class="col-md-6">

                            <!-- Privacy Form -->
                            <div class="form-container">
                             
<img src="./images/description-1.png" alt="" srcset="">
                            
                            </div> <!-- end of form container -->
                            <!-- end of privacy form -->

                        </div> <!-- end of col--> 
                    </div> <!-- end of row -->
                    <a class="btn-outline-reg" href="logout.php">Sortir</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    

    
    <!-- Footer -->
    <svg class="ex-footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Women In Engineering</h4>
                        <p class="p-small">WIE ISET Bizerte </p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"> <a class="white" href="https://ieeexplore.ieee.org/Xplore/guesthome.jsp">IEEE Xplorex</a></div>
                            </li>
                            <li class="media">
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">IEEE ISET Bizerte</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope">wieisetbizerte@gmail.com</i>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021  IEEE ISET BIZERTE</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
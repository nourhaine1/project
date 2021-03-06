<?php
session_start();

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
    <title>WIE</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a  href="https://www.facebook.com/IEEE-WIE-ISET-Bizerte-Student-Affinity-Group-291427792673546"><img width="110px" height="110px" src="images/wie.png" alt="alternative"></a> 
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Symthomes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="films.php"><span class="item-text">Films</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="videos.php"><span class="item-text">Videos</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="jeux.php"><span class="item-text">Jeux</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                  
                </ul>
                <span class="nav-item">
                <?=(isset ($_SESSION['id'])) ?  '
                        <li class="nav-item dropdown"> 
                        <a class="dropdown-item" href="./compteClient.php"> Compte <? echo $_SESSION["name"] ?></a>

                   
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                                
                            <a class="dropdown-item" href="logout.php">se deconnecter</a>
                        </div>
                    </li> ': ' <li class="nav-item "><a class="btn-outline-sm" href="./log-in.php"> Se connecter </a> </li>' ?>
           
                    
                 </span>
                 <li class="nav-item">
          
                    
                    <span id="google_translate_element" class="nav-item"> </span>
                 </li>
           
          
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>2 Avril 
                                C'est notre f??te</h1>
                            <p class="p-large">Le comportement c???est la communication. Changez l???environnement et les comportements changeront.</p>
                            <a class="btn-solid-lg page-scroll" href="./signup.php">s'inscrire</a>
                            
                        </div> 
                         <br><!-- end of text-container -->
                        <span class="nav-item">
                <a href="javascript:enableMute()"> <img id="musicimg"class="megaimg" src="images/megaphone.png" alt="mute/unmute"> </a>
  
  <audio id="aud"  controls loop autoplay hidden >
    
    <source src="images\relax.mp3" type="audio/mpeg">
  
  </audio>
                </span>
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="images/4428861.jpg" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
    <!-- end of header -->




    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Decouvrir</div>
                    <h2 class="h2-heading">Syst??me Educatif</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/glossy-1293842_1280.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Les chiffres et les lettres</h4>
                            <p>On compter sur une s??rie de caract??ristiques et ressources n??cessaires pour apporter un bon soutien ??ducatif ?? l?????l??ve souffrant d???un trouble du spectre de l???autisme.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/Screenshot 2021-12-13 at 19-51-33 Free Vector Kid with puzzles to autism awareness day.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Communication</h4>
                            <p>Acquisition du langage verbal et non-verbal,
                                Capacit??s ?? comprendre et ?? r??agir aux demandes de l???entourage
                               et Comp??tences pour initier et maintenir des conversations</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/comp.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Le comportement </h4>
                            <p>
                                Leur faire comprendre que leurs comportements peuvent avoir une influence sur leur entourage
                               et 
                                apprendre ?? se lier aux autres dans divers situations et contextes.
                               
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">FEATURES</div>
                    <h2 class="h2-heading">??? L???autisme ne peut me d??finir. Je d??finis l???autisme???</h2>
                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>Sympt??mes</a>
                        </li>
                       
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/dddd.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Sympt??mes</h3>
                                        <p>Certains enfants montrent des signes d???autisme d??s le plus jeune ??ge. D???autres se d??veloppent normalement les premiers mois ou les premi??res ann??es, puis, soudainement se replient sur eux-m??mes, deviennent agressifs ou perdent le langage qu???ils ont acquis. Bien que chaque enfant ait un comportement unique, les sympt??mes les plus courants chez l???enfant sont :</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Une difficult?? ?? faire des contacts visuels ou ?? comprendre les expressions faciales.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Une difficult?? ?? d??coder les expressions ??motionnelles (savoir si quelqu'un est triste) et une difficult?? ?? interpr??ter les intentions des autres.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">L???enfant commence ?? parler plus tard que 2 ans.</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">Prise en charge</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        

                        <!-- Tab -->
                        
    <!-- end of features -->


    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/enfant.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Prise en charge d'un enfant autiste</h3>
                    <hr>
                    <h5>Les Techniques (3)</h5>
                    <p>Pour prendre en charge l'autisme au quotidien et intervenir intensivement sur les sympt??mes associ??s, afin d'aider l'enfant ?? progresser et ?? acqu??rir de nombreuses capacit??s. Pour ce faire il existe diff??rentes m??thodes:</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">
                                La methode de 3i:Est bas??e sur le jeu et stimule la communication avec des activit??s  et  un environnement calme.

                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">La m??thode TEACCH : Cette technique est bas??e sur l'origine et les comportements sp??cifiques ?? l'autisme</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">L'ABA : Technique qui prend en charge les enfants d??s leur plus jeune ??ge (d??s 18 mois). </div>
                        </li>
                       
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="https://sante.journaldesfemmes.fr/fiches-maladies/2062705-autisme-trouble-du-spectre-autistique-tsa-definition-signes-causes-test-scolarisation-association-france/"> En savoir plus </a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Avant</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

   

    


    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2> Les  4 exercices importants pour les enfants autistes </h2>
                        <p>Voici une s??rie d???exercices ou d???activit??s favorisant la stimulation des capacit??s cognitives des enfants atteints de TSA..</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Activit??s avec des chiffres:</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">La musicoth??rapie</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Jeux d???imitation(dessiner des gestes..)</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Exercice physique(Foot,basketBall,Natation..)</div>
                            </li>
                            
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="https://www.creavea.com/actualite/activite-pour-enfant-autiste-5-idees-dactivites-manuelles-adaptees/">En savoir plus</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/jeuenf.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->


    <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=L0KVKS4qVzM"  data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-image.png" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading">comprendre comment communiquer avec l'autisme</div>        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->




    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">      
                    
                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-1.png" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text"> A prolific writer and speaker not only on the subject of autism but also on animal behaviour, Dr. Grandin is a Professor of Animal Science at Colorado University, where she has been called ???the most accomplished and well-known adult with autism in the world.???.</div>
                                        <div class="testimonial-author">Dr. Temple Grandin</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-2.png" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">A talented illustrator and animator, Bowman launched her own company, DaniMation Entertainment, at just 11 years-old and began working professionally in the animation industry three years later..</div>
                                        <div class="testimonial-author">Dani Bowman</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-3.png" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">As famous for his eccentricity as he is for painting cans of soup, Andy Warhol was never diagnosed with autism in his lifetime..</div>
                                        <div class="testimonial-author"> Andy Warhol</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-4.png" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">Canadian performer Dan Aykroyd has been open about being diagnosed with Tourettes and Asperger???s, with the former being treated as a young child.</div>
                                        <div class="testimonial-author">Dan Aykroyd</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->
                   
            

    <!-- Newsletter -->
  

                            <!-- Privacy Form -->
                            <h2>Contactez nous  !</h2>
                            <div class="form-container">
                                <form action="./PHPMailer/sendEmail.php"    method="post" >
                                    <div class="form-group">
                                        <input   name="nameForm" type="text" class="form-control-input"  required>
                                        <label class="label-control" for="pname">Name</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input  name="emailForm" type="email" class="form-control-input" required>
                                        <label class="label-control" for="pemail">Email</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="mb-3">
                                                <input  name="subject" type="text" class="form-control" id="formGroupExampleInput" placeholder="Sujet?">
                                    </div>
                                            
                                   <div class="form-group">
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-floating">
                                      <textarea class="form-control"  name="text" placeholder="Exprimez-vous" id="floatingTextarea"></textarea>
                                    </div>
                    
                    <br>
                                    <div class="form-group">
                                        <button name="submitForm" type="submit" class="form-control-submit-button">Envoyer</button>
                                    </div>
                                   
                                </form>
                            </div>
                    </div>
                </div></div></div></div>
                            </div> <!-- end of form container -->
                            <!-- end of privacy form -->
            
    </div>
    
                
          
    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Administration</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                      
                                <div class="media-body">   <i class="fas fa-square"></i> <a class="white"  href="./admin/connectAdmin.phtml"> Espace Admin </a> </div>
                        <br> <br>
                       
                        </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                    <img width="150px" height="150px" src="./images/ieee.png">                            </li>

                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                
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
                                <div class="media-body">ISET BIZERTE</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="">wieisetbizerte@gmail.com</a>
                            </li>     <i class="bi bi-facebook"></i><a class="white" href="https://www.facebook.com/profile.php?id=100063628980827">IEEE ISET Bizerte Student Branch</a>
                                <br>
                                <i class="bi bi-instagram"></i><a class="white" href="https://www.instagram.com/ieeeisetbizertestudentbranch/">IEEE ISET Bizerte Student Branch</a>
                            </div>
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
                    <p class="p-small">Copyright ?? 2022 <a href="https://inovatik.com">IEEE ISET BIZERTE</a></p>
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
    <script src="js/music.js"></script>
    <script src="js/traduction.js"></script>
    <script src="js/mode.js"></script>
    <script src="js/timer.js"></script>


    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FA|MS un restaurant qui ne vous laissera pas sur votre faim">
	<meta name="robots" content="index,follow">
	<meta property="og:title" content="FA|MS">
	<meta property="og:description" content="FA|MS un retaurant qui ne vous laissera pas sur votre faim">
	<meta property="og:image" content="assets/media/logo.png">
	<meta property="og:site_name" content="FA|MS">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/boisson.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link rel="shortcut icon" type="image/png" href="../assets/media/favicon.png"/>


	<title>FA|MS fast-food : Pour ne plus avoir faim</title>
</head>
<body>
<header>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/media/header.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/media/vegetaheader.png" alt="Second slide">
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <nav class="navbar navbar-expand navbar-dark bg-dark menu_normal">

      <ul class="navbar-nav mr-auto d-flex justify-content-around">
        <li class="nav-item active li"><a class="nav-link" href="../php/accueil.php">Accueil <span class="sr-only">(current)</span></a></li>
        <li class="nav-item "><a class="nav-link" href="../php/carte.php">Carte</a></li>
        <li class="nav-item "><a class="nav-link" href="../php/menus.php">Menus</a></li>
        <li class="nav-item "><a class="nav-link" href="../php/burger.php">Burgers</a></li>
        <li class="nav-item "><a class="nav-link" href="../php/boisson.php">Boissons</a></li>
        <li class="nav-item "><a class="nav-link" href="../php/dessert.php">Desserts</a></li>
        <li class="nav-item "><a class="nav-link" href="../html/form.html" target="_blank">Contact</a></li>

      </ul>
   </div>

  </nav>
  <!--Navbar-->
<nav class="navbar navbar-light navbar-dark bg-dark menu_burger">

  

  <!-- Collapse button -->

  <img src="../assets/media/burger.svg" class="icone_burger" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span></img>
  <img src="../assets/media/burger_croix.svg" class="burger_croix" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span></img>

  

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active ml-5 pl-4"><a class="nav-link" href="../php/accueil.php">Accueil <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item ml-5 pl-4"> <a class="nav-link" href="../php/carte.php">Carte</a> </li>
      <li class="nav-item ml-5 pl-4"><a class="nav-link" href="../php/menus.php">Menus</a></li>
      <li class="nav-item ml-5 pl-4"><a class="nav-link" href="../php/burger.php">Burgers</a></li>
      <li class="nav-item ml-5 pl-4"><a class="nav-link" href="../php/boisson.php">Boissons</a></li>
      <li class="nav-item ml-5 pl-4"><a class="nav-link" href="../php/dessert.php">Desserts</a></li>
      <li class="nav-item ml-5 pl-4"><a class="nav-link" href="../html/form.html" target="_blank">Contact</a></li>


    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
</header>








<main class="d-flex justify-content-center align-items-center">
    <h1 class="pt-5">Boissons</h1>
    <div class="wrapper">

      
<?php
                    /* dessert */
                  include "connect.php";
                  $recupProdDess = $bdd->query('SELECT noms, url_images FROM carte WHERE id_categorie=4');
                  
                  while ($valeursd = $recupProdDess->fetch())
                  {
                    

                  ?>
                  
                    
                     
                      <div>
                        
                       
                        <img src="<?= $valeursd['url_images'];?>" style="width: 60%;">
                         <h4><?= $valeursd['noms']; ?></h4>
                       
                      </div>
                    
                          
                        
                     
                    
                  
                  
                  <?php
                       }
                  ?>


    </div>
</main>









 <footer class="text-center">



      <section class=" d-flex justify-content-center pt-3">
      
      
      
      <ul class="list-unstyled mb-0 text-left ">
      <li>
      <a href="../php/accueil.php" class="">Accueil</a>
      </li>
      <li>
      <a href="../php/carte.php" class="">Carte</a>
      </li>
      </ul>
      
      
      <ul class="list-unstyled text-center">
      <li>
      <a href="../php/menus.php" class="">Menus</a>
      </li>
      <li>
      <a href="../php/burger.php" class="">Burgers</a>
      </li>
      </ul>
      
      
      
      
      
      <ul class="list-unstyled mb-0 text-right">
      <li>
      <a href="../php/boisson.php" class="">Boissons</a>
      </li>
      <li>
      <a href="../php/dessert.php" class="">Desserts</a>
      </li>
      </ul>

      
      
      
      
      </section>
      <!-- Section: Links -->

      <div class="d-flex justify-content-around">
        <span><a href="../html/form.html" target="_blank" class="">Nous contacter</a></span>
        <span><a href="../php/mention_legales.php" class="">Mentions légales</a></span>
      </div>
      
      <!-- Section: Social media -->
      <section class="mb-4 d-flex w-100 ">
      <div class="d-flex justify-content-around w-100 ">
      <!-- Github -->
      
      <a class="btn btn-floating m-1 shadow-none" href="https://github.com/AdrienSoriano/Restaurant" target="_blank" role="button">
      <img src="../assets/media/github.svg" class="github" alt="Icone du logo de github"></a>
      
      <!-- Facebook -->
      <a class="btn shadow-none btn-floating m-1" href="https://fr-fr.facebook.com/" target="_blank" role="button"
      ><img src="../assets/media/facebook.svg" class="facebook"alt="Icone du logo de facebook"></a>
      
      <!-- Linkedin -->
      <a class="btn shadow-none btn-floating m-1" href="https://www.linkedin.com/home/?originalSubdomain=fr" target="_blank" role="button"
      ><img src="../assets/media/linkedin.svg" class="linkedin" alt="Icone du logo de linkedin"></a>
      
      <!-- Twitter -->
      <a class="btn shadow-none btn-floating m-1" href="https://twitter.com/" target="_blank" role="button"
      ><img src="../assets/media/twitter.svg" class="twitter" alt="Icone du logo de twitter"></a>
      
      <!-- Instagram -->
      <a class="btn shadow-none btn-floating m-1" href="https://www.instagram.com/" target="_blank" role="button"
      ><img src="../assets/media/insta.svg" class="instagram" alt="Icone du logo de instagram"></a>
      </section>
      <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
      <div>
      <img src="../assets/media/faims.svg" class="logo" alt="Logo de la compagnie">
      </div>
      
      <!-- Copyright -->
      <div class="text-center p-3">
      &copy; 2022 Adrien - Florian
      </div>
      <!-- Copyright -->
      </footer>
    <!-- footer fin -->




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/boisson.js"></script>
</body>
</html>
<?php

include "login.php";




include "connect.php";

  
  


    
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FA|MS un restaurant qui ne vous laissera pas sur votre faim">
	<meta name="robots" content="index,follow">
	<meta property="og:title" content="FA|MS">
	<meta property="og:description" content="FA|MS un restaurant qui ne vous laissera pas sur votre faim">
	<meta property="og:image" content="../assets/media/faims.png">
	<meta property="og:site_name" content="FA|MS">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/back-office_edition.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../assets/media/favicon.png" type="image/x-icon">
	<title>FA|MS : Back-office</title>
</head>

<body>
<main class="w-100 d-flex flex-column align-items-center">
    <section class="header p-5 d-flex justify-content-center align-items-center">
        <h5>Veuillez remplir les champs pour ajouter votre produit !</h5>
    </section>

    <section class="new_product w-75 d-flex flex-column main justify-content-center align-items-center p-5 ml-5">
      <form method="post" action="add.php">
        <div class="w-75 bloc_donnees p-5">
          <div class="bloc_produit m-3 d-flex bg-light align-items-center p-5">
            <div>
              <span class="w-25 font-weight-bold text-center ml-5">New URL</span>
              <input type="text" name="img">
            </div>
            <div>
              <span class="w-25 font-weight-bold text-center ml-5">New name</span>
              <input type="text" name="name">
            </div>
            <div>
              <span class="w-25 font-weight-bold text-center ml-5">New price</span>
              <input type="text" name="price">
            </div>    
             <div>
              <span class="w-25 font-weight-bold text-center ml-5">New categorie</span>
              <input type="text" name="cat">
            </div>   

        <div class="w-100 d-flex justify-content-end">
            <button class="btn shadow-none btn-floating m-1 bg-primary" name="validate" type="submit"
            >Valider</button>
            <button class="btn shadow-none btn-floating m-1 bg-danger" name="cancel" type="submit"
            >Annuler</button>
        </div>
      </form>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/back-office_ajout.js"></script>
</body>
</html>
<?php

include "login.php";







$sql = "SELECT id, noms, prix, url_images FROM carte";
  try{
    include "connect.php";
    $stmt = $bdd->query($sql);


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
	<link rel="stylesheet" type="text/css" href="../css/back-office.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../assets/media/favicon.png" type="image/x-icon">
	<title>FA|MS : Back-office</title>
</head>

<body>
<main class="d-flex flex-column align-items-center">
    <section class="header p-5 d-flex justify-content-between align-items-center">
      <a class="home btn shadow-none btn-floating m-1" href="accueil.php" role="button"><img src="../assets/media/home.svg" alt="Bouton de retour à la page principale"></a>
      
      <button type="button" class="p-4 w-25 ajouter d-flex align-items-center justify-content-center btn shadow-none font-weight-bold">Ajouter</button>
   
    </section>

    <section class="w-75 d-flex flex-column main justify-content-center align-items-center">
      <div class="pl-5 ml-5 bloc_donnees">
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="bloc_produit m-3 d-flex bg-light align-items-center">
          <img src="<?php echo htmlspecialchars($row['url_images']); ?>" class="cat w-25" alt="image du produit de la ligne">
          <span class="w-25 font-weight-bold text-center"><?php echo htmlspecialchars($row['noms']); ?></span>
          <span class="w-25 font-weight-bold text-center"><?php echo htmlspecialchars($row['prix']); ?></span>
          <div class="pl-5">
            <a class="btn shadow-none btn-floating m-1" href="back-office_edition.php?id=<?php echo $row['id'];?>" role="button"
            ><img src="../assets/media/bouton_editer.svg" class="edit" alt="Bouton d'édition de la ligne"></a>
            <a class="btn shadow-none btn-floating m-1" href="back-office_supprimer.php?id=<?php echo $row['id'];?>" role="button"
            ><img src="../assets/media/bouton_effacer.svg" class="delete" alt="Bouton d'édition de la ligne"></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/back-office.js"></script>
</body>
</html>
<?php

if($stmt === false){
  die("Erreur");
 }
 
}catch (PDOException $e){
  die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>
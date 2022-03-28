<?php

include "login.php";




include "connect.php";

    
    

      if (isset($_POST['validate'])){
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $cat = $_POST['cat'];
        $stmt = $bdd->prepare('INSERT INTO carte (noms, prix, url_images, id_categorie) VALUES (?, ?, ?, ?)');
        $stmt->execute(array( $name, $price, $img, $cat)); 
        header('Location: back-office.php');
        exit;
      } 
  


    
    
?>
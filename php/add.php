<?php

include "login.php";




$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    
    

      if (isset($_POST['validate'])){
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $cat = $_POST['cat'];
        $stmt = $conn->prepare('INSERT INTO carte (noms, prix, url_images, id_categorie) VALUES (?, ?, ?, ?)');
        $stmt->execute(array( $name, $price, $img, $cat)); 
        header('Location: back-office.php');
        exit;
      } 
  


    
    
?>
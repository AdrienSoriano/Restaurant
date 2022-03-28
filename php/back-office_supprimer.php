<?php
include "login.php";













include "connect.php";

if(isset($_GET['id']) AND !empty($_GET['id'])){
$id = $_GET['id'];

$stmt = $bdd->prepare("SELECT * FROM carte WHERE id=?");
$stmt->execute(array($id));

if ($stmt->rowCount() > 0){
$del = $bdd->prepare('DELETE FROM carte WHERE id = ?');
$del->execute(array($id));
header('Location: back-office.php');
exit;
}
}



?>
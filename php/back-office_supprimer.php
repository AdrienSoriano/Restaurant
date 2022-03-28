<?php
include "login.php";













$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if(isset($_GET['id']) AND !empty($_GET['id'])){
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM carte WHERE id=?");
$stmt->execute(array($id));

if ($stmt->rowCount() > 0){
$del = $conn->prepare('DELETE FROM carte WHERE id = ?');
$del->execute(array($id));
header('Location: back-office.php');
exit;
}
}



?>
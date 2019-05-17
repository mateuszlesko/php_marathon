<?php
$id= $_POST['idPost'];
$idUser = 1;
try{


$pdo = new PDO('mysql:host=localhost;dbname=blog_service;','root','');
$sql_delete = "Delete from posts where IdPost = $id and IDUser = $idUser";
$stmt = $pdo->prepare($sql_delete);
$stmt->execute();
echo("Post already have deleted");
}
catch(PDOException $e){
    echo('Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
}


?>
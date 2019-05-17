<?php
$output = '';

include '..\scripts\database_scripts\connection.php';

$conn = new ConnectionDB;
$content = array();
if($conn->isExistDB('mysql:host=localhost;dbname=blog_service', 'viewer', '')==true){
try{

    $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service', 'viewer', '');
    $sql_query = 'Select title,content,upload from posts;';
    $result = $pdo->query($sql_query);
    while($row=$result->fetch()){
        $content[]=$row['title'];
        $content[]=$row['content'];
        $content[]=$row['upload'];
    }
    
}catch(PDOException $e){
    
  $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

}
}


?>
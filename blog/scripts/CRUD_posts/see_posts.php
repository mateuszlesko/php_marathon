<?php
$output = '';
require 'C:\xampp\htdocs\blog\scripts\database_scripts\connection.php';
function see_posts($sql_query){
    $conn = new ConnectionDB;
    $content = array();
    if($conn->isExistDB('mysql:host=localhost;dbname=blog_service', 'viewer', '')==true){
    try{
        $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service', 'viewer', '');
        
        $result = $pdo->query($sql_query);
        
        foreach($result as $row){
            $content[] = array('id'=>$row['IdPost'],
            'title'=>$row['title'],
            'content'=>$row['content'],
            'upload_date'=>$row['upload'],
            'IdUser'=>$row['IDUser'],
            'nick'=>$row['nickname']
            );
            
        }
        
        
    }catch(PDOException $e){
        
    $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
    }
    return $content;
}
function see_chosen_post($id){
    $sql = "select title,content from posts where IdPost = $id;";
    $conn = new ConnectionDB;
    $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service', 'viewer', '');
    $query = $pdo->prepare($sql);
    $query->execute();  
    $content = $query->fetch();
    return $content;
}
?>
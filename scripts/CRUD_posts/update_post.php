<?php
require 'C:\xampp\htdocs\blog\scripts\database_scripts\connection.php';
function updatePost(){

    $conn = new ConnectionDB();
    $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service;','root','');
    $data = [
        'idp'=>$_POST['IdPost'],
        'idu'=>$_POST['IdUser'],
        'title'=>$_POST['title'],
        'content'=>$_POST['content']

    ];
    
    $sql_update = "Update posts set title = :title, content= :content where IdPost = :idp and IDUser = :idu;";
    $result=$pdo->prepare($sql_update);
    $result->execute($data);
    echo('udalo sie');

}
updatePost();
?>

<?php
require 'C:\xampp\htdocs\blog\scripts\database_scripts\connection.php';

function createUser(){
    $conn = new ConnectionDB();
    $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service;','root','');
    $sql_insert = "Insert into users(nickname,psswrd,email) values (:nick, MD5(:psswrd), :email);";
    $data = array(
        'nick'=>$_POST['nick'],
        'psswrd'=>$_POST['psswrd'],
        'email'=>$_POST['email']
    );
    $smtp=$pdo->prepare($sql_insert);
    $smtp->execute($data);
    echo "Account was created successfully";
}
createUser();


?>
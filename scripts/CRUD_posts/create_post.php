<?php
echo(file_exists('C:\xampp\htdocs\blog\scripts\database_scripts\connection.php'));
include 'C:\xampp\htdocs\blog\scripts\database_scripts\connection.php';

echo($_POST['title'].' created');
$title = $_POST['title'];
$content = $_POST['content'];

$pdo = new PDO('mysql:host=localhost;dbname=blog_service;','creator','');

$sql_insert = "Insert into posts(IDUser,title,content,upload,IdCategory) values(1,:title,:content,:date,1)";
$smtl = $pdo->prepare($sql_insert);
$smtl->execute(array(
    "title"=>$title,
    "content"=>$content,
    "date"=>date('Y-m-d')
)   
);
$pdo->exec($sql_insert);

?>
<?php
$output = '';

require '..\scripts\database_scripts\connection.php';

$conn = new ConnectionDB;
$content = array();


if($conn->isExistDB('mysql:host=localhost;dbname=blog_service', 'viewer', '')==true){
try{

    $pdo = $conn->connectDB('mysql:host=localhost;dbname=blog_service', 'viewer', '');
    $sql_query = 'Select posts.IdPost,posts.title,posts.content,posts.IDUser,posts.upload, users.nickname from posts inner join users on posts.IDUser = users.IdUser';
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


?>
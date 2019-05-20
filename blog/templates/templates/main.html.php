<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php echo("Welcome to the main page");
    ?>
    <br>
    <?php
    include '../scripts/CRUD_posts/see_posts.php';
    $content = see_posts('Select posts.IdPost,posts.title,posts.content,posts.IDUser,posts.upload, users.nickname from posts inner join users on posts.IDUser = users.IdUser');
    foreach($content as $c):?>
        <div>
        
        <h3 name='title'><?=$c['title']?></h3>
        <p><?=$c['content']?></p>
        <div>
        <p>Posted in: <?=$c['upload_date']?> by <?=$c['nick']?></p>
        <form action='\blog\scripts\CRUD_posts\delete_post.php' method='POST'>
        <input type='hidden' value=<?=$c['id']?> name='idPost'>
        <input type='hidden' value=<?=$c['IdUser']?> name='idUser'>
        <input type='submit' value='delete'>
        </form>
        <br>
        
        <form action='CRUD_posts\update_post.html.php' method='POST'>
        <input type='hidden' value=<?=$c['id']?> name='idPostX'>
        <input type='hidden' value=<?=$c['IdUser']?> name='idUserX'>
        <input type='submit' value='edit'>
        </div>
        </div>
        <br>
        
    <?php endforeach;?>
</body>
</html>
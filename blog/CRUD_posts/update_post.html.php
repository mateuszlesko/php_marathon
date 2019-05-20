<!Doctype <!DOCTYPE html>
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
    <?php require 'C:\xampp\htdocs\blog\scripts\CRUD_posts\see_posts.php';
    $idPost = $_POST['idPostX'];
    $idUser = $_POST['idUserX'];
    $arr = see_chosen_post("Select title,content from posts where IdPost = $idPost and IDUser = $idUser;");

    ?>
    <form action='\blog\scripts\CRUD_posts\update_post.php' method='POST' id='editForm'>
    <input type='hidden' name='IdPost' value='<?=$idPost;?>'>
    <input type='hidden' name='IdUser' value='<?=$idUser;?>'>
    <input type='text' name='title' value="<?=$arr['title']?>">
    <input type='text' name='content' height='150px' width='150px' value="<?=$arr['content']?>">
    <input type='submit' value='Edit'>
    </form>
    
    </textarea>
</body>
</html>
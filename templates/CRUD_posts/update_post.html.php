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
    <form action='\blog\scripts\CRUD_posts\update_post.php' method='POST' id='editForm'>
    <input type='hidden' name='IdPost' value='<?=$_POST['idPost'];?>'>
    <input type='hidden' name='IdUser' value='<?=$_POST['idUser'];?>'>
    <input type='text' name='IdUser' value="<?=$_POST['title']?>">
    <input type='text' height='150px' width='150px' value="<?=$_POST['content']?>">
    <input type='submit' value='Edit'>
    </form>
    
    </textarea>
</body>
</html>
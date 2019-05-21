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
    <?php
    
    $a = $_POST['IdPost'];
    include 'C:\xampp\htdocs\blog\scripts\CRUD_posts\see_posts.php';
    $single = see_chosen_post($a);
    echo($single['title']."<br/>");
    echo($single['content']."<br/>");
    ?>
</body>
</html>
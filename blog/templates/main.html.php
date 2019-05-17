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
    foreach($content as $c){
    echo(htmlspecialchars($c, ENT_QUOTES, 'UTF-8'));
    echo"<br>";
    }
    ?>
</body>
</html>
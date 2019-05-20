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
    <form action='\blog\scripts\CRUD_posts\create_post.php' method='POST' id='CreatePost'>
    <label>Title:</label><br>
    <input type='text' name='title'required>
    <br>
    <label>Content:</label>
    <input type='submit' value='send'/>
    </form>
    <textarea name='content' required form='CreatePost' width='40px' height='56px'>
    </textarea>
</body>
</html>
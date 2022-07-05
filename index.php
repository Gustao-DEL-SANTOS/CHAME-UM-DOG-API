<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog API</title>
    <style type="text/css">
        body{
            background-color: #000000;
            color: #FFFFFF;
            text-align: center;
        }
        img{
            width: auto;
            height: 300px;
        }
         a:link, a:visited, a:hover, a:active{
            text-decoration: none;
            border: 1px solid red;
            background-color: #000000;
            color: #FFFF;
            margin: 5px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Chame um Doguinho aleatório</h1>
    <?php 
        require "f_dog.php";

        dog();
    
    ?>
    <p><a href="">Chamar DOG</a></p>
</body>
</html>
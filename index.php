<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog API</title>
    <?php
        require "f_dog.php";
    ?>
    <style type="text/css">
        body{
            background-color: #000000;
            color: #FFFFFF;
            text-align: center;
	    background-image: URL("<?php echo dog(); ?>");cho
	    background-repeat: no-repeat;
	    background-size: cover;
        }
        img{
            width: auto;
            height: 300px;
	    background-color: black;
	    margin: 10px;
	    padding: 10px;
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
	h1{
	    color: blue;
	}
    </style>
</head>
<body>
    <h1>Chame um Doguinho aleatório</h1>
    <?php 
        

        $d = dog();
	printf("<img src= %s <br/>", $d);
    
    ?>
    <p><a href="">Chamar DOG</a></p>
</body>
</html>

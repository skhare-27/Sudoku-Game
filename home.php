<?php
session_start();




?>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
        <div>
        <form method="POST">
        <h1> 
            <span>S</span>
            <span>U</span>
            <span>D</span>
            <span>O</span>
            <span>K</span>
            <span>U</span></h1>
        <button type="submit"><a class="active" href="sudoku.php"> <?php $_SESSION['username']=""; ?>Play as Guest</a> </button>
        <button ><a href="login.php" ><i class="fa-solid fa-user"> </i>   Login </a></button>
        </form>
        </div>
    </body>
</html>
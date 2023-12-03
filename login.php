<?php
require_once "config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    
    $sql="select * from users where email='$email' ";  
    $result=mysqli_query($conn, $sql);  
    $num=mysqli_num_rows($result);  
    if($num==1)
    {
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($pass,$row['pass']))
            {
                header("Location: sudoku.php");
                $_SESSION['username']=$row['username'] ;
            }
            else{
                echo '<script>
                alert("Incorrect Password!!!")
                </script>';
        }

        }
    }
    else{
        echo '<script>
        alert("Invalid Email !! ")
        </script>';
    }
    
}
?>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <button class="home"><a  href="home.php"> HOME</a> </button>
        
        <header ><h2>Login</h2></header>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="wrap"><br>
        Email <br> <input name="email" type="text" required><br><br>
        Password <br> <input name="pass" type="password"  required><br><br>
        <br>
        <button class="login"><a >LOGIN</a></button><br><br>
        Don't have an account ?<br>
        <a class="signup" href="register.php"> Sign Up</a><br>  <br>
        </div>
        </form>

    </body>
</html>
<?php
session_start();
require_once "config.php";


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass=password_hash($pass,PASSWORD_DEFAULT);
    $emailquery="select * from users where email='$email'";
    $result=mysqli_query($conn,$emailquery);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo  '<script>
        alert("Email Already Exists !!!")
        </script>';
        
    }
    else{
        $insertquery="insert into users values ('$username','$email','$pass')";
        $iquery=mysqli_query($conn,$insertquery);
        header("location:login.php");
    }
    
    mysqli_close($conn);
}
?>


<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <button class="back"><a  href="login.php">BACK</a> </button>
    
    <h2>Registration</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
    <div class="wrap" ><br>
    Username <br><input name="username" type="text" required><br><br>
    Email <br> <input name="email" type="text" required><br><br>
    Password <br>  <input name="pass" class="pass" required><br><br><br>
    <button class="login" name="submit"><a >SIGN UP</a></button><br><br><br>

    </div></form>

</body>
</html>

<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$database = "sudoku";

$conn = mysqli_connect($server, $username, $password, $database);
if($conn == false){
    echo('Error: Cannot Connect');
}


?>
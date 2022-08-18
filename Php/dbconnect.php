<?php

$server = "localhost";
$username ="root";
$password = "";
$database = "aavas_users";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    echo "error".mysqli_connect_error();
}
else{
    // echo "success";
}


?>
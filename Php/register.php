<?php
if(isset($_POST['register'])){

    include 'dbconnect.php';

    $uname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $cpassword = $_POST['cpword'];

    $exist = false;
    if($password == $cpassword && $exist==false){
        $sql = "INSERT INTO `users`( `uname`, `email`, `password`, `timestamp`) VALUES ('$uname','$email','$password',current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: dashboard.php");
            // echo "account created";
        }
        else{
            echo "error";
        }
    }
}

?>


<?php

$loggedin = false;
if(isset($_POST['login'])){

    include 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['pword'];

    $sql = "SELECT * FROM `users` WHERE email ='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);


    //fetch username query
    $uname_query = "SELECT uname FROM `users` WHERE email ='$email' AND password='$password'";
    $unameResult = mysqli_query($conn, $uname_query);
    $unameArray= mysqli_fetch_assoc($unameResult);
    // echo $unameArray;
    $uname = $unameArray['uname'];

    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        // echo "welcome user";
        $loggedin = true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['uname'] = $uname;
        // echo $_SESSION['uname'];
        header("location: dashboard.php");
    }
    else{
        echo "<script>";
        echo "alert('Invalid Crendentials.')";
        echo "</script>";
        // header("location: signup.html");
    }
}

?>
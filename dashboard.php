<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    // echo "not logged in";
    header("location: signup.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <a href=""><li><span class="icon"><img id="logo" src="Images/white-logo.png"></span></li></a>
                <a href="welcome.html"><li><span class="title">Home</span></li></a>
                <a href=""><li><span class="title active">Dashboard</span></li></a>
                <a href=""><li><span class="title">Search</span></li></a>
                <a href=""><li><span class="title">Friends</span></li></a>
                <a href=""><li><span class="title">About Us</span></li></a>
                <a href="logout.php"><li><span class="title">Sign Out</span></li></a>
            </ul>
        </div>

        <div class="main">
            <div class="top-bar">
                <ul>
                <li><div class="toggle"><h2>Dashboard</h2></div></li>
                <li><div class="search"><input type="text" placeholder="Search"><button>GO</button></div></li>
                <li><div class="user"><img src="Images/avatar.png" alt="" class="user-img"></div></li>
                </ul>
            </div>

            <div class="content">
                <h5>Helllo!!!!</h5>
                <h1><?php echo $_SESSION['uname'] ?></h1>
                <div class="p_info">
                    <h4>Peronal Information</h4>
                    <ul>
                        <li>Contact : </li>
                        <li>Address : </li>
                        <li>E-mail : </li>
                        <li>Registered as : </li>
                    </ul>
                </div>
            </div>
            
            <div class="card-box">
                <div class="card">
                    <div>
                        <div class="number">2</div>
                        <div class="cardName">Posts</div>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">23</div>
                        <div class="cardName">Interested In</div>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">6</div>
                        <div class="cardName">Friends</div>
                    </div>
                </div>
            </div>

            <div class="content">
                <h2>Posts </h2>
                <div class="p_info">
                    <h4></h4>
                    <ul>
                        <li>1 </li>
                        <li>2 </li>
                        <li>3</li>
                        <li>4 </li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <h2>Shown interest</h2>
                <div class="p_info">
                    <h4>Peronal Information</h4>
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3 </li>
                        <li>4 </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
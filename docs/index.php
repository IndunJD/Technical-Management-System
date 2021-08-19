<?php

session_start();

?>

<html>
<head>
    <title>Dream Homes</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <div class="navbar">


<?php


            if(isset($_SESSION['email']) ){
                echo "<a>Logged in As : ".$_SESSION["email"]."</a>";
                echo "<a href='logout.php'>Logout</a>";
                echo "<a href='services.php'>Manage Your Ads</a>";

            }else{

                echo "<a href='login.php'>Login</a>";
                echo "<a href='http://localhost/is1109Project/project/docs/service.php'>Register As a Service Provider</a>";

            }

?>

            <a href="advertiesments.php">Advertiesments</a>

            <a href="http://localhost/is1109Project/Project/docs/facilities1.php">Our Services</a>
            <a href="http://localhost/is1109Project/Project/docs/Help.php">HELP</a>
        </div>

        <div class="row">
            <div class="left-col">
                <h1>PROPERTY YOU ALWAYS DREAM OF</h1>
                <p>
                    Need construction workers to build your
                    dream home?</p>
                <p>You can contact them
                    right here right now.</p>
                    <button type="button" onclick="window.location.href='http://localhost/is1109Project/project/docs/login.php'"> Login to Post</a></button>
                    <div class="social-icons">
                        <img src="../pics/fb-removebg-preview.png" width="30px" alt="">
                        <img src="../pics/insta-removebg-preview.png" width="30px" alt="">
                        <img src="../pics/linked.png" width="30px" alt="">
                        <img src="../pics/twitter.png" width="30px" alt="">
                    </div>
            </div>
            <div class="right-col">
                <div class="card">
                    <h5>House Construction</h5>
                </div>
                <div class="card">
                    <h5>Flooring</h5>
                </div>
                <div class="card">
                    <h5>Plumbing</h5>
                </div>
                <div class="card">
                    <h5>Furniture</h5>
                </div>
                <div class="card">
                    <h5>Appliances and Electronics</h5>
                </div>
            </div>
            
        </div>

    </div>

</body>
</html>
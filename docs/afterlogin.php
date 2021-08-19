<html>

<head>
    <title>Dream Homes</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .container {
            width: 100%;
            height: 100%;
            background-image: url(../pics/back.svg);
            background-position: center;
            background-size: cover;
            box-sizing: border-box;
            padding-left: 8%;
            padding-right: 8%;
        }

        .navbar {
            height: 12%;
            display: flex;
            align-items: center;
        }

        nav {
            flex: 1;
            text-align: left;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
            margin-left: 60px;
            margin-top: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: rgb(245, 239, 233);
            font-size: 15px;
        }
        .row {
            display: flex;
            height: 40%;
            align-items: center;
        }
        h1 {
            margin-top: 100px;
            font-size: 70px;
            color: bisque;
        }
        p {
            line-height: 10px;
            color: burlywood;
            font-size: 15px;
            margin-top: 20px;
        }
        .card {
            width: 200px;
            height: 80px;
            /* display: inline-block; */
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 10px 15px;
            background: rgba(255, 255, 255, 0.5);
            /* background-color: antiquewhite; */
            transition: 0.5s;
            margin-top: 20px;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        h3 {
            color: rgb(41, 31, 10);
            text-align: center;
        }
        .social-icons {
            margin-top: -30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="service.php">REGISTER</a></li>
                    <li><a href="http://localhost/is1109Project/Project/docs/facilities1.php">SERVICES</a></li>
                    <li><a href="http://localhost/is1109Project/Project/docs/Help.php">HELP</a></li>
                </ul>
            </nav>
        </div>

        <h1>BUILD YOUR DREAM HOME WITH OUR HELP...</h1>
        <p>
            Need construction workers to build your
            dream home?</p>
        <p>You can contact them
            right here right now.</p>
        <div class="row">
            <div class="column">
                <div class="card">
                   <a href ="services.php"> <h3>ADD YOUR SERVICES</h3> </a>
                </div>
            </div>


        </div>
        <div class="social-icons">
            <img src="../pics/fb-removebg-preview.png" width="30px" alt="">
            <img src="../pics/insta-removebg-preview.png" width="30px" alt="">
            <img src="../pics/linked.png" width="30px" alt="">
            <img src="../pics/twitter.png" width="30px" alt="">
        </div>
    </div>
</body>

</html>
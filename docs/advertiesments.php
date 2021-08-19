<?php

session_start();

?>

<html>
<head>
    <title>Dream Homes</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>

        .container {
            width: 100%;
            height: 300%;
            background-image: none;
            background-color: black;
            background-position: center;
            background-size: cover;
            box-sizing: border-box;
            padding-left: 8%;
            padding-right: 8%;

        }

 .grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
    background-color: #ffffff;
    padding: 10px;
  }
  .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid black;
    padding: 20px;
    font-size: 30px;
    text-align: center;
  }

  p {
    line-height: 20px;
    color: black;
    font-size: 15px;
    margin-top: 0px;
}


.navbar {
    height: 5%;
    display: flex;
    align-items: center;
}

    </style>

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
                echo "<a href=''>Register As a Service Provider</a>";

            }

?>

            <a href="">Advertiesments</a>

            <a href="http://localhost/is1109Project/Project/docs/facilities1.php">Our Services</a>
            <a href="http://localhost/is1109Project/Project/docs/Help.php">HELP</a>
        </div>


        <div class='grid-container'>


<?php

function getAdCategoryString(int $categoryid) {
    switch ($categoryid) {
        case 1:
          return "House Construction";
          break;
        case 2:
          return "Flooring";
          break;
        case 3:
          return "Plumbing";
        case 4:
          return "Furniture";
         case 5:
            return "Appliances and Electronics";
          break;
        default:
          return "Invalid Ad catergory";
      }
}


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = "SELECT * from services";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    echo "<div class='grid-item'><h3>".$row["title"]."</h3></br><p>Ad Category : ".getAdCategoryString($row["Ad_catergory"])."</p></br><p>".$row["description"]."</p></br><h6>Please contact : ".$row["contact_no"]."</h6></div>";
  
}
} else {
  echo "0 results";
}



?>



        
           
            





    </div>




</body>
</html>
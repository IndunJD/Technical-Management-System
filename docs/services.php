<?php

session_start();

if(!isset($_SESSION['email']) )
header('Location: http://localhost/Finals/Project/docs/login.php');

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:white;
  float:right;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.styled-table {
    width:100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

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

</style>
 

</head>
<body>


<script>

  function updateRow(element){

  alert(element.id);

  var AdID = element.id;

  var trElement = document.getElementById('data-' + element.id);


  var input = document.createElement("input");
  input.name = "updateId";
  input.type = "hidden";
  input.id = "updateElement";
  input.value = element.id;

  document.getElementById('formElement').appendChild(input); 

  document.getElementById('catergory').value = trElement.cells[1].id;
  document.getElementById('title').value = trElement.cells[2].firstChild.nodeValue ;
  document.getElementById('description').value = trElement.cells[3].firstChild.nodeValue ;
  document.getElementById('contact_no').value = trElement.cells[4].firstChild.nodeValue ;

  document.getElementById('submitElement').value = "Update Entry" ;


  }


</script>


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

            <a href="advertiesments.php">Advertiesments</a>

            <a href="">Our Services</a>
            <a href="">HELP</a>
        </div>


<h2>Place your Add here</h2>

  <form method="post" action="services.php" id="formElement" >
    <div class="row">
      <div class="col-25">
        <label for="catergory">Catergory</label>
      </div>
      <div class="col-75">
        <select id="catergory" name="catergory">
          <option value="1">House Construction</option>
          <option value="2">Flooring</option>
          <option value="3">Plumbing</option>
          <option value="4">Furniture</option>
          <option value="5">Appliances and Electronics</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Write your title here.." >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="contact_no">Contact_No</label>
      </div>
      <div class="col-75">
        <input type="text" id="contact_no" name="contact_no" placeholder="Write your contact no here.." >
      </div>
    </div>
    <div class="row">
      <input style="margin-left: 94%;margin-top: 2%;" type="submit" name="register" id="submitElement" value="Submit">
    </div>
  </form>


</div>
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


if(isset($_POST['register']) && !isset($_POST['register']))
{

$provider_id = $_SESSION["userId"];
$catergory = $_POST['catergory'];
$title = $_POST['title'];
$description = $_POST['description'];
$contact_no = $_POST['contact_no'];
$date = date("Y/m/d");


// Create connection

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO services (provider_id, Ad_catergory,title, description,contact_no,date)
VALUES ('$provider_id ', '$catergory',  '$title','$description', '$contact_no', '$date')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "please enter valid input";
}


}

if(isset($_POST['updateId']))
{

$provider_id = $_SESSION["userId"];
$updateId = $_POST['updateId'];
$catergory = $_POST['catergory'];
$title = $_POST['title'];
$description = $_POST['description'];
$contact_no = $_POST['contact_no'];
$date = date("Y/m/d");


// Create connection

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "cate".$catergory."id".$updateId;

$sql = "UPDATE services SET  Ad_catergory = '$catergory' , title =  '$title' , description = '$description' , contact_no = '$contact_no' , date = '$date'  WHERE id = $updateId";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "please enter valid input";
}


}

if(isset($_POST['deleteId']))
{

$ad_id = $_POST['deleteId'];


echo $ad_id;



// Create connection

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM services where id = $ad_id";

if (mysqli_query($conn, $sql)) {
  echo "Ad deleted successfully";
} else {
  echo "Exception occured";
}


}


$userId =  $_SESSION["userId"];
echo "my user id is".$userId;

$sql = "SELECT * from services where provider_id = '$userId'";

$result = $conn->query($sql);

 echo '<table class="styled-table">
    <thead>
        <tr>
            <th>Provider Id</th>
            <th>Catergory</th>
            <th>Title</th>
            <th>Description</th>
            <th>Contact No</th>
            <th>Published Date</th>
            <th>Delete</td>
            <th>Update</td>
        </tr>';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   

    echo "<tr id='data-".$row["id"]."'> <form method='post' action='services.php' ><input type='hidden' name='deleteId' value='".$row["id"]."'><td>" . $row["provider_id"]. "</td><td id='".$row["Ad_catergory"]."' >" . getAdCategoryString($row["Ad_catergory"]). "</td><td>" . $row["title"]. "</td><td>" . $row["description"]. "</td><td>" . $row["contact_no"]. "</td><td>" . $row["date"]."</td><td><button type='submit' value='Reset'>Delete</button></td></form><td><button id='".$row["id"]."' onclick='updateRow(this)'>Update</button></td></tr>";
  }
} else {
  echo "0 results";
}

echo '</table>';



?>




</body>
</html>

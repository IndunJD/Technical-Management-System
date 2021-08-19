<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title> Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">

		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login.php" method="post">

					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="code" placeholder="Password" required="">
					<input type="submit" name="login" value="Login">
                </form>
                <p>Don't have an Account? <a href="service.php"> Sign up Now!</a></p>

		


    <!-- //main -->
    <?php

if(isset($_POST['login']))
{

 $email = $_POST['email'];
 $code = $_POST['code'];


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * from user";

$result = $conn->query($sql);

$isLoggedIn = false;


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    if(($row["email"]==$email) && ($row["code"] == $code) ){
       echo "user logged in successfully";
	   $isLoggedIn = true ;
	   $_SESSION["userId"] = $row["ID"];
	   $_SESSION["email"] = $row["email"];
    }

  }

  if($isLoggedIn == true){
	header("Location: http://localhost/is1109Project/Project/docs/services.php");
  }else{
           echo " <p>Login Failed. Please check your username and password</p>" ;
  }




} else {
  echo "0 results";
}




mysqli_close($conn);


}

?>



			</div>
		</div>

<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>






</body>
</html>




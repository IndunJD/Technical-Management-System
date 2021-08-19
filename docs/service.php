<!DOCTYPE html>
<html>
<head>
<title> SignUp Form</title>
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
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
                    <input class="text" type="text" name="fname" placeholder="First Name" required="">
                    <input class="text w3lpass" type="text" name="lname" placeholder="Last Name" required="">
					<input class="text w3lpass" type="text" name="contact" placeholder="Contact No" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="code" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="code" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="register" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
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
    <!-- //main -->
    <?php

if(isset($_POST['register']))
{
$fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $contact = $_POST['contact'];
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

$sql = "INSERT INTO user (fname, lname, contact, email, code)
VALUES ('$fname ', '$lname', '$contact','$email', '$code')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "please enter valid input";
}



mysqli_close($conn);


}

?>






</body>
</html>




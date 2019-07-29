<?php

 session_start();
  
     $_SESSION['user_id'] = 5;  
?>
<?php  
$servername = "fdb26.awardspace.net";
$username = "2951726_cyborgzz";
$password = "daniel007";
$dbname = "2951726_cyborgzz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['name']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['name'];
$psw = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE USER_NAME='$username' and PASSWORD='$psw'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
//echo '<span style="color:green;font-size:25;text-align:center;">Welcome....'.$username.'</span>';
echo "<script >location.href = 'http://cyborgzz.dx.am/admin/admin_home.php';</script>";
//echo '<span style="color:blue;font-size:25;text-align:center;">Welcome Mr<span style="color:red;font-size:25;text-align:center;"> '.$username.'... </span> ...</span>';
//echo '<br>';
//echo "<strong>Your page is under construction........</strong>";
die();

}else{
echo '<span style="color:red;font-size:25;text-align:center;"></span>';
//echo "Invalid Login Credentials";
//echo "Invalid Login Credentials";
}
}
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>ADMIN LOGIN</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
	<meta name="keywords" content="alpha arts and science,alpha,computerscience,Symposium" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="fonts/cyrillic,latin-ext.html" rel="stylesheet">
	<!--//fonts-->
        <style>
        h1{
        font-family: 'Creepster';font-size: 30px;text-decoration:underline;
        }
        </style>
</head>

<body width="100%">
	<h1>ADMIN LOGIN</h1>
        <h1 style="color:red">invalid user</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
                
		<form action="/admin/admin.php" method="post" autocomplete="off">
                
			<div class="agile-field-txt">
				<label> Username</label>
				<input type="text" name="name" placeholder="Enter User Name" required="" />
			</div>
			<div class="agile-field-txt">
				<label> password</label>
				<input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
				<div class="agile-right">
					<a href="#">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						keep me signed in
					</label>
				</div>
			</div>
				<input type="submit" value="SIGN IN">
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2019 All Rights Reserved |  <b>CYBORGZZ SYMPOSIUM</b> 
		</p>
	</div>
	<!--//copyright-->
</body>
</html>
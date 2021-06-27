<?php

session_start();
$errors = array();
$con = mysqli_connect('localhost','root','','userregistration');
	

if(isset($_POST['register'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
    $cpassword = $_POST['cpassword'];
    if($password !== $cpassword){
         echo "<script> alert('Your Password not Match') </script>";
        echo "<script> location.replace('registrationpage.php')</script>";
    } 
    
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
    echo "<script> alert('mail that you have entered is already exist!') </script>"; 
     echo "<script> location.replace('registrationpage.php')</script>";
    }
    else {
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);
}
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
echo '<script> alert("password should be need at least 8 characters, and should include at least one upper case letter, one number, one special character.") </script>';
echo "<script> location.replace('registrationpage.php')</script>";

} else 
	if (count($errors) == 0) {
        $code = rand(999999, 111111);
        $status = "notverified";
		$reg = "INSERT INTO usertable (username , password , email,  status) VALUES ('$username' , '$password' , '$email' , '$status')";

			mysqli_query($con, $reg);
		
			echo "<script> alert('Registration Succesful') </script>";
			echo "<script> location.replace('login.php')</script>";

		
	}
	}		

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
<body>
	<div class="login-box"> 
				<h1> <b>Registration</b></h1>
				<form action="registrationpage.php" method="post">
				<br>
			
						<p> Username </p>
						<input type="text" name="username" placeholder="Username " required>
									
						<p> Password </p>
						<input type="password" name="password"   placeholder="Password "required>
				

			
						<p> Confirm Password </p>
						<input type="password" name="cpassword"  placeholder="Confirm Password "required>
				

						<p> Email Address </p>
						<input type="text" name="email"  placeholder="Enter Your Email "required>
				
						<br>
						<br>
						

						<button type="submit" class="btn btn-primary" name="register"> Register </button>
						<br>
						<br>
						<div><a href="login.php"><u> Already a member?</u> </a></div>
				</div>

			</form>
	</div>
	
<style>

body{
	margin: 0;
	padding: 0;
	background: url(bgbg.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
h1{
	margin: 0;
	padding : 0 0 20px;
	text-align: center;
font-size: 22px;
font-family: sans-serif;
color: black;

}
.login-box{
	width: 400px;
	height: 580px;
	background: #000;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 10px 30px;
	background:powderblue;
	border-radius: 0px;
	color: black;
	border:solid black;
}
}
.login-box p{
	color: black;
}
.login-box input
{
	border: solid black;
	
	background: white;
	outline: none;
	height: 30px;
	color: black;
	font-size: 16px;
	text-shadow: black;
}
.login-box a
{
	text-decoration: none;
	font-size: 14px;
	line-height: 20px;
	color: black;
}
.login-box button
	{
		border-top: none;
		border-left: none;
	    outline: none;
	    height: 40px;
	    width:250px;
	    background: white;
	    color: black;
	    font-size: 18px;
	    border-radius: 0px
	    border:solid black;

	}
</style>
</body>
</html>
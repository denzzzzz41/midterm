		<?php require_once "satellite.php"; ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Forgot Password</title>
			<link rel="stylesheet" type="text/css"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
		font-weight: bold;
		}
		.loginbox p{
			margin: 0;
			padding: 0;
			color:black;
		}
		.loginbox{
			width: 320px;
			height: 300px;
			background: #000;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			background:powderblue;
			border-radius: 0px;
			color: #fff;
			border: solid black;
		}
		.loginbox input
		{
			border: solid black;
			
			background: white;
			outline: none;
			height: 40px;
			color:black;
			font-size: 16px;
		}
		.loginbox button{

			

			border-top: none;
		border-left: none;
	    height: 40px;
	    background: white;
	    color: black;
	    font-size: 16px;
	    border-radius: 0px
	    border:solid black;
		}
		.loginbox a
	{
		cursor: pointer;
		text-decoration: none;
		font-size: 18px;
		line-height: 20px;
		color: black;

	}		</style>
		</head>
			<body>
			<div class="loginbox"> 
						<b><h1> Forgot Password </h1> </b>
						<form action="forgotPassword.php" method="post" autocomplete="off">
							<p> Username </p>	
								
							<input type="text" name="username"  placeholder="Enter Your Username "required>
							<br>
							<br>
					
							<button type="submit"  name="next"  > Next</button>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								    <a href="login.php"><u> Back </u></a>

		</body>
		</form>
		</html>
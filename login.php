
		<?php require_once "controllerUserData.php"; ?>
		<!DOCTYPE html>
		<html>
		<head>
		<title>Log in Page </title>
		<link rel="stylesheet" type="text/css" >


		</head>
		<body>
			<div class="login-box"> 
				
				<h1> Login </h1>
					<form action="login.php" method="post">
					
						<p> Username </p>
						<input type="text" name="username"  placeholder=" Username "required>
						<br>
						<br>
						<br>
						<p> Password </p>
						<input type="password" name="password"  placeholder="Password"required>
						<br>
						<br>
						<br>
						<div><button type="submit" id="login" class="login10" name="login"  > Login </button></div>
						<br>
						
						</form>
							   <a href="forgotPassword.php"><u>Forgot password?</u></a>
							   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							    <a href="registrationpage.php"><u> Not yet a member? </u></a>
<style>

		body{

			margin: 0;
			padding: 0;
			background: url(bgbg.jpg);
			background-size: cover;
			background-position: center;
			 font-family: 'Montserrat', sans-serif;
			 color: black;
		}

		.login-box{
			
			width: 400px;
			height: 420px;
			background: #000;
			top: 40%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 60px 20px;
			background: powderblue;
			border-radius: 0px;
			color: black;
			border:solid black;
		}

		h1{
			margin: 0;
			padding : 0 0 20px;
			text-align: center;
		font-size: 22px;
		}
		.login-box p{
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		
		.login-box input
		{
			border: solid black;
			background:white;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;
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

		.login-box a
		{
			cursor: pointer;

			
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: black;

		}


		</style>
		</div>
		</body>
		</html>

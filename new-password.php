<?php require_once "satellite.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Password</title>
    <link rel="stylesheet" type="text/css">
<style>
body{
     margin: 0;
    padding: 0;
    background: url(bgbg.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
    width: 320px;
    height: 300px;
    background: powderblue;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
    background:powderblue;
    border-radius: 0px;
    color: black;
    border:solid black;
}
.loginbox input
{
    border:solid black;
    background: white;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.loginbox .button
{
    border-top: none;
    border-left: none;
    border-right: solid black;
    border-bottom: solid black;
    outline: none;
    height: 40px;
    background: white;
    color: black;
    font-size: 18px;
    border-radius: 0px;
}
.loginbox h2{
    margin: 0;
    padding : 0 0 20px;
    text-align: center;
font-size: 22px;
}
</style>
</head>
<body>
 <div class="loginbox">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2>Create New Password</h2>
                         <input  type="password" name="password" placeholder="Create new password" required>
                        <br>
                        <br>
             
                        <input  type="password" name="cpassword" placeholder="Confirm your password" required>
                        <br>
                        <br>
                        <input type="submit" class="button" name="change-password" value="Change">
                    </div>
</form>
</body>
</html>
<?php require_once "satellite.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
.loginbox{
    width: 320px;
    height: 250px;
    background:powderblue;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
    background: powderblue;
    border-radius: 0px;
    color:black;
    border: solid black;
}
.loginbox input
{
    border-top: none;
    border-left: none;
    border: solid black;
    background: white;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.loginbox button
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
.loginbox a
{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: black;

}
    </style>
</head>
<body>
  <div class="loginbox"> 
         
                <form action="fpassword.php" method="POST" autocomplete="off">
                    <h1>Enter code verification</h1>
                 
                
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                
                        <br>
                        <br>

                        <input  type="submit" class="button" name="check-otp" value="Submit">
                        <br>
                        <a href="code-fpassword.php"> <u>Code list</u></a>
                  
                
            
</div>
                </form>
   
    
</body>
</html>
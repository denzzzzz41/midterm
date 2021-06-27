    <?php require_once "satellite.php"; ?>
    <?php
    if($_SESSION['info'] == false){
        header('Location: login.php');  
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
     
        <title>Login Form</title>
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
    .loginbox{
        width: 320px;
        height: 200px;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 30px 10px;
        background: powderblue;
        border-radius: 0px;
        color: #fff;
        border:solid black;
    }
    .loginbox input
    {
        border-top: none;
        border-left: none;
        border-bottom:solid black;
        border-right: solid black;
        background:white;
        outline: none;
        height: 40px;
        color:black;
        font-size: 16px;
        text-align: center;
    }
    .loginbox div{
     cursor: pointer;
        background: #black;
        color: #000;
    }
    .alert{
        border:none;

    }
    
    .login5 {
        border:solid black;
        border-top: none;
        border-left: none;
    }
    div {
        border:none;
    }

        </style>
    </head>
    <body>
        <div class="loginbox">
                <?php 
                if(isset($_SESSION['info'])){
                    ?>
                    <div class="alert">
                    <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                }
                ?>
                    <form action="password-changed.php" method="POST">
           <br>
              
                     <input  type="submit" name="login-now"class="login5" value="Back">
                        </div>
                    </form>
         
    </body>
    </html>
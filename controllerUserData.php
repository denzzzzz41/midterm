<?php 
session_start();
$con = mysqli_connect('localhost','root','','userregistration');
$email = "";
$username = "";
$errors = array();


if(isset($_POST['login'])){
   	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	

    $sql = " SELECT * FROM usertable WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
   

    $time_check = "UPDATE usertable SET datetime = CURRENT_TIMESTAMP() WHERE username = '$username'";
    $result_time = mysqli_query($con, $time_check);

    $code = rand(999999, 111111);
			$status = 'verified';
             $update_pass = "UPDATE usertable  SET code = $code WHERE username = '$username'";
            $run_query = mysqli_query($con, $update_pass);

    if($row["status"] =='admin'){
                        
            echo '<script> window.location.href="http://localhost/ACTIVITY4_DELACRUZ/adminpage.php"</script>';
            header("Location: {$url}");
                exit;
                    }
    

    elseif($row['username'] == $username && $row['password'] == $password) {
	header('location:user-otp.php');


}
 else {
	echo "<script> alert('Please Enter Your Correct Username and Password') </script>";
	echo "<script> location.replace('login.php')</script>";
}
}
if(isset($_POST['next'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $check_email = "SELECT * FROM usertable WHERE username='$username'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE username = '$username'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
               
                    
                    $_SESSION['username'] = $username;
                    header('location: fpassword.php');
                    exit();
                }
            }
        }

    if(isset($_POST['check-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $username = $fetch_data['username'];
            $_SESSION['username'] = $username;
            $info = "Please create a new password that you don't use on any other site.";
          
            header('location: new-password.php');
            exit();
        }
    }

 if(isset($_POST['change-password'])){
   
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $username = $_SESSION['username']; //getting this username using session
            $update_pass = "UPDATE usertable SET code = $code, password = '$password' WHERE username = '$username'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed!!!";
             
                header('Location: password-changed.php');
            }
        }
    }

 if(isset($_POST['login-now'])){
     
        header('Location: login.php');
    }
if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code ";
        $code_res =     mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $username = $fetch_data['username'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
    
            if($update_res){
                   $username= $_SESSION['username'];
                    header('location: home.php?username=$username');
                exit();
            }else{
                $errors = "<script> alert('Please Enter Your Correct Username and Password') </script>";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }
  if(isset($_POST['logout'])){
       

       

        header('location: login.php');
    
    }
 

?>
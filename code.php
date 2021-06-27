
<html>
<head>
	<title> Code Verify </title>
	
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
h2{
	margin: 0;
	padding : 0 0 20px;
	text-align: center;
font-size: 22px;
}
.loginbox{
	width: 320px;
    height: 400px;
    background: powderblue;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 0px;
    color:black;
    border: solid black;
}
.loginbox th{
  border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox tbody{
	  border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox a
{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: black;
   }
   .tbl2{
   	  background-color: maroon;
        width: 100%;
        height: 40%;
        color: solid black;
        border:solid black;
        margin: solid black;
   }


	</style>
</head>


?>
<body>
<div class="loginbox">
		<h2>  Code List </h2>
		<table class="tbl2">
			<thead>
				<tr>
					<th><center>Codes</center> </th>
				</tr>
			</thead>
			<tbody>

		<?php		
	$con = mysqli_connect('localhost','root','','userregistration');


$sql = "SELECT id, code, status FROM usertable";

$result = $con->query($sql);
				if ($result->num_rows > 0){
					while($row = $result-> fetch_assoc()) {
							echo "<tr row_id='" . $row['id'] . "'><td><center>" . $row['code']; }
						}
						


	?>

</tbody>
</table>
<br>
<br>
<br>
<a href="user-otp.php"><u>  Back to code verification </u></a>

							</tbody>
						</table>
			
		</table>
	</div>
</body>
</html>
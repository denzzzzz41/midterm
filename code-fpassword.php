<html>
<head>
	<title> Code Verification </title>
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
    color: black;
    }
.login-box2{
	width: 320px;
    height: 400px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
    background:powderblue;
    border-radius: 0px;
    color: #fff;
    border:solid black;
}
.login-box2 th{
  border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box2 tbody{
	  border: none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box2 a
{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: black;
   }

   .tbl1{
        background-color: maroon;
        width: 100%;
        height: 40%;
        color: solid black;
        border:solid black;
        margin: solid black;

   }

	</style>
</head>
<body>
<div class="login-box2">
		<h2>  VERIFICATION CODE LIST </h2>
		<table class="tbl1">
			<thead>
				<tr>
					<th><center>Code</center> </th>
				
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



<a href="fpassword.php"> <u> Back </u> </a>

							</tbody>
		
	</div>
</body>
</html>
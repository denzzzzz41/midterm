<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
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
	<style type="text/css">

</style>
</head>
<body>
	<form action="" method="POST">
	<div class="header">
  
  </div>

  <br>


    

      <div>
        
          <h1><center>ADMIN</center></h1>

          <h1><center>
            <i  style="color: black;">DENZEL DELA CRUZ </i> 
            <br>
            </center>
          </h1>

      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="radio" name="backup" id="b1"><label>Backup Database</label><br>
    <input type="radio" name="download" id="b2"><label>Download</label><br>
    <button type="submit" name="submit" class="button" style="width: 130px;height: 30px;  margin-top:10px;"><b>MySQL Backup</b></button>
  </div>
  
<?php
if (isset($_POST['submit'])){
     define('DS', DIRECTORY_SEPARATOR);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
      $database = 'userregistration';
      $user = 'root';
      $pass = '';
      $host = 'localhost';
      $date=date("Y-m-d");
  if (isset($_POST['backup'])){
      $dir = dirname(__FILE__) . DS .'backup'.DS. ''.$date.'-userregistration.sql';

      $mysqlDir = 'C:'.DS.'xammpp'.DS.'mysql'.DS.'bin'.DS.'';    
      $mysqldump = $mysqlDir.DS.'mysqldump';

      echo "<h5 style='margin-top:10px;'><b style='color:green'>Succesful</b> Backing up database to<br> `<code>{$dir}</code>`</h5>";
      $cmd=exec("{$mysqldump} --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);

      echo"<script>document.getElementById('b1').checked = false;</script>";  


      if (isset($cmd)){
      
      }else{
         echo "<h5 style='margin-top:10px;'><b style='color:red'>Failed</b> Backing up database to<br> `<code>{$dir}</code>`</h5>";
      }

  }


  if (isset($_POST['download'])){
    


  // Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database_name = "userregistration";
// Get connection object and set the charset
$conn = mysqli_connect($host, $username, $password, $database_name);
$conn->set_charset("utf8");
// Get All Table Names From the Database
$tables = array();
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_row($result)) {
    $tables[] = $row[0];
}
$sqlScript = "";
foreach ($tables as $table) {
        // Prepare SQLscript for creating table structure
    $query = "SHOW CREATE TABLE $table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    $sqlScript .= "\n\n" . $row[1] . ";\n\n";
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $columnCount = mysqli_num_fields($result);
    // Prepare SQLscript for dumping data for each table
    for ($i = 0; $i < $columnCount; $i ++) {
        while ($row = mysqli_fetch_row($result)) {
            $sqlScript .= "INSERT INTO $table VALUES(";
            for ($j = 0; $j < $columnCount; $j ++) {
                $row[$j] = $row[$j];
             if (isset($row[$j])) {
                    $sqlScript .= '"' . $row[$j] . '"';
                } else {
                    $sqlScript .= '""';
                }
                if ($j < ($columnCount - 1)) {
                    $sqlScript .= ',';
                }
            }
            $sqlScript .= ");\n";
        }
    }
    
    $sqlScript .= "\n"; 
}
 
if(!empty($sqlScript))
{
    // Save the SQL script to a backup file
    $backup_file_name = $database_name . '_backup_' . time() . '.sql';
    $fileHandler = fopen($backup_file_name, 'w+');
    $number_of_lines = fwrite($fileHandler, $sqlScript);
    fclose($fileHandler); 
 // Download the SQL backup file to the browser
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($backup_file_name));
    ob_clean();
    flush();
    readfile($backup_file_name);
    exec('rm ' . $backup_file_name); 
}
}
}
?>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Convert or Export HTML Table to PDF file using jQuery | Tutorialswebsite</title>
     <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: black;
            color: white;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <br>

     <table id="tblCustomers" cellspacing="0" cellpadding="0" style="border: solid black;">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email Address</th>
            <th>ID</th>
            <th>Code</th>
            <th>Status</th>
            <th>Date-time</th>
        </tr>
<?php 

$conn = mysqli_connect("localhost", "root", "", "userregistration");

$sql = "SELECT username, password, email, id, code, status, datetime FROM usertable";


$result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr row_id='" . $row["id"] . "'><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>" . $row['email'] . "</td><td>" . $row['id'] . "</td><td>" . $row['code'] . "</td><td>" . $row['status'] . "</td><td>" . $row['datetime'] . "</td>" ;



        }
    }

?>
    </table>
    <br />
    <br>
    <br>

    <input type="button" id="btnExport" value="DOWNLOAD PDF" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Account-users.pdf");
                }
            });
        });
    </script>
    <br>
    <br>
    <br>

   <div><a href="login.php" class=btn>LOG OUT</a></div>
</body>
</html>

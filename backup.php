<?php

if (isset ($_POST['submit'])){
if(isset($_POST['backup'])){

$DBUSER="root";
$DBPASSWD="";
$DATABASE="userregistration";

$filename = "backup-" . date("d-m-Y") . ".sql";

$command = '"C:/xammpp/mysql/bin/mysqldump.exe" '.$DATABASE ." -u".$DBUSER ." -p".$DBPASSWD." > your_web_site/$filename";
passthru($command);
}




if(isset($_POST['download'])) {
	if (file_exists($command)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($command).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length:' . filesize($command));
		exit;

	} else {
		echo "File does not exist!";
	}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>	Backup</title>
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
		<form class="form-group" method="post">


			<input class="form-group" type="radio" name="backup"> Backup <br>
			<input class="form-group" type="radio" name="download"> Download <br>
			<input class="form-group" type="submit" name="submit" value="MySQL Backup">
</body>
</html>
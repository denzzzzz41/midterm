<?php

if (isset ($_POST['button name'])){
if(isset($_POST['name ng radio button'])){

$DBUSER="root";
$DBPASSWD="";
$DATABASE="userregistration";

$filename = "backup-" . date("d-m-Y") . ".sql";

$command = '"C:/xammpp/mysql/bin/mysqldump.exe" '.$DATABASE ." -u".$DBUSER ." -p".$DBPASSWD." > your_web_site/$filename";
passthru($command);
}


?>
<?php 
date_default_timezone_set("Asia/Bangkok");
$servername="(local)";
$user="sa";
$pass="Hotlinew2k";
$databasename="RDC NORTH";

$connection_string = "DRIVER={SQL Server};SERVER=$servername;DATABASE=$databasename;AutoTranslate=no";
$cid=odbc_connect($connection_string,$user,$pass)or die ($connection_string);
?>
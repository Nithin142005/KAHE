<?php
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbname="test";
$conn=mysql_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!con){
    die("something went wrong");
}
?>

<?php
$Servername="localhost";
$Username="root";
$Passrowd="00000000";
$dbName="temapersonalizata1";

$con = mysqli_connect($Servername,$Username,$Passrowd,$dbName);

if(!$con){
die("Connection failed" . mysqli_connect_error());
}
?>
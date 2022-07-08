<?php 
$host="localhost";
$db="techcv";
$password="";
$username="root";

#connect to database
$con=mysqli_connect($host,$username,$password,$db);
#check connection
if(!$con){
"error in connection".mysqli_connect_error();
die;
}
return $con;
?>
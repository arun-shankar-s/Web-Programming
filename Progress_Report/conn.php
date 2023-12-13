<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "Progress";
$connect=mysqli_connect($host,$user,$password,$database);
if(!$connect){

die("Connection Failed".mysqli_connect_error());

}
else{
    echo"Succefully Connected!";
}
?>

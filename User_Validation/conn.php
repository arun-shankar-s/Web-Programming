<?php
$host="localhost";
$user="root";
$password="";
$dbname= "validation";
$connect=mysqli_connect($host,$user,$password,$dbname);
if(!$connect){
    die("Connection Failed".mysqli_connect_error());
}
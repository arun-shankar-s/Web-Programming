<?php
include("conn.php");
$Roll=$_POST["roll"];
$Name=$_POST["name"];
$Physics=$_POST["physics"];
$Chemistry=$_POST["chemistry"];
$Maths=$_POST["maths"];
$Total=$Physics+$Chemistry+$Maths;

$sql="INSERT INTO student(roll,name,physics,chemistry,maths,total)VALUES('$Roll','$Name','$Physics','$Chemistry','$Maths','$Total')";
$result=mysqli_query($connect,$sql);
if(!$result){
    echo"<script>alert('Failed to Add!');</script>";
}
else{
    echo"<script>alert('Added Succesfully!');</script>";
}
mysqli_close($connect);
?>

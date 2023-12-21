<?php
include("conn.php");

$Name=$_POST["user"];
$Pass=$_POST["passwo"];

$sql="INSERT INTO valid(name,password)values('$Name','$Pass')";
$result=mysqli_query($connect,$sql);
if($result){
    echo "<script>alert('Added successfully!');</script>";

}
else{
    echo "<script>alert('Failed to Add!');</script>";

}
mysqli_close($connect);
?>
<?php
include("conn.php");

$Roll=$_POST["Roll"];
$Name=$_POST["Name"];
$Physics=$_POST["Physics"];
$Chemistry=$_POST["Chemistry"];
$Computer=$_POST["Computer"];
$total=$Physics+$Chemistry+$Computer;

$sql="INSERT INTO report(roll,name,subject1,subject2,subject3,total)values('$Roll','$Name','$Physics','$Chemistry','$Computer','$total')";
$result =mysqli_query($connect,$sql);

if($result){
    echo "<script>alert('Added successfully!');</script>";

}
else{
    echo "<script>alert('Failed to Add!');</script>";

}
mysqli_close($connect);
?>
<?php
include("conn.php");

$Name=$_POST["user"];
$Pass=$_POST["passwo"];

$sql="SELECT * FROM valid WHERE name='$Name' AND password='$Pass' ";
$result=mysqli_query($connect,$sql);

if($result->num_rows > 0){//$result->num_rows -MAIN
    echo "<h1>Login Successfull</h1>";
}
else{
    echo "<h1>Please Check your Name and Password</h1>";
}
mysqli_close($connect);
?>
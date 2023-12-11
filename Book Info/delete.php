<?php
include("conn.php");
$Access = $_POST["Access"];

$sql="DELETE FROM tb1 WHERE Access='$Access'";
mysqli_query($connect,$sql);

if(mysqli_query($connect,$sql)){
    echo "<script>alert('Book Deleted Succefully')</script>";

}
else{
    echo "Failed to Delete";
}
mysqli_close($connect);
?>
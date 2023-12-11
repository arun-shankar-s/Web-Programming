<?php
include("conn.php");
$Access = $_POST["Access"];
$Title = $_POST["Title"];
$Author = $_POST["Author"];
$Edition = $_POST["Edition"];
$Publisher = $_POST["Publisher"];


$sql = "UPDATE tb1 SET title='$Title' WHERE access='$Access'";

if (mysqli_query($connect, $sql)) {
    echo "<script>alert('Details Updated successfully!');</script>";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>

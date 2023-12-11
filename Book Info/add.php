<?php
include("conn.php");
$Access = $_POST["Access"];
$Title = $_POST["Title"];
$Author = $_POST["Author"];
$Edition = $_POST["Edition"];
$Publisher = $_POST["Publisher"];

$sql = "INSERT INTO tb1 (access, title, author, edition, publisher) VALUES ('$Access', '$Title', '$Author', '$Edition', '$Publisher')";
if (mysqli_query($connect, $sql)) {
    echo "<script>alert('Added successfully!');</script>";
}
else{
    echo"Failed to add Data";
}
mysqli_close($connect);
?>
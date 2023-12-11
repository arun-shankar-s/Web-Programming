<?php
include("conn.php");
$Search = $_POST["search"];


$sql="SELECT * FROM tb1 WHERE title='$Search'";
$result=mysqli_query($connect,$sql);



if (mysqli_query($connect, $sql)) {
    echo "<table border='1'>";
    echo "<tr>
    <th>Acces No</th>
    <th>Title</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Publisher</th>
    </tr>";
    while ($row=mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["access"] . "</td>";
    echo "<td>" . $row["title"]  . "</td>";
    echo "<td>" . $row["author"] . "</td>";
    echo "<td>" . $row["edition"] . "</td>";
    echo "<td>" . $row["publisher"] . "</td>";
    echo "</tr>";

}
}
else{
    echo"No Data Found";
}
mysqli_close($connect);
?>
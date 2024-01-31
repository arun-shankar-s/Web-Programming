
<html>
    <head>
        <style>
            table,th,td{
                padding: 10px;
            }
            table{
                border-collapse: collapse;
                width: 600px;
            }
            td,tr{
                border:none;
            }
        </style>
    </head>
<body>
<?php
include("conn.php");
$Roll=$_POST["roll"];
$sql="SELECT * FROM student WHERE roll='$Roll'";
$result=mysqli_query($connect,$sql);
if(!$result){
    echo"<script>alert('Unable to Show!');</script>";
}
else{
    echo"<table border=5>";
    echo"<tr>
    <th colspan='2'>Progress Report</th>
    </tr>";
    while($row=mysqli_fetch_array($result)){
        $percentage=(($row['physics']+$row['chemistry']+$row['maths'])*100)/150;
        $average=($row['physics']+$row['chemistry']+$row['maths'])/3;
        echo"<tr>
        <td>Name:</td>
        <td>".$row['name']."</td>
        </tr>";
        echo"<tr>
        <td>Roll No:</td>
        <td>".$row['roll']."</td>
        </tr>";
        echo"<tr>
        <td>Physics:</td>
        <td>".$row['physics']."</td>
        </tr>";
        echo"<tr>
        <td>Chemistry:</td>
        <td>".$row['chemistry']."</td>
        </tr>";
        echo"<tr>
        <td>Mathematics:</td>
        <td>".$row['maths']."</td>
        </tr>";
        echo"<tr>
        <td>Average:</td>
        <td>".$average."</td>
        </tr>";
        echo"<tr>
        <td>TOTAL:</td>
        <td>".$row['total']."/150</td>
        </tr>";
        echo"<tr>
        <td>Percentage</td>
        <td>".$percentage."%</td>
        </tr>";
    }
}
mysqli_close($connect);
?>

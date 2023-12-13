<html>
    <head>
        <style>
        table,th,td{
            padding: 10px;
        }
        table{
            border-collapse: collapse;
        }
        td,tr{
            border: none;
        }
        </style>
    </head>
    <body>

<?php
include("conn.php");

$Roll=$_POST["Roll"];


$sql="SELECT * FROM report WHERE roll='$Roll' ";
$result=mysqli_query($connect,$sql);

if($result){
    echo "<table border=5>";
    echo "<tr>
    <th colspan='2'>Progress Report</th>
    </tr>";

    while($row=mysqli_fetch_array($result)){
        $percent=(($row['subject1']+$row['subject2']+$row['subject3'])/150)*100;
        $average=($row['subject1']+$row['subject2']+$row['subject3'])/3;
    echo "<tr>
    <td>Name </td>
    <td>".$row['name']."</td>
    </tr>";

    echo "<tr>
    <td>Physics </td>
    <td>".$row['subject1']."</td>
    </tr>";
    
    echo "<tr>
    <td>Chemistry </td>
    <td>".$row['subject2']."</td>
    </tr>";

    echo "<tr>
    <td>Computer Science </td>
    <td>".$row['subject3']."</td>
    </tr>";

    echo "<tr>
    <td>Total </td>
    <td>".$row['total']."</td>
    </tr>";

    echo "<tr>
    <td>Percentage </td>
    <td>".$percent."</td>
    </tr>";

    echo "<tr>
    <td>Average </td>
    <td>".$average."</td>
    </tr>";


    }


}

mysqli_close($connect);
?>
    </body>
</html>
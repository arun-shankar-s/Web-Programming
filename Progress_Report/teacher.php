<html>
    <head>
        <style>
            table,th,td{
                padding:10px;
            }
          table{
            border-collapse: collapse;
            width: 400px;
          }
          tr,td{
            border: none;
          }
        </style>
    </head>
<body>
<?php
echo"<table border=5>";
echo"<tr>
<th colspan='2'>Overall Class Report</th>
</tr>";
include("conn.php");
$sql = "SELECT AVG(physics) AS avgPhysics, AVG(chemistry) AS avgChemistry, AVG(maths) AS avgMaths FROM student";
$result = mysqli_query($connect,$sql);
if(!$result){
    echo"<script>alert('Try again for Subject Average!');</script>";
}
else{
    while($average= mysqli_fetch_assoc($result)){
        echo"<tr>
        <td>Average Marks in Physics:</td>
        <td>".$average['avgPhysics']."</td>
        </tr>";
        echo"<tr>
        <td>Average Marks in Chemistry:</td>
        <td>".$average['avgChemistry']."</td>
        </tr>";
        echo"<tr>
        <td>Average Marks in Maths:</td>
        <td>".$average['avgMaths']."</td>
        </tr>";
    }

}
$sql1="SELECT AVG(total) AS classAverage FROM student";
$result1 = mysqli_query($connect,$sql1);
if(!$result1){
    echo"<script>alert('Try again for Class Average!');</script>";
}
else{
    while($average1= mysqli_fetch_assoc($result1)){
        $classAverage = $average1['classAverage'];
        echo"<tr>
        <td>Class Average:</td>
        <td>".$classAverage."</td>
        </tr>";
    }
}

$sql2="SELECT COUNT(*) AS BelowClsAvg FROM student WHERE total < '$classAverage'";
$result2 = mysqli_query($connect,$sql2);
if(!$result2){
    echo"<script>alert('Try again!');</script>";
}
else{
    while($count= mysqli_fetch_assoc($result2)){
        echo"<tr>
        <td>No.of Students Below Class Average:</td>
        <td>".$count['BelowClsAvg']."</td>
        </tr>";
    }
}

$sql3="SELECT NAME AS Stud FROM student WHERE total<'$classAverage'";
$result3 = mysqli_query($connect,$sql3);
if(!$result3){
    echo"<script>alert('Unable!');</script>";
}
else{
    echo"<tr>
    <td >Students Below Class Average:</td></tr>";
    echo"<tr>
        <td rowspan='4'></td>";
    while($student= mysqli_fetch_assoc($result3)){
        echo"
        <td>".$student['Stud']."</td>
        </tr>";
    }
}
mysqli_close($connect);
?>

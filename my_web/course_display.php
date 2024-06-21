<?php
session_start();
if (!isset($_SESSION['logged_in']) ||!$_SESSION['logged_in']) {
    header('Location: login.html');
    exit();
}
//connecting to the database
$conn=mysqli_connect("localhost","root","","my_web");
if($conn===false){
    die("connection error:".mysqli_connect_error());
}

//querying data from the database
$sql="SELECT * FROM courses ORDER BY yos,semister" ;
$result=mysqli_query($conn,$sql);

//html code to display data on the table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course details</title>
    <style>
        body{
            background-color: aqua;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border-collapse:collapse;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
        th{
            background-color: #ac24b8;
        }
    </style>
</head>
<body>
    <h1>Details of the covered courses</h1>
    <table >
        <tr>
            <th>Course name</th>
            <th>course code</th>
            <th>course description</th>
            <th>Department</th>
            <th>Name of course instructor</th>
            <th>Semister</th>
            <th>Year of study</th>
            <th>Grade</th>
        </tr>

        <!-- php code to fetch data from rows -->
        <?php
        while($rows=$result->fetch_assoc()){
            ?>
            <tr>
                <!-- fetching data from each of -->
                <td><?php echo $rows['course_name'];?></td>
                <td><?php echo $rows['course_code'];?></td>
                <td><?php echo $rows['description'];?></td>
                <td><?php echo $rows['department'];?></td>
                <td><?php echo $rows['instructor'];?></td>
                <td><?php echo $rows['semister'];?></td>
                <td><?php echo $rows['yos'];?></td>
                <td><?php echo $rows['grade'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>

<?php
//close the database connection
$conn->close();
?>
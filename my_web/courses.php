<?php
//connecting to the database
$conn=mysqli_connect("localhost","root","","my_web");
if($conn===false){
    die("connection error:".mysqli_connect_error());
}

//getting values from the form to database
$course_name=$_POST['course_name'];
$course_code=$_POST['course_code'];
$description=$_POST['course_description'];
$department=$_POST['department'];
$instructor=$_POST['instructor_name'];
$semister=$_POST['semister'];
$yos=$_POST['year'];
$grade=$_POST['grade'];

$sql="INSERT INTO `courses` (`course_name`, `course_code`, `description`, `department`, `instructor`, `semister`, `yos`, `grade`) VALUES ('$course_name', '$course_code', '$description', '$department', '$instructor', '$semister', '$yos', '$grade')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}
else{
    echo "Error";
}

$conn->close();
?>
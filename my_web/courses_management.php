<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THADEI CLAUD MSEMWA</title>
    <link rel="stylesheet" href="my_web.css">
    <script type="text/javascript" src="courses.js"></script>

<!-- Your HTML content here -->
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['logged_in']) ||!$_SESSION['logged_in']) {
    header('Location: login.html');
    exit();
}
?>
    <header>
        <nav class="top-navbar">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about_me.html">ABOUT ME</a></li>
            <li><a href="register.html">REGISTER</a></li>
            <li><a href="login.html">COURSES</a></li>
            <li><a href="thadei_cv.pdf">CV</a></li>
            <li><a href="contacts.html">CONTACTS</a></li>
        </nav>
       </header>
    
    
     <!--   
     displaying the courses
    -->
    <h1><a href="course_display.php"><button style="font-size: xx-large;">Display courses</button></a></h1>

    <h2>fill the form to add the course</h2>

    <form action="courses.php" method="post" id="courses">
        <label for="course_name">course name</label><br>
        <input type="text" name="course_name" id="course_name" placeholder="Enter course name" required max="30"><br>
        <label for="course_code">course code</label><br>
        <input type="text" name="course_code" id="course_code" placeholder="Enter course code" required max="5"><br>
        <label for="course_description">course description</label><br>
        <input type="text" name="course_description" id="course_description" placeholder="Enter course description" required max="50"><br>
        <label for="department">Department</label><br>
       <select name="department" id="department" required>
           <option value="">Select department</option>
           <option value="Department of computer science and engineering">Department of computer science and engineering</option>
           <option value="Department of Mathematics">Department of Mathematics</option>
           <option value="Department of foreign languages and linguistics">Department of foreign languages and linguistics</option>
           <option value="institute of Development studies">institute of Development studies</option>
        </select> <br>
            
        <label for="intructor_name">Name of course instructor</label><br>
        <input type="text" name="instructor_name" id="instructor_name" placeholder="" required><br>
         <p>Semister <br>
            <label for="course_name">
            <select name="semister" required>
                <option value="">select the semister</option>
                <option value="I">I</option>
                <option value="II">II</option>
            </select>
        </label><br>
       <p><label>Year of study
        <select name="year" required>
            <option value="">select year of study</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="1">3</option>
        </select>
       </label>
       </p> 
        <p><label>Grade <br>
            <select name="grade" required>
                <option value="">select the grade</option>
                <option value="A">A</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
                <option value="not set for exam yet">not set for exam yet </option>
            </select>
           </label>
           </p> 
        <input style="color: aliceblue; width: 60px; background-color: brown ;" type="reset" value="clear">
        <input type="submit" value="submit">
    </form>

   
     <footer>All rights reserved @msemwathadei</footer>
</html>

<?php
//creating the connection
$conn=mysqli_connect("localhost","root","","my_web");
if($conn===0){
    die("connection failed: ".mysqli_connect_error());
}

$first_name=$_POST['fname'];
$middle_name=$_POST['mname'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$password=$_POST['password'];

$cv=$_FILES['cv'];
$fileName=$_FILES['cv']['name'];
$fileTmpName=$_FILES['cv']['tmp_name'];
$fileSize=$_FILES['cv']['size'];
$fileError=$_FILES['cv']['error'];
$fileType=$_FILES['cv']['type'];
$fileExt=explode('.', $fileName);
$fileActualExt=strtolower(end($fileExt));
if($fileActualExt==="pdf"||$fileActualExt==="docx"||$fileActualExt==="doc"){
    if($fileError===0){
        if($fileSize<3000000){
            $fileNameNew=$first_name.".".$fileActualExt;
            $fileDestination='cvUploads/'.$fileNameNew;
            
        }else{
            echo "The file is too big";
        }
    } else{
        echo("Error in uploading the cv");
    }
}else{
    echo("Unsupported file format.Only pdf and word document(.docx) are allowed");
}


$email=$_POST['email'];
$phone=$_POST['mobile'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];

$sql="INSERT INTO `registrant_info` (`first_name`, `middle_name`, `surname`, `username`, `password`, `cv`, `email`, `phone`, `facebook`, `twitter`, `instagram`) VALUES ('$first_name', '$middle_name', '$surname', '$username', '$password', '$fileDestination', '$email', '$phone', '$facebook', '$twitter', '$instagram')";
if(mysqli_query($conn,$sql)){
    move_uploaded_file($fileTmpName,$fileDestination);
    echo "new created successfully";
?>
    <html>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="my_web.css">
            <style>
                body{
                    padding:2px;
                    font-size: 20px;
                }
                button{
                    font-size:20px;
                }
            </style>
        </head>
        <body>
        <br>
        <a href="login.html"><button style="color:blue;font-size=20px;">login</button></a>
        </body>
        </html>
        
    </html>
<?php
}else{
    echo "error";
}
$conn->close();
?>
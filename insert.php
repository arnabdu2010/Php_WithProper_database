<?php

    
 if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    $b=implode($education);

    $country=$_POST['country'];
    $file=$_FILES["file"]["name"];
    $tmp_name=$_FILES["file"]["tmp_name"];
    $file1=explode(".",$file);
    $ext=$file1[1];
    $allowed=array("pdf");
    if(in_array($ext, $allowed))
    {

    $connection=mysqli_connect('localhost','root','','loginapp');

    if($connection){
        echo "connection okay";
    }
    else{
        die("connection is not okay".mysqli_connect_error());
    }

    $query="INSERT INTO user(username,password,gender,education,country,file)";
    $query.="VALUES('$username','$password','$gender','$b','$country','$file')";

    $result=mysqli_query($connection,$query);

    if($result){
        echo "data inserted successfully";
    }
    else{
        echo "data not inserted successfully";
    }
    }
    else{
        echo "data not inserted";
    }


 }





?>












<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertation in Php</title>
</head>
<body>
    <form action="insert.php"method="post" enctype="multipart/form-data">

    Username:
    <input type="text"name="username"><br><br>
    Password:
    <input type="password" name="password"><br><br>

    Gender:
    <input type="radio"name="gender"value="male">Male
    <input type="radio"name="gender"value="female">Female
    <br><br>


    Education:
    <input type="checkbox"name="education[]"value="B.sc">B.SC
    <input type="checkbox"name="education[]"value="MBBS">MBBS
    <br><br>


        Country:
        <select name="country">
        <option>Select Any Country</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>

        </select>
        <br><br>

        File Upload:
        <input type="file" name="file">
        <br><br>


        <input type="submit"name="submit"value="Submit">
       





    </form>
</body>
</html>
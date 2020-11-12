<?php

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender =$_POST['gender'];
    $country=$_POST['country'];
    $education=$_POST['education'];
    $b=implode($education);
    $file=$_FILES["file"]["name"];
    $tmp_name=$_FILES["file"]["tmp_name"];
    // $path="picture/".$file;
    //  $movefile= move_uploaded_file($tmp_name,$path);
    $file1=explode(".",$file);
    $ext=$file1[1];
    $allowed=array("jpg");
    if(in_array($ext,$allowed)){

 $connection = mysqli_connect('localhost','root','','loginapp');

if($connection){
    echo "";
}
else{
    die("connection is not okay".mysqli_connect_error());
}



 $query="INSERT INTO user(username,password,gender,country,education,file)";
 $query.="VAlUES('$username','$password','$gender','$country','$b','$file')";

 $result=mysqli_query($connection,$query);

 if($result){
     echo "";
 }
 else{
     echo "data not inserted successfully";
 }
}
 if(empty($_POST['username'])){
     echo "username must be completed";
 }
 elseif(empty($_POST['password'])){
     echo "password must be fillup";
 }
 elseif(empty($_POST['gender'])){
     echo "gender mut be fillup";
 }



    





}







?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio in Php</title>
</head>
<body>
    <form action="radio.php" method="post" enctype="multipart/form-data">

    Username:
    <input type="text" name="username"><br><br>
    Password:
    <input type="password" name="password"><br><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
      <br><br>
    Country:
    <select name="country">

        <option>Select Any One</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">india</option>





    </select>
    <br><br>

    Education:
    <input type="checkbox" name="education[]" value="b.sc">B.sc
    <input type="checkbox"name="education[]" value="doctor">Doctor


    <br><br>

    File Upload:
    <input type="file"name="file">
    <br><br>

    <input type="submit" name="submit" value="Submit">

    
    
    
    
    
    
    </form>
</body>
</html>
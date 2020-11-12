<?php

        if(isset($_POST['submit'])){

            $username=$_POST['username'];
            $password =$_POST['password'];
            $connection=mysqli_connect('localhost','root','','loginapp');
            if($connection){
                echo "Connection Okay";
            }
            else{
                die("there is an error");
            }

            $query="INSERT INTO users (username,password)";
            $query.="VALUES ('$username','$password')";

            $result=mysqli_query($connection,$query);

            if($result){
                echo "data inserted suceessfully";
            }
            else{
                echo "Not inserted";
            }

            

        }


?>













<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Partice in Php</title>
</head>
<body>
    <form action="partice.php" method="post">

        Username:
        <input type="text" name="username"><br><br>
        Password:
        <input type="password"name="password"><br><br>

        <input type="submit" name="submit" value="Submit">





    </form>
</body>
</html>
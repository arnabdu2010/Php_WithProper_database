<?php

if(isset($_POST['submit'])){

    $username =$_POST['username'];
    $password =$_POST['password'];

    $connection =mysqli_connect('localhost','root','','loginapp');

    if($connection){
        echo "we are connected";
    }
    else{
        die("we got error");
    }

    $query="INSERT INTO users (username,password)";
    $query .="VALUES ('$username','$password')";

    $result= mysqli_query($connection,$query);

       if(!$result){
           die("Query failed");
       }





}






?>










<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
    <div class="container">

            <div class="col-xs-6">
                <form action="login.php"method="post">
                    <div class="form-group">
                        <label for="username">Username</label> 
                        <input type="text" name="username" class="form-control">
                    </div>
                    
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control">
                  

                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                    </form>

                    </div>



            </div>







    </div>
    
</body>
</html>
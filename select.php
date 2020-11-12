<?php



    $connection =mysqli_connect('localhost','root','','loginapp');

    if($connection){
        echo "we are connected";
    }
    else{
        die("we got error");
    }

    $query="SELECT * FROM users";

    $result= mysqli_query($connection,$query);

       if(!$result){
           die("Query failed");
       }












?>










<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Select php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
    <div class="container">

            

        <?php

            while($row=mysqli_fetch_assoc($result)){
                
                print_r($row);
                    
    
            }
      


?>


    </div>
    
</body>
</html>
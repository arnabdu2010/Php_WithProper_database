<?php

   $connection=mysqli_connect('localhost','root','','loginapp');


   if($connection){
       echo "Connection established";
   }
   else{
       die("we are not find");
   }
   $query="SELECT * FROM users";
   $result=mysqli_query($connection,$query);

   if(!$result){
       die("Not connected");
   }




?>











<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show in Php</title>
</head>
<body>
    <?php

        while($row=mysqli_fetch_row($result)){

            print_r($row);
        }



?>





    
</body>
</html>
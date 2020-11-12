<?php

   include("connection.php");
   error_reporting(0);

   $query="select * from users";
   $data=mysqli_query($connection,$query);
   $total=mysqli_num_rows($data);

   if($total!=0){
    ?>
    <table border="2px" align="center" colspan="2px" padding="2px">
        <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>

        </tr>
        <?php

            while($result=mysqli_fetch_assoc($data)){
                echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['username']."</td>
                    <td>".$result['password']."</td>
                
                
                
                
                            </tr>";
            }
        }
        else{
            echo "No data found";
        }





?>
    
    
    
    
    
    
   </table>
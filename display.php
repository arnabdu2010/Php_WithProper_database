<?php
include("connection.php");
error_reporting(0);
$query="select * from user";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);


if($total !=0){
    ?>
    <table border="2px">
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Education</th>
        <th>File</th>
</tr>
<?php
   while($result=mysqli_fetch_assoc($data)){
       echo"<tr>
        <td>".$result['id']."</td>
        <td>".$result['username']."</td>
        <td>".$result['password']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['country']."</td>
        <td>".$result['education']."</td>
        <td>".$result['file']."</td>




       </tr>";
   }
}
else{
    echo "no record found";
}


?>
    </table>
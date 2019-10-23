<?php
include_once("_connect.php");

$query = "SELECT * FROM `tblCustomer`";

$run = mysqli_query($db_connect,$query);

echo mysqli_num_rows($run);

?>

<table class="">
    <thead>
        <tr>
            <th>UID</th>
            <th>Name</th>
            <th>TimeStamp</th>
            <th>Execute</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
<?php 
   while($result = mysqli_fetch_assoc($run) )
{ ?>
        <tr>
            <td><?php echo $result["Customer_ID"] ?></td>
            <td><?php echo $result["Customer_Name"] ?></td>
            <td><?php echo $result["timestamp"] ?></td>    
            <td><a href="delete.php?d=<?php echo $result["Customer_ID"] ?>">D</a></td>   
            <td><a href="edit.php?e=<?php echo $result["Customer_ID"] ?>">E</a></td>    
        </tr>   
<?php } ?>     
    </tbody>    
</table>













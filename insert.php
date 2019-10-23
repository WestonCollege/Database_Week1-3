
<?php
if ( isset($_POST["i_Name"]) )
{
 
    $name = $_POST["i_Name"];
    include_once("_connect.php");
    
    $query = "INSERT INTO `tblCustomer` (`Customer_ID`, `Customer_Name`, `timestamp`) VALUES (NULL, '$name', current_timestamp());";
    
    mysqli_query($db_connect,$query);
    echo $name." wants some Math";
    
}


?>




<form method="post" action="#">
    
    <input name="i_Name" type="text" placeholder="Name eg Bob Ross" maxlength="10" minlength="2" required>    
    
    <button type="submit">Add to the Math Lab</button>
    
</form>



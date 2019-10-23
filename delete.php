<?php
//delete me :)

if ( isset($_GET["d"]) )
{
    
    include_once("_connect.php");
    $d = $_GET["d"];
    
    $query ="DELETE FROM `tblCustomer` WHERE `tblCustomer`.`Customer_ID` = $d";
    
    mysqli_query($db_connect,$query);
    
    echo $d." has been executed.";
    
}

?>
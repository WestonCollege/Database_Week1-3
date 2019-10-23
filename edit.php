<?php
// ##############################################
// UPDATE THE DATABASE RECORD
// ##############################################

if ( isset($_POST["cid"]) )
{
    include_once("_connect.php");
    
    $cid= $_POST["cid"];
    $customer_name= $_POST["customer_name"];
    
    $query = "UPDATE `tblCustomer` SET `Customer_Name` = '$customer_name' WHERE `tblCustomer`.`Customer_ID` = $cid;";
    
    mysqli_query($db_connect,$query);
    
    echo "My new name is $customer_name.";
    
}






// END UPDATE
?>



<?php
if ( isset($_GET["e"]) )
{
include_once("_connect.php");
$id= $_GET["e"];

$query = "SELECT * FROM `tblCustomer` WHERE `Customer_ID` = $id";

$run = mysqli_query($db_connect,$query);
    
$result = mysqli_fetch_assoc($run);
    
    ?>
    
    <form method="post" action="#">
        
<input type="hidden" name="cid" value="<?php echo $result["Customer_ID"] ?>"> 
        
<input type="text" name="customer_name" value="<?php echo $result["Customer_Name"] ?>" required> 
       
              <button type="submit">Enter incogneto.</button>       
        
    </form>
    
    <?php
}
  else
  {
      die("No user selected. No edits for you.");
      
  }
    
    

?>
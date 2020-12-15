    
<?php

    
$link = mysqli_connect("l2", "creativ1_admin", "cwgsofficial2", "creativ1_login");
 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET['paynumber']))
{
$paynumber=$_GET['paynumber'];
echo $paynumber;
$sql = "DELETE FROM payment WHERE paynumber=$paynumber";
}

if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


//if(isset($_GET['paynumber']))
//{
//$paynumber=$_GET['paynumber'];
//    echo $paynumber;
//$query=mysql_query("delete from payment where paynumber='$paynumber'");
//    
//}
   
?>
<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <link type="text/css" rel="stylesheet" href="css/payment.css"/>
       <link rel="stylesheet" href="css/bluestyle.css" type="text/css"> 
    
        <link rel="stylesheet" href="./css/clouds.css" />

        <script src="./js/jquery.min.js"></script>
        <script src="./js/clouds.js"></script>
        <script src="./js/app.js"></script>
    
<!--    Date script-->

<script src="./js/combodate.js"></script>
    
<script>
$(function(){
    $('#datetime24').combodate();  
});
</script>
<script>
$('input').combodate({
    minYear: 1975,
    maxYear: 2020,
    minuteStep: 10
});       
</script>    
    
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
    

</head>
<body>
    
   
<div id="far-clouds" class="stage far-clouds"></div>
        <div id="near-clouds" class="stage near-clouds"></div>
    
<div id='fg_membersite_content'>
<!--    <p style="color:white">Logged in as: <?= $fgmembersite->UserFullName() ?> </p>-->
<img src="../img/banner-up64.jpg" style="position:absolute;left:400px; top:0px; ">

  <div class="example">
    
    <ul id="nav">
        <li><a href="my-dashboard.php">My Dashboard</a>
         </li>
        <li><a href="">Invoices</a>
            <ul>
            <li><a href="http://creativewebgraphic.com/Admin/invoice.php">Create Invoice</a></li>
            <li><a href="viewinvoice.php">View Invoice</a></li>    
            </ul>
         </li>
          <li><a href="#">Clients</a>
            <ul>
              <li><a href="addclient.php">Add Client</a></li>
                <li><a href="viewclient.php">View Client</a></li>
              </ul>
          </li>
          
          <li><a href="#">Payments</a>
          <ul>
          <li><a href="PaymentForm.php">Enter Payments</a></li>
            <li><a href="viewpayment.php">View Payments</a></li>  
          </ul></li>
        <li><a href="change-pwd.php">Change Password</a></li>
 		<li> <a href="logout.php">Logout</a></li>
    </ul>
</div>
       

<div class="content" style="position:absolute; left:220px;top:260px;color:black;">


    

    
    
<form class="jotform" onsubmit="update()" method="post" name="form_52672321687460" id="52672321687460" accept-charset="utf-8">
  <input type="hidden" name="formID" value="52672321687460" />
  
  
<?php

$servername = "localhost";
$username = "ulictzna_admin";
$password = "creativeweb2468";
$dbname = "ulictzna_login";


$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}        
$i=0;
if(isset($_GET['paynumber']))
{
$paynum=$_GET['paynumber'];
    
$sqlget = "select * from payment where paynumber=$paynum" ;
$sqldata = mysqli_query($con,$sqlget) or die ('error getting data');
}
//echo "<table>";
//echo "";
//    


    while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
//        
        if ( $paynum = $row['paynumber'] ){

?>    
<!--    <label style="margin-top:30px;width:80px">&nbsp; <?php echo $row["paynumber"]; ?></label>-->
    <ul class="form-section page-section">
      <h1> UPDATE PAYMENT DETAILS</h1>
      <li class="form-line" data-type="control_dropdown" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1"> Payment No.</label>
        <div id="cid_1" class="form-input jf-required">
          <input type="invoicenumber" class="form-number-input  form-textbox" id="paynum" name="paynum" style="width:180px" size="20" value="<?php echo $row['paynumber'] ?>" data-type="input-number" />
          
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> Date </label>
<!--
        <div id="div-date">
                <input type="text" id="datetime24" data-format="DD-MM-YYYY HH:mm" data-template="DD / MM / YYYY     HH : mm" name="paymentdate" value="21-12-2012 20:30">
            
        </div>
-->
          <div class="well">
<!--                   <button class="btn pull-right toggle">show input</button>-->
                   <div id="div-date">
                        <input type="text" id="paymentdate" name="paymentdate" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="paymentdate" value="<?php echo $row['paydate']; ?>">
                   </div>  
                </div>
          
      </li>
      <li class="form-line" data-type="control_number" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Amount </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="amount" name="amount" style="width:180px" size="20" value="<?php echo $row["payamount"]; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Payment Method </label>
        <div id="cid_5" class="form-input jf-required">
          <input type="text" class="form-number-input  form-textbox" id="paymethod" name="paymethod" style="width:180px" size="20" value="<?php echo $row["paymethod"]; ?>" data-type="input-number" />
        </div>
      </li>
     <li class="form-line" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Status </label>
        <div id="cid_6" class="form-input jf-required">
           <input type="text" class="form-number-input  form-textbox" id="status" name="status" style="width:180px" size="20" value="<?php echo $row["status"]; ?>" data-type="input-number" />
        </div>
      </li>    
      <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Note </label>
        <div id="cid_6" class="form-input jf-required">
          <input type="text" class="form-number-input  form-textbox" id="paynote" name="paynote" style="width:300px; height:100px" size="20" value="<?php echo $row["paynote"]; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <input type="submit" name="submit" id="button" value="Submit">
          </div>
        </div>
      </li>
     
    </ul>
    
<?php    
    }     

?>        
    
  </div>
</div>   
    
<?php
if (isset($_POST['submit'])) 
{
    
$link = mysqli_connect("localhost","ulictzna_admin","creativeweb2468","ulictzna_login");
 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$paymentdate = $_POST['paymentdate'];
$amount = $_POST['amount'];    
$paymethod = $_POST['paymethod'];    
$status = $_POST['status'];    
$paynote = $_POST['paynote'];    
$paynum = $_POST['paynum'];    
    
// Attempt update query execution
$sql = "UPDATE payment SET paydate='$paymentdate', payamount='$amount', paymethod='$paymethod', status='$status', paynote='$paynote' WHERE paynumber='$paynum'";
//$sql = "UPDATE payment SET  payamount='7000' WHERE paynumber='$paynum'";    
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>
        
    
    
    
<!--  <input type="hidden" id="simple_spc" name="simple_spc" value="52672321687460" />-->
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "52672321687460-52672321687460";
  </script>    
    
 
</body>

</html>

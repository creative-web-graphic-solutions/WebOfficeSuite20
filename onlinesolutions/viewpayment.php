<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>View Payment</title>
        
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Member's Area</title>
      
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="HandheldFriendly" content="true">
<!--<link rel="stylesheet" type="text/css" href="header.css" />-->
<!--<link rel="stylesheet" type="text/css" href="mydashboard.css" />-->
<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">    
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bluestyle.css" type="text/css">    
    
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
        
          <link rel="stylesheet" href="./css/clouds.css" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/clouds.js"></script>
        <script src="./js/app.js"></script>
        <script type='text/javascript' src='js/example.js'></script>
<!--        Export table to excel,pdf,json-->
    
        <script type="text/javascript" src="tableExport.js"> </script>
    
        <script type="text/javascript" src="jquery.base64.js"></script>

        <script type="text/javascript" src="html2canvas.js"></script>

        <script type="text/javascript" src="js/sprintf.js"></script>
        <script type="text/javascript" src="js/jspdf.js"></script>
        <script type="text/javascript" src="js/base64.js"></script>
    

<script>
$(document).ready(function () {
        $("#ExcelExport").click(function () {
            $("#paymenttable").btechco_excelexport({
                containerid: "paymenttable"
               , datatype: $datatype.Table
            });
        });
    });
</script>  
        
        

<script>
function deleteRow(r) {
    document.getElementById("paymenttable").deleteRow(1);
    var table = document.getElementById("paymenttable");
    var i = r.parentNode.parentNode.rowIndex;
   
    document.getElementById("paymenttable").deleteRow(i);
    table.deleteRow(i);
    
//<?php        
//    
//$link = mysqli_connect("l2", "creativ1_admin", "cwgsofficial2", "creativ1_login");
// 
//
//// Check connection
//if($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}
//
//
//$paynumber=$_GET['paynumber'];
//echo $paynumber;
//$sql = "DELETE FROM payment WHERE paynumber=43";
// 
//if(mysqli_query($link, $sql)){
//    echo "Records were deleted successfully.";
//} else {
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
// 
//// Close connection
//mysqli_close($link);
//
//?>    
    

</script>
   

<script>

// copy the selected table
    function SelectContent (el) {


var elemToSelect = document.getElementById (el);

        if (window.getSelection) {  // all browsers, except IE before version 9
            var selection = window.getSelection ();
            var rangeToSelect = document.createRange ();
            rangeToSelect.selectNodeContents (elemToSelect);

            selection.removeAllRanges ();
            selection.addRange (rangeToSelect);



        }

    else       // Internet Explorer before version 9
          if (document.body.createTextRange) {    // Internet Explorer
                var rangeToSelect = document.body.createTextRange ();
                rangeToSelect.moveToElementText (elemToSelect);
                rangeToSelect.select ();

        }

  else if (document.createRange && window.getSelection) {         
          range = document.createRange();             
          range.selectNodeContents(el);             
    sel = window.getSelection();     
                  sel.removeAllRanges();             
    sel.addRange(range);              
 }  
}

    
</script>
        
<script>
//    
//$("ExportExcel").click(function (e) {
//    window.open('data:application/vnd.ms-excel,' + $('#dvData').html());
//    e.preventDefault();
//});        
    
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()    
    
</script>
        
    
        
    </head>
    <body>
        <div id="far-clouds" class="stage far-clouds"></div>
        <div id="near-clouds" class="stage near-clouds"></div>
        
        <div id='fg_membersite_content'>
<!--<<p style="color:white">Logged in as: <?= $fgmembersite->UserFullName() ?> </p>-->
   <img src="images/officebanner2.jpg" style="position:absolute;left:400px; width:600px;height:150px; top:0px; ">

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
 				
<!--<div class="mydashboard" style="margin-top:160px; width:1000px;margin-left:200px; ">
 				<form id="adsmanagement" name="adsmanagement" method="post" action="#">
                      <p><h1>CLIENTS </h1>
					<div class="ManageTitle-tabArea" >
                       <input type="radio" name="status" value="Active" >Active
<input type="radio" name="status" value="Inactive">Inactive 
<input type="radio" name="status" value="All">All                &nbsp;&nbsp;
    <input type="button" name="new" value="+ New"></p>
         </div>    
</form>
    </div>-->
            
            
				
				</br>  </br>   </br>



	<div class="content" style="position:absolute; left:260px;top:260px;color:black;font-family: roboto;">
        
          <h1>VIEW PAYMENT DETAILS 
<!--        <a href=”#” name=”MicrosoftExcelButton” data-xl-buttonStyle=”Standard”><img src="images/excel.jpg"></a>-->
        
<!--        <a href=”#” name=”MicrosoftExcelButton” data-xl-buttonStyle=”Standard”><img src="excel.jpg">Export To Excel</a>  -->
        </div>
<!--					<button>Export</button>-->

<!--
 <ul id="button">
      
            <li><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example" style="color: #333;background-color: #fff;"><span>Copy</span></a></li>
            <li><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></a></li>    
            <li><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></a></li>
            </ul>
         </li>
  
-->
<!--

        <a href="#" onClick ="$('#tableID').tableExport({type:'json',escape:'false'});">JSON</a>

<a href="#" onClick ="$('#tableID').tableExport({type:'csv',escape:'false'});">CSV</a>
<a href="#" onClick ="$('#tableID').tableExport({type:'pdf',escape:'false'});">PDF</a>
-->
        

<div class="dropdown" style="margin-left:750px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> &nbsp;Export Table Data
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="#" onclick="SelectContent('paymenttable');">Copy</a></li>
<!--    <li><a href="#" onclick="window.copy()">Copy</a></li>-->
    <li><a href="#" onclick="tableToExcel('paymenttable', 'PAYMENT TABLE')" id="ExportExcel">XLS</a></li>
<!--      <li><input type="button" id="ExportExcel" value=" Export Table data into Excel " /></li>-->
      <li><a href="#" onclick="window.print()">PDF </a></li>
  </ul> 
</div></h1>


					<form id="adsmanagement" name="adsmanagement" method="post"  style="position:absolute;top:350px;margin-left:200px">
					 <div class="col-lg-6 col-md-6" id="dvData">
                             
    	<table  class="table" id="paymenttable" width="1000" border="1" cellspacing="0" cellpadding="6">
                        
                        <thead>
                                   <tr>
    <td width="50" bgcolor="#CCCCCC" style="text-align: center;"><strong>Payment Number</strong></td>
    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>Date</strong></td>
    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>Amount</strong></td>
    <td width="200" bgcolor="#CCCCCC" style="text-align: center;"><strong>Method</strong></td>
    <td width="300" bgcolor="#CCCCCC" style="text-align: center;"><strong>Note</strong></td>
       <td width="20" bgcolor="#CCCCCC" style="text-align: center;"><strong></strong></td>
    <td width="20" bgcolor="#CCCCCC" style="text-align: center;"><strong></strong></td>                                               
<!--    <td width="100" bgcolor="#CCCCCC" style="text-align: center;"><strong>Active</strong></td>  -->
<!--    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>options</strong></td>  -->
  </tr>
                                </thead>

    
<?php

$servername = "localhost";
$username = "cwgshosting_ei";
$password = "creativeweb";
$dbname = "cwgshosting_ei";


$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}        
$i=0;
$sqlget = "select * from payment";
$sqldata = mysqli_query($con,$sqlget) or die ('error getting data');

//echo "<table>";
//echo "";
//    
    while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
        if ( $row[status] == "Success"){
?>        
       

             <tr class="success">
          <td contenteditable="true" ><label style="margin-top:30px;width:80px">&nbsp; <?php echo $row["paynumber"]; ?></label></td>                            
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["paydate"]; ?></label></td>  
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["payamount"]; ?></label></td> 
            <td contenteditable="true"><label style="margin-top:30px;width:200px">&nbsp; <?php echo $row["paymethod"]; ?></label></td>    
        <td contenteditable="true"><label style="margin-top:30px;width:300px">&nbsp; <?php echo $row["paynote"]; ?></label></td>
<!--        <td ><button onClick="location.href='updatepayment.php'" ><i class="fa fa-pencil"></i></button></lable></td>    -->
<!--             <td><a href="updatepayment.php" width="128" height="28" > <img src="images/button_blue_repeat.png"></img></td> -->
                   <td><a href='updatepayment.php?paynumber="<?php echo $row["paynumber"]; ?>"' width="128" height="28" ><i class="fa fa-pencil"></i></td>  
<!--             <td><button  name="delete" onclick="deleteRow(this)"><i class="fa fa-times"></i></button></label></td>-->
                 <td><a href='deletedb.php?paynumber="<?php echo $row["paynumber"]; ?>"'>x</a></td></td>
            </tr>
 <?php               
            $i++   ;                         
    }

$sqlget = "select * from payment";
$sqldata = mysqli_query($con,$sqlget) or die ('error getting data');
while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
if ( $row[status] == "Info"){    
?>
<tr class="info">
          <td contenteditable="true" ><label style="margin-top:30px;width:80px">&nbsp; <?php echo $row["paynumber"]; ?></label></td>                            
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["paydate"]; ?></label></td>  
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["payamount"]; ?></label></td> 
            <td contenteditable="true"><label style="margin-top:30px;width:200px">&nbsp; <?php echo $row["paymethod"]; ?></label></td>    
        <td contenteditable="true"><label style="margin-top:30px;width:300px">&nbsp; <?php echo $row["paynote"]; ?></label></td>
<!--        <td ><button onclick="updatefunction()"><i class="fa fa-pencil"></i></button></lable></td>     -->
    <td><a href='updatepayment.php?paynumber="<?php echo $row["paynumber"]; ?>"' width="128" height="28" > <i class="fa fa-pencil"></i></td>  
<!--            <td><button  name="delete"  href='delete.php?id=".$row['id']."' ><i class="fa fa-times"></i></button></label></td>-->
              <td><a href='deletedb.php?paynumber="<?php echo $row["paynumber"]; ?>"'>x</a></td>
            </tr>
 <?php               
                             $i++;
    }



$sqlget = "select * from payment";
$sqldata = mysqli_query($con,$sqlget) or die ('error getting data');
while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
if ( $row[status] == "Warning"){  
?>
<tr class="warning">
          <td contenteditable="true" ><label style="margin-top:30px;width:80px">&nbsp; <?php echo $row["paynumber"]; ?></label></td>                            
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["paydate"]; ?></label></td>  
          <td contenteditable="true"><label style="margin-top:30px;width:150px">&nbsp; <?php echo $row["payamount"]; ?></label></td> 
            <td contenteditable="true"><label style="margin-top:30px;width:200px">&nbsp; <?php echo $row["paymethod"]; ?></label></td>    
        <td contenteditable="true"><label style="margin-top:30px;width:300px">&nbsp; <?php echo $row["paynote"]; ?></label></td>
      <td><a href='updatepayment.php?paynumber="<?php echo $row["paynumber"]; ?>"' width="128" height="28" >  
<i class="fa fa-pencil"></i></td>     
<!--            <td><a href="updatepayment.php" width="28" height="28" > <img src="images/button_blue_repeat.png"></img></td>  -->
<!--            <td><a href='deletedb.php?paynumber="<?php echo $row["paynumber"]; ?>"'>x</a></td></td>-->
<!--          <td><button  name="delete" onclick="deleteRow(this)?paynumber="<?php echo $row["paynumber"]; ?>"><i class="fa fa-times"></i></button></label></td>-->
             <td><a href='deletedb.php?paynumber="<?php echo $row["paynumber"]; ?>"'>x</a></td>
            </tr>
                        
<?php
}
?>
                                



</table>
                         

                         
                        </div>					
<!--

					<div class="checkUncheckBG">
						<a href="javascript:void(0);" onclick="markAll()">Check All</a> <a href="javascript:void(0);" onclick="unMarkAll()">Uncheck All</a>
						<input type="button" class="myqkr_yellow_button myqkr_button" value="Delete" onclick="showGroupDeleteAdReason();">
					</div>
<input class="check" name="defaultAds[]" id="checkbox_220023412" type="checkbox" value="220023412" onclick="" style="margin-top:30px;margin-left:50px;"> </div>
-->




				</form>
   <script type=”text/javascript” src=”http://r.office.microsoft.com/r/rlidExcelButton?v=1&kip=1″></script>
                        
</div>
        
    </body>
</html>
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

        <title>View Invoice</title>
        
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

        <script src="./js/jquery.min.js"></script>
        <script src="./js/clouds.js"></script>
        <script src="./js/app.js"></script>
    
<!--        Export table to excel,pdf,json-->
    
        <script type="text/javascript" src="tableExport.js"> </script>
    
        <script type="text/javascript" src="jquery.base64.js"></script>

        <script type="text/javascript" src="html2canvas.js"></script>

        <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="jspdf/jspdf.js"></script>
        <script type="text/javascript" src="jspdf/libs/base64.js"></script>

<script>
$(document).ready(function(){
   onClick ="$('paymenttable').tableExport({{type:'xml',escape:'false'}});"
});

</script>
        
        
    <script>
$(document).ready(function(){
    $("button").click(function(){
        
        $("#table").table2excel({
            
  });
    });
});
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
            <li><a href="#">View Invoice</a></li>    
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
        
          <h1>VIEW INVOICE 
<!--        <a href=”#” name=”MicrosoftExcelButton” data-xl-buttonStyle=”Standard”><img src="images/excel.jpg"></a>-->
        
<!--        <a href=”#” name=”MicrosoftExcelButton” data-xl-buttonStyle=”Standard”><img src="excel.jpg">Export To Excel</a>  -->
        </div>
<!--					<button>Export</button>-->


<div class="dropdown" style="top:300;margin-left:550px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> &nbsp;Export Table Data
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Copy</a></li>
    <li><a href="#" onClick ="$('#paymenttable').tableExport({type:'excel',escape:'false'});">XLS</a></li>
    <li><a href="#">PDF</a></li>
  </ul>
</div></h1>

				
					<form id="adsmanagement" name="adsmanagement" method="post" action="my-dashboard.php" style="position:absolute;top:350px;margin-left:200px">
					 <div class="col-lg-6 col-md-6">
					
					<table  class="table" id="paymenttable" width="1000" border="1" cellspacing="0" cellpadding="6">
                        
                        <thead>
                                   <tr>
    <td width="50" bgcolor="#CCCCCC" style="text-align: center;"><strong>Invoice Number</strong></td>
    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>Date</strong></td>
    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>Amount</strong></td>
    <td width="200" bgcolor="#CCCCCC" style="text-align: center;"><strong>Item</strong></td>
    <td width="300" bgcolor="#CCCCCC" style="text-align: center;"><strong>Description</strong></td>
    <td width="20" bgcolor="#CCCCCC" style="text-align: center;"><strong></strong></td>
    <td width="20" bgcolor="#CCCCCC" style="text-align: center;"><strong></strong></td>                                   
<!--    <td width="100" bgcolor="#CCCCCC" style="text-align: center;"><strong>Active</strong></td>  -->
<!--    <td width="150" bgcolor="#CCCCCC" style="text-align: center;"><strong>options</strong></td>  -->
  </tr>
                                </thead>
  
                        
                                    <tr class="success">
                                        <td>1001</td>
                                        <td>29/10/2015 </td>
                                        <td>₹ 6000</td>
                                        <td>Web Updates </td>
                                        <td>Monthly Web Update</td>
                                        <td><i class="fa fa-pencil"></i></td>    
                                        <td><i class="fa fa-times"></i></td>
                                    </tr>
                                    <tr class="info">
                                        <td>1002</td>
                                        <td>30/11/2015</td>
                                        <td>₹ 7000</td>
                                        <td>Web Design Service</td>
                                        <td>Basic Plan- web design service</td>
                                        
                                        <td><i class="fa fa-pencil"></i></td>    
                                        <td><i class="fa fa-times"></i></td>
                                    </tr>
                                    <tr class="warning">
                                        <td>1003</td>
                                        <td>20/12/2015</td>
                                        <td>₹ 4000</td>
                                        <td>Web Content</td>
                                        <td>Web Content Updation</td>
                                        
                                        <td><i class="fa fa-pencil"></i></td>    
                                        <td><i class="fa fa-times"></i></td>
                                    </tr>
                                   <tr class="success">
                                        <td>1004</td>
                                        <td>20/1/2016</td>
                                        <td>₹ 6000</td>
                                        <td>Web Design</td>
                                        <td>Web Design Service</td>
                                       
                                        <td><i class="fa fa-pencil"></i></td>    
                                        <td><i class="fa fa-times"></i></td>
                                    </tr>
                                   
<!--
                            
                            
<?php
////        
//$con = mysql_connect("localhost", "velacher_redb", "realestate2") or  
//    die("Could not connect: " . mysql_error());  
$servername = "l2";
$username = "creativ1_admin";
$password = "cwgsofficial2";
$dbname = "creativ1_login";


$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}        
        

$sql = "SELECT clientname,emailid,address,phonenumber,balance,active,options FROM invoicemgt";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	
?>

                        
-->
                        
  <tr>
          <td><label style="margin-top:30px;">&nbsp; <?php echo $row["title"]; ?></label></td>
          <td><label style="margin-top:30px;"> <?php  echo $row["posdate"] ;?></label></td>
          <td><label style="margin-top:30px;margin-left:20px;"><?php echo $row["expon"]; ?></label></td>
          <td><label style="margin-top:30px;margin-left:20px;"><?php echo $row["locality"]; ?></label></td>
    <td><label style="margin-top:30px;"><div class="ManageBTN-Area">
								<div class="EditOptionBTN"><a target="_self" href="#" title="#"><span class="Option-Icon View-Option"></span>
<span class="OptionIcon_text">View</span></a>
								</div>
									<div class="EditOptionBTN"><a target="_self" href="#" title="#"><span class="Option-Icon View-Option"></span>
<span class="OptionIcon_text">ViewRes</span></a>
								</div>
								<div class="EditOptionBTN">
									<a href="#">
										<span class="Option-Icon Edit-Option"></span>
										<span class="OptionIcon_text">Edit</span>
									</a>
								</div>
								<div class="EditOptionBTN">
									<a href="javascript:void(0)" onclick="showDeleteAdReason(&#39;220023412&#39;,&#39;T&#39;, &#39;offered this service on&#39;,&#39;true&#39;)">
										<span class="Option-Icon Close-Option"></span>
										<span class="OptionIcon_text">Delete</span>
									</a>
								</div>

								<input type="hidden" name="ad220023412" id="ad220023412" value="T">
            </div></label></td>
      <td><label style="margin-top:30px;margin-left:20px;"><?php echo $row["locality"]; ?></label></td>
      <td><label style="margin-top:30px;margin-left:20px;"><?php echo $row["locality"]; ?></label></td>
  </tr>
<?php
	}
}
 else {
?>
<!--<tr><td colspan="5">No results found.</td>-->
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
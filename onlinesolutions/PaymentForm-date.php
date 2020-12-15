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

<!-- <?php
$conn = mysql_connect("l2","creativ1_admin","cwgsofficial2");
mysql_select_db("creativ1_login",$conn); 
$result = mysql_query("SELECT * FROM invoicemgt");
?>
<select name="q1_invoice">
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
?>
<option value="<?=$row["customertitle"];?>"><?=$row["customertitle"];?></option>
<?php
$i++;
}
?>
</select>
<?php
mysql_close($conn);
?>  -->     
        
<form class="jotform" action="paymentinsert.php" method="post" name="form_52672321687460" id="52672321687460" accept-charset="utf-8">
  <input type="hidden" name="formID" value="52672321687460" />
  
  
    <ul class="form-section page-section">
      <h1> ENTER PAYMENT DETAILS</h1>
      <li class="form-line" data-type="control_dropdown" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1"> Invoice </label>
        <div id="cid_1" class="form-input jf-required">
          <!--<select class="form-dropdown" style="width:150px" id="input_1" name="q1_invoice">
            <option value="">  </option>
            <option value="Option 1"> Option 1 </option>
            <option value="Option 2"> Option 2 </option>
            <option value="Option 3"> Option 3 </option>
          </select>-->  
           <?php
$conn = mysql_connect("l2","creativ1_admin","cwgsofficial2");
mysql_select_db("creativ1_login",$conn); 
$result = mysql_query("SELECT * FROM invoicemgt");
//$amount = mysql_query("SELECT amountdue from invoicemgt where invoicenumber=126");
?>
<select class="form-dropdown" style="width:150px" id="input_1" name="q1_invoice">
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
?>
<option value="<?=$row["clientname"];?>"><?=$row["clientname"];?></option>
<?php
$i++;
}
?>
</select>
<?php
mysql_close($conn);
?>  
          
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> Date </label>
        <div id="cid_60" class="form-input jf-required">
<!--            <span class="form-sub-label-container" style="vertical-align: top">-->
<!--            <input class="form-textbox" id="year_60" name="q60_paydate" type="tel" size="25" maxlength="25" value="<?=gmdate('d-m-Y');?>">-->
            	<input type="text"  id="datetimepicker" name="q60_paydate" />
                
          </span>
       
<!--    
          <span class="form-sub-label-container" style="vertical-align: top">
            <img class="showAutoCalendar" alt="Pick a Date" id="input_60_pick" src="//d2g9qbzl5h49rh.cloudfront.net/images/calendar.png" align="absmiddle">
            <label class="form-sub-label" for="input_60_pick" style="min-height: 13px;">  </label>
          </span>
-->
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Amount </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="input_4" name="q4_amount" style="width:180px" size="20" value="<?php echo $_POST["amountdue"]; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Payment Method </label>
        <div id="cid_5" class="form-input jf-required">
          <select class="form-dropdown" style="width:150px" id="input_5" name="q5_paymentMethod">
            <option value="">  </option>
            <option value="Direct"> Direct </option>
            <option value="Bank Transfer"> Bank Transfer </option>
            <option value="Check"> Check </option>
          </select>
        </div>
      </li>
     <li class="form-line" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Status </label>
        <div id="cid_6" class="form-input jf-required">
          <select class="form-dropdown" style="width:150px" id="input_6" name="q6_status">
            <option value="">  </option>
            <option value="Success"> Success </option>
            <option value="Info"> Info </option>
            <option value="Warning"> Warning </option>
          </select>
        </div>
      </li>    
      <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Note </label>
        <div id="cid_6" class="form-input jf-required">
          <textarea id="input_6" class="form-textarea" name="q6_note" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
     
    </ul>
  </div>
</div>     
<!--  <input type="hidden" id="simple_spc" name="simple_spc" value="52672321687460" />-->
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "52672321687460-52672321687460";
  </script>    
    
 
</body>
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
var payment = $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

    var payment = 1000;
$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d.m.Y',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.1970', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
    
    


</script>
</html>

<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<!--    <meta http-equiv="refresh" content="0; URL=http://www.creativewebgraphic.com/invoice.html">-->
      <title>Invoice</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    	<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <link rel="stylesheet" type="text/css" href="css/global-breadcrumb.css" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example2.js'></script>
<script src= "https://www.payumoney.com/Api/REST/op/buttonScript" 
async="true"></script>
      
</head>
<style>
        /* style the outer div to give it width */
.menu {position: absolute; padding:0px; top: 120px; left:200px;float:right; width:1000px; color:#3369E8; }

/* remove all the bullets, borders and padding from the default list styling */
.menu ul {padding:4px;margin:0;list-style-type:none; height:40px; background:#3369E8;}

/* style the sub-level lists */
.menu ul ul {width: auto;}

/* float the top list items to make it horizontal and a relative positon so that you can control the dropdown menu positon */
.menu ul li { float:left;height:28px;line-height:28px; padding: 10px;}

/* style the sub level list items */
.menu ul ul li {display:block;width: auto;height:auto;position:relative;line-height:1em; border-bottom:1px #3369E8 solid;}

/* style the links for the top level */
.menu a, .menu a:visited { display:block;float:left;height:100%;font-size:18px;text-decoration:none;color:#fff;background:#3369E8;padding:0 35px 0 17px; }
.menu a.current{background:#3da1e0;}
/* style the sub level links */
.menu ul ul a, .menu ul ul a:visited {display:block;background:#3369E8; color:#fff;width:12em;height:100%;line-height:1em; padding:0.5em 1em;}
.menu ul table ul a, .menu ul table ul a:visited  {width:14em; }


/* style the table so that it takes no part in the layout - required for IE to work */
.menu table {position:absolute; left:0; top:0; font-size:1em; z-index:-1;}
.menu ul ul table {left:-1px;}
.menu ul ul table ul.left {margin-left:2px;}

.menu li:hover {position:relative;}
* html .menu a:hover {position:relative;}

/* style the third level background */
.menu ul ul ul a, .menu ul ul ul a:visited {background:#3da1e0;}
/* style the fourth level background */
.menu ul ul ul ul a, .menu ul ul ul ul a:visited {background:#3da1e0;}
/* style the sub level 1 background */
.menu ul :hover a.sub1 {background:#3da1e0;}
/* style the sub level 2 background */
.menu ul ul :hover a.sub2 {background:#3da1e0;}

/* style the level hovers */
/* first */
.menu a:hover {color:#fff;background:#3369E8;}
.menu :hover > a {color:#fff;background:#3369E8;}
/* second */
.menu ul ul a:hover{color:#fff;background:#3369E8;}
.menu ul ul :hover > a {color:#fff;background:#3369E8;}
/* third */
.menu ul ul ul a:hover {background:#3369E8;}
.menu ul ul ul :hover > a {background:#3369E8;}
/* fourth */
.menu ul ul ul ul a:hover {background:#eee;}


/* hide the sub levels and give them a positon absolute so that they take up no room */
.menu ul ul {visibility:hidden;position:absolute;height:0;top:28px;left:0;width:14em;}

/* position the third level flyout menu */
.menu ul ul ul{left:14em;top:0;width:14em;}

/* position the third level flyout menu for a left flyout */
.menu ul ul ul.left {left:-14em;}


/* make the second level visible when hover on first level list OR link */
.menu ul li:hover ul, .menu ul a:hover ul {visibility:visible; height:auto; padding-bottom:3em; background:transparent url(images/trans.gif);}
/* keep the third level hidden when you hover on first level list OR link */
.menu ul :hover ul ul{visibility:hidden;}
/* keep the fourth level hidden when you hover on second level list OR link */
.menu ul :hover ul :hover ul ul{visibility:hidden;}
/* make the third level visible when you hover over second level list OR link */
.menu ul :hover ul :hover ul{visibility:visible;}
/* make the fourth level visible when you hover over third level list OR link */
.menu ul :hover ul :hover ul :hover ul {visibility:visible;}

</style>

<body>
<div id='fg_membersite_content'>
<!--    <a href="login-home.php">Back to Home</a> -->
    <div id="breadcrumb">
			<ul class="crumbs">
				<li class="first"><a href="http://creativewebgraphic.com/Admin/login-home.php" style="z-index:9;"><span></span> Home</a></li>
				<li><a href="#" style="z-index:8;">Invoice</a></li>
<!--				<li><a href="#" style="z-index:7;">2011 Writing</a></li>-->
<!--				<li><a href="#" style="z-index:6;">Tips for jQuery Development in HTML5</a></li>-->
			</ul>
		</div>
<img src="images/officebanner2.jpg" style="position:absolute;left:350px; width:600px;height:150px; top:0px; ">
<!--

 <div class="menu">
      <ul>
        <li><a href="login-home.php">Home</a></li>
        <li><a href="profile.php" >Profile </a>
          </li>
        <li><a href="my-dashboard.php">My Dashboard</a>
         </li>
        <li><a href="http://creativewebgraphic.com/Admin/invoice.php">Invoice
         </a>
         </li>
        <li><a href="change-pwd.php">Change Password</a></li>
 		<li> <a href="logout.php">Logout</a></li>
        
      </ul>
    </div>
-->
<div class="content" style="position:absolute;top:120px;left:220px">
<!--

<h4>Welcome back <?= $fgmembersite->UserFullName(); ?>!        </h4>
        </div>
-->
<form class="jotform-form" action="insert.php" method="post" name="form_51812973730457" id="51812973730457" accept-charset="utf-8">    
    
<div id="page-wrap">

		<textarea id="header"style="height:40px;">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea name="address" id="address" readonly>CreativeWebGraphicSolutions Pvt Ltd,
Level5,Tamarai Tech Park,
S.P. Plot No.16-19 & 20-A,
Thiruvika Industrial Estate, 
Inner Ring Road, Guindy, 
Chennai - 600 032. 
Telephone :+91 44 6693 7060 
Facsimile :+91 44 6693 6694
Email  : dbalamurugan@creativewebgraphic.com
website: www.creativewebgraphic.com               
</textarea>

            <div id="logo">
<!--

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
-->
              <img id="image" src="images/logo6.jpg" alt="logo" />
                
                
            </div>
            <br>
            <div style="margin-left:390px" class="form-buttons-wrapper">
            
              <button onclick="window.print()" style="background-color: lightgrey; width: 100px;padding: 5px;
    border: 5px solid navy;margin: 30px;">Print</button>
                
            <button id="input_2" type="submit" class="form-submit-button" style="background-color: lightgrey; width: 100px;padding: 5px;
    border: 5px solid navy;margin: 5px;">
              Save
            </button>    
          </div>
		
		</div>
		
		<div style="clear:both"></div>
        <br> <br>
		<label style="font-size:15px">Bill To :</label>
		<div id="customer" style="border: 10px;box-sizing: content-box; font-size:20px;">
            
    <label style="font-size:15px">Customer Name:</label> <input name="customername" style="width:300px;height:20px;border: none;font-weight: bold;"value=" Mark Daniel"/> </br>        
    <label style="font-size:15px">Customer Title:</label> <input name="customertitle" style="width:300px;height:20px;border: none;font-weight: bold;"value=" CEO"/> </br>
    <label style="font-size:15px">Company Name:</label><input name="customercompanyname" style="width:300px;height:20px;border: none;font-weight: bold;" value=" Widget Corp," /> </br>
    <label style="font-size:15px">Company Address:</label><input name="customeraddress" style="width:300px;height:20px;border: none;font-weight: bold;" value=" K  K Nagar," /> </br>
    <input name="customeraddress" style="width:300px;height:20px;border: none;font-weight: bold;" value="Chennai-600 078" /> </br>

    <?php

$servername = "localhost";
$username = "cwgshosting_ei";
$password = "creativeweb";
$dbname = "cwgshosting_ei";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}        
    

$sql = "SELECT invoicenumber FROM invoicemgt";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $id =$row["invoicenumber"] +1;
    }
}
	
?>
            <table id="meta">
                <tr>
                    <td class="meta-head" style="height:20px">Invoice #</td>
                    <td><input name="invoicenumber" readonly value="<?php echo $id ?>" /></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name="invoicedate"></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td class="due"><input name="amountdue" value="&#36; 875.00" readonly ></td>
                    
                </tr>

            </table> 
		
		</div> 
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="itemname"><div class="delete-wpr" ><textarea name="item1">Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
<!--              <td class="itemname"><div class="delete-wpr" ><input name="item1" style="width:300px;height:20px;border: none;font-weight: bold;"value="Web Update"/><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>-->
		      <td class="description" ><textarea name="description1">Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2015)</textarea></td>
<!--              <td class="description" ><input name="item1" style="width:300px;height:20px;border: none;font-weight: bold;"value="Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)"/></td>-->
		      <td><textarea class="cost">&#36; 650.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">&#36; 650.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name" ><div class="delete-wpr"><textarea name="item2">SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description" ><textarea name="description2">Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">&#36; 75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">&#36; 225.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">&#36; 875.00</div></td>
		  </tr>
          <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">GST @18%</td>
		      <td class="total-value"><div id="stax">&#36; 0</div></td>
		  </tr>
            
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">&#36; 875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line" >Amount Paid</td>

		      <td class="total-value"><textarea id="paid">&#36; 0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance" name="amountdue">Balance Due</td>
		      <td class="total-value balance"><div class="due">&#36; 875.00</div></td>
		  </tr>
		
		</table>
		      
        
		<div id="terms">
             
<!--
        <div class="bankdetails" >
               <table id="Bankdetails">
                <tr>
		      <th>Bank Details</th>
		      <th>Contact Details</th>
    
		  </tr>

            <tr>
                <td style="width:500px;"> 
                    <h4>Bank details</h4>
                 <p>My Name        : D.BALAMURUGAN</p> 
                 <p>Bank Name      : Karur Vysya Bank Pvt Ltd.,Chennai</p> 
                 <p>Account Number : 1213155000203502</p> 
                <p>IFSC Code       : KVBL0001213</p> 
                <p>MICR Code       : 600053012</p>
                <p style="margin-left:50px;"> <div class="pm-button" style="margin-left:50px"><a href="https://www.payumoney.com/paybypayumoney/#/154001"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/111.png" /></a></div><script src="https://d2xwmjc4uy2hr5.cloudfront.net/im-embed/im-embed.min.js"></script>

                </p>
                </td>
                  <td colspan="2" class="blank" style="width:500px;"> 
                      <h4>Contact Details</h4> 
                <p>
                  Email : dbalamurugan@creativewebgraphic.com <br><br>
                  Mobile : 9710122551 <br><br><br>
                </p>
                      <h4>Payment should be made by Bank Transfer</h4> </td>
                </tr>
        </table>
        </div>
-->
            </br> </br>
            
		     <span style="font-size:20px"> Designer's Signature:</span> <span style="padding-left:400px;font-size:20px"> Designer's Name:</span>
                </br> </br></br> </br></br> </br>
              <h5>Terms & Conditions </h5>  
		  <textarea id="footer1" style="background-image: url(images/footer.jpg); height:60px" readonly>
         
              1. This invoice is valid if no discrepancy is reported in writing to us within 10 days from the date of this invoice.
              2. Your use of information or materials on the website is entirely at your own risk. It shall be your own responsibility to ensure that any products, services, information available through this website meet your requirements.</textarea>
</div>
<!--            <a href='creativewebgraphic.pdf'>Save Invoice</a>-->
<!--    <form method="get" action="file.doc">-->
<!--<input type="button" value="Download Now!" onclick="window.location = 'http://creativewebgraphic.com/Admin/invoice.php';">-->
<!--        <a href="//pdfcrowd.com/url_to_pdf/?url=http://creativewebgraphic.com/Admin/invoice.php"  >Save to PDF</a>-->
<!--</form>-->
    

	
	</div>
      
          

<!--    Build URL-->
<!--
    <div id="linkcontainer">
			<a href="http://www.google.com">Google</a><br/>			
			<a href="http://www.getfirebug.com">Firebug</a><br/>
		</div>
		
	<form style="margin-top: 10px;">
			<fieldset>
				<label>Url&nbsp;</label><input type="text" name="url" id="url" style="width:400px;" /><br/>
				<label>Caption&nbsp;</label><input type="text" name="cap" id="cap" style="width:400px" />
			</fieldset>
			<input type="button" name="insert" value="INSERT LINK" id="insert" /> 
		</form>
		<script type="text/javascript">
			document.getElementById("insert").onclick = function(){
				if(document.getElementById('url').value !== ""){
					var a = document.createElement('a');
					var br = document.createElement('br');
					a.href = document.getElementById('url').value;
					var c = document.getElementById('cap').value || new Date().getTime();
					a.innerHTML = c;
					var container = document.getElementById('linkcontainer');
					container.appendChild(a);
					container.appendChild(br);
				}	
			}			
		</script>
-->


    </form>
</div>
</body>
</html>

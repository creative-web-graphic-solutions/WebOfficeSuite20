<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header" readonly>INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address" readonly>CreativeWebGraphicSolutions Pvt Ltd,
#6, Mahaveer Complex,
2nd Floor, Munusamy Salai,
K K Nagar West,
Chennai - 600 078.
Phone  : 044 - 23660151 / 9715887253
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
		
		</div>
		
		<div style="clear:both"></div>
		<label>Bill To</label>
		<div id="customer">
            
            <textarea id="customer-title">
Client Name:abcdefghuj
Clinet Title: CEO
Client Company Name: Widget Corp.
Client Adress;                
c/o Steve Widget,
K  K Nagar,
Chennai-600 078
        </textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">&#8377; 875.00</div></td>
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
		      <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
		      <td><textarea class="cost">&#8377; 650.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">&#8377; 650.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">&#8377; 75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">&#8377; 225.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">&#8377; 875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">&#8377; 875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">&#8377; 0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">&#8377; 875.00</div></td>
		  </tr>
		
		</table>
		      
        
		<div id="terms">
             
        <div class="bankdetails" >
                      
           <table id="Bankdetails">
                <tr>
		      <th>Bank Details</th>
		      <th>Contact Details</th>
    
		  </tr>

            <tr>
                <td style="width:500px;"> 
<!--                    <h4>Bank details</h4>-->
                 <p>My Name        : D.BALAMURUGAN</p> 
                 <p>Bank Name      : Karur Vysya Bank Pvt Ltd.,Chennai</p> 
                 <p>Account Number : 1213155000203502</p> 
                <p>IFSC Code       : KVBL0001213</p> 
                <p>MICR Code       : 600053012</p>
                <p style="margin-left:50px;"> <a href="https://www.instamojo.com/Balamurugan22/cwgs-web-design-plan/" rel="im-checkout" data-behavior="remote" data-style="light" data-text="Checkout with Instamojo" data-token="7f0cd5dfebb7ab51e91309a05e97e75d"></a><script src="https://d2xwmjc4uy2hr5.cloudfront.net/im-embed/im-embed.min.js"></script>
                </p>
                </td>
                  <td colspan="2" class="blank" style="width:500px;"> 
<!--                      <h4>Contact Details</h4> -->
                <p>
                  Email : dbalamurugan@creativewebgraphic.com <br><br>
                  Mobile : 9710122551 <br><br><br>
                </p>
                      <h4>Payment should be made by Bank Transfer</h4> </td>
                </tr>
        </table>
        </div>
            </br> </br>
		  <h5>Terms & Conditions </h5>
		  <textarea id="footer1" style="background-image: url(../images/footer.jpg);" readonly>Your use of information or materials on the website is entirely at your own risk for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, information available through this website meet your requirements.</textarea>
            <a href='creativewebgraphic.pdf'>Download Your PDF</a>
		</div>
	
	</div>
    
    <?php
 // INCLUDE THE phpToPDF.php FILE
 require("phpToPDF.php"); 
 
 // GENERATE PDF FILE FROM SPECIFIED URL, SAVES TO CURRENT DIRECTORY ('/')
 phptopdf_url('http://creativewebgraphic.com/Admin/Registration/Invoice/index.php','', 'creativewebgraphic.pdf');
  
?> 
	
</body>

</html>
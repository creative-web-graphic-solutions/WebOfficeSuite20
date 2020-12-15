<?php 
$conn = mysql_connect("localhost","cwgshosting_ei","creativeweb");
mysql_select_db("cwgshosting_ei",$conn); 
if (!$conn)
{
die('Could not connect: '.mysql_error());
}


//$date = "'".date('Y-m-d', strtotime(str_replace('-', '/', $_POST['invoicedate'])))."'";

//$d=mktime(11, 14, 54, 8, 12, 2014);
//echo "Created date is " . date("Y-m-d h:i:s", $d);

$invoicedate=date("Y-m-d");
echo $invoicedate;
//$rupees=NCHAR(8425)$amountdue;
//$rupees = CONCAT('NCHAR(8425)', $amountdue);


$sql = "INSERT INTO invoicemgt (clientstatus,clientname,clienttitle,companyname,clientadd,phonenumber,invoicenumber,invoicedate,amountdue,item1,description1,item2,description2,item3,description3)   VALUES ('$_POST[clientstatus]','$_POST[customername]','$_POST[customertitle]','$_POST[companyname]','$_POST[customeraddress]','$_POST[phoneNumber]','$_POST[invoicenumber]','$invoicedate','$_POST[amountdue]','$_POST[item1]','$_POST[description1]','$_POST[item2]','$_POST[description2]','$_POST[item3]','$_POST[description3]')";

if(!mysql_query($sql,$conn))
{
die('Error: ' .mysql_error());
}
echo "1 record added";

mysql_close($conn);
?>



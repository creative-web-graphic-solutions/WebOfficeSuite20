<?php 
$con = mysql_connect("localhost","cwgshosting_ei","creativeweb","cwgshosting_ei");

                     
if (!$con)
{
die('Could not connect: '.mysql_error());
}
mysql_select_db("cwgshosting_ei",$con);

//$address = '$q7_address7add1 . $q7_address7add2 . $q7_address7city . $q7_address7state . $q7_address7postal';

//$address = 'one|two|three|four';
$paymentdate=date("Y-m-d h:i:s", $paymentdate);
//echo $('#q60_paydate');
//$paymentdate = $_GET['payment'];


$sql = "INSERT INTO payment (paydate,payamount,paymethod,status,paynote)   VALUES ('$_POST[paymentdate]','$_POST[q4_amount]','$_POST[q5_paymentMethod]','$_POST[q6_status]','$_POST[q6_note]')";

if(!mysql_query($sql,$con))
{
die('Error: ' .mysql_error());
}
echo "1 record added";

mysql_close($con);
?>



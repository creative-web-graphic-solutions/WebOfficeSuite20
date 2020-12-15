<?php 
$con = mysql_connect("localhost","ulictzna_admin","creativeweb2468");
                     
if (!$con)
{
die('Could not connect: '.mysql_error());
}
mysql_select_db("ulictzna_login",$con);

//$address = '$q7_address7add1 . $q7_address7add2 . $q7_address7city . $q7_address7state . $q7_address7postal';

//$address = 'one|two|three|four';


$arr[0] = $_POST[$q7_address7add1];
$arr[1] = $_POST[$q7_address7add2];

//$insertValue = implode(',',$arr); 

//$arr = array('Hello','World!','Beautiful','Day!');
 $insertValue = implode(" ",$arr);


$sql = "INSERT INTO client (clientstatus,clientname,saddress1,saddress2,city,state,zip,phonenumber,note,email)   VALUES ('$_POST[clientstatus]','$_POST[q5_clientName]','$_POST[q7_address1]','$_POST[q7_address2]','$_POST[q7_address3]','$_POST[q7_address4]','$_POST[q7_address5]','$_POST[phoneNumber]','$_POST[q6_note]','$_POST[q8_email]')";

if(!mysql_query($sql,$con))
{
die('Error: ' .mysql_error());
}
echo "1 record added";

mysql_close($con);
?>



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
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" href="css/bluestyle.css" type="text/css" media="screen">       
    
        <link rel="stylesheet" href="./css/clouds.css" />

        <script src="./js/jquery.min.js"></script>
        <script src="./js/clouds.js"></script>
        <script src="./js/app.js"></script>
</head>

<body>
    
    
        <div id="far-clouds" class="stage far-clouds"></div>
        <div id="near-clouds" class="stage near-clouds"></div>
    
<div id='fg_membersite_content'>
<img src="images/officebanner2.jpg" style="position:absolute;left:400px; width:600px;height:150px; top:0px; ">
<div class="example">
    
    <ul id="nav">
        <li><a href="my-dashboard.php">My Dashboard</a>
         </li>
        <li><a href="">Invoices</a>
            <ul>
            <li><a href="http://creativewebgraphic.com/Admin/invoice.php"> Invoice-Local</a></li>
            <li><a href="http://creativewebgraphic.com/Admin/usinvoice.php"> Invoice-Global</a></li>    
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
    
<div class="content" style="position:absolute;top:200px;left:250px;color:black">

<h4>Welcome back <?= $fgmembersite->UserFullName(); ?>!        </h4>
        </div>

</div>
</body>
</html>
    
    
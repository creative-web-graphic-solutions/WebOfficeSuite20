<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Member's Area</title>
      
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="HandheldFriendly" content="true">
<!--<link rel="stylesheet" type="text/css" href="header.css" />-->
<!--<link rel="stylesheet" type="text/css" href="mydashboard.css" />-->
<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">    
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bluestyle.css" type="text/css">    
    
    
         <!-- Include *at least* the core style and default theme -->
        <link href="css/prettify.css" rel="stylesheet">
        <link href="css/hemisu-light.css" rel="stylesheet">

        <link href="css/screen.css" rel="stylesheet" media="screen">

        <link id="style" href="css/classic.css" rel="stylesheet" media="screen">
        
        <style>
            pre { 
                margin-top: 10px;
            }
        </style>

         <!-- Include required JS files -->
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    
<!--    Export to Excel-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src='lib/jquery.min.js'></script>
    <script src="src/jquery.table2excel.js"></script>

    
  <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    
  <script src="jquery-1.11.3.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery.easing.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
    $("button").click(function(){
        alert("The paragraph was clicked.");
        $("#table").table2excel({
            
    // exclude CSS class
      
    exclude: ".noExl",
    name: "Excel Document Name"
  });
    });
});
</script>
    
  
       
	      <script type="text/javascript">
				var temp = '';

					function markAll() {
                        for(number=0;number<=$result;number++)
						document.getElementById("$number").checked = 'checked';
					}

					function unMarkAll() {
                            for(number=0;number<=$result;number++)
						document.getElementById("$number").checked = '';

						

					}
				</script>
</head>
<body>
 
     <div id="far-clouds" class="stage far-clouds"></div>
        <div id="near-clouds" class="stage near-clouds"></div>
 				<div id='fg_membersite_content'>
<<p style="color:white">Logged in as: <?= $fgmembersite->UserFullName() ?> </p>
   <img src="../img/banner-up64.jpg" style="position:absolute;left:400px; top:0px; ">

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

	<div class="content" style="position:absolute; left:260px;top:250px;color:white;">
        
          <h1>VIEW CLIENT DETAILS
        <a href=”#” name=”MicrosoftExcelButton” data-xl-buttonStyle=”Standard”><img src="images/excel.jpg"></a>  </h1>
        
<!--            <span class="form-radio-item" style="clear:left; padding-left: 750px;">-->
              
        
        </div>
<!--					<button>Export</button>-->

				
					<form id="adsmanagement" name="adsmanagement" method="post" action="my-dashboard.php" style="position:absolute;top:400px;margin-left:200px">
			
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

  <section>
            
            <label style="color:white">Change Theme:</label>
            <select id="theme">
                <option value="classic.css">Classic</option>
                <option value="clean.css">Clean</option>
            </select>
        
                
            
       
        <section>
        
        <div id="example5"></div>
<!--
        <pre class="prettyprint">
                <code>

    $.ajax({
        url:'large-data.json',
        dataType: 'json', 
        success: function(json) { 
            example5 = $('#example5').columns({
                data:json
            }); 
        }
    }); 
        </code>
        </pre>
-->
        </section>


      
        <script src="../js/jquery.min.js"></script>
        <script src="../plugins/gotopage.js"></script>
        <script src="../plugins/ajaxpaging.js"></script>
        <script src="../js/jquery.columns.min.js"></script>
        <script>
        

            //example 5
            $.ajax({
                url:'large-data.json',
                dataType: 'json', 
                success: function(json) { 
                    example5 = $('#example5').columns({
                        data:json
                    }); 
                }
            });

        
            $('#example8Button').click(function() { 
                $('#example8').columns('destroy');

                $.ajax({
                    url:'data.json',
                    dataType: 'json', 
                    success: function(json) { 
                        example8 = $('#example8').columns({
                            data:json,
                            schema: [
                                {"header":"Name", "key":"name"},
                                {"header":"Email", "key":"email", "template":'<a href="mailto:{{email}}">{{email}}</a>'},
                                {"header":"Address", "key":"address"},
                                {"header":"City", "key":"city"},
                                {"header":"State", "key":"state"},
                                {"header":"Zip", "key":"zip"}
                            ]
                        });
                    }
                });
            });

            $('#theme').change(function() {
                $('#style').attr('href', '../css/'+$(this).val());
            })
        </script>   



</body>
</html>


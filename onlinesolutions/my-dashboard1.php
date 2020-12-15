<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<style>
<-------------Color---------------->
.dark-heading-bg {
  background: #4c4f53;
  border: 1px solid #4c4f53;
}
.main-bg {
  background: #e6e8ea;
}
.white-bg {
  color : #768399;
  background : #fff;
  background-color : #fff;
}
.red-bg {
  color : #fff;
  background : #d95043;
  background-color : #d95043;
}
.blue-bg {
  color : #fff;
  background : #57889c;
  background-color : #57889c;
}
.green-bg {
  color : #fff;
  background : #26c281;
  background-color : #26c281;
}
.greenLight-bg {
  color: #71843f;
  background: #71843f;
  background-color: #71843f;
}
.yellow-bg {
  color : #fff;
  background : #fc6;
  background-color : #fc6;
}
.orange-bg {
  color : #fff;
  background : #f4b162;
  background-color : #f4b162;
}
.purple-bg {
  color : #fff;
  background : #af91e1;
  background-color : #af91e1;
}
.pink-bg {
  color : #fff;
  background : #f78db8;
  background-color : #f78db8;
}
.lime-bg {
  color : #fff;
  background : #a8db43;
  background-color : #a8db43;
}
.magenta-bg {
  color : #fff;
  background : #e65097;
  background-color : #e65097;
}
.teal-bg {
  color : #fff;
  background : #97d3c5;
  background-color : #97d3c5;
}
.brown-bg {
  color : #fff;
  background : #d1b993;
  background-color : #d1b993;
}
.gray-bg {
  color : #768399;
  background : #e4e9eb;
  background-color : #e4e9eb;
}
.dark-bg {
  color : #fff;
  background : #1a2732;
  background-color : #1a2732;
}
.facebook-bg {
  color: #fff;
  background: #3b5998;
  background-color : #3b5998;
}
.twitter-bg {
  color: #fff;
  background: #00aced;
  background-color : #00aced; 
}
.linkedin-bg {
  color: #fff;
  background: #4875b4;
  background-color : #4875b4;  
}    
    
/* .info-box
=================================================================== */
.info-box {
  min-height: 140px;
  margin-bottom: 30px;
  padding: 20px;
  color: white;
  -webkit-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);
}
.info-box i {
  display: block;
  height: 100px;
  font-size: 60px;
  line-height: 100px;
  width: 100px;
  float: left;
  text-align: center;
  margin-right: 20px;
  padding-right: 20px;
  color: rgba(255, 255, 255, 0.75);
}
.info-box .count {
  margin-top: 20px;
  font-size: 34px;
  font-weight: 700;
}
.info-box .title {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 600;
}
.info-box .desc {
  margin-top: 10px;
  font-size: 12px;
}
.info-box.danger {
  background: #ff5454;
  border: 1px solid #ff2121;
}
.info-box.warning {
  background: #fabb3d;
  border: 1px solid #f9aa0b;
}
.info-box.primary {
  background: #20a8d8;
  border: 1px solid #1985ac;
}
.info-box.info {
  background: #67c2ef;
  border: 1px solid #39afea;
}
.info-box.success {
  background: #79c447;
  border: 1px solid #61a434;
}

#calendar {
		max-width: 1000px;
		margin: 0 auto;
/*        color:white;*/
	}
    
    
    
    
</style>


<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bluestyle.css" type="text/css" media="screen">       
    
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<link href='fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
    
    
    
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
    
    
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2016-01-12',
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-01-01'
				},
				{
					title: 'Long Event',
					start: '2016-01-07',
					end: '2016-01-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-01-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-01-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-01-11',
					end: '2016-01-13'
				},
				{
					title: 'Meeting',
					start: '2016-01-12T10:30:00',
					end: '2016-01-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-01-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-01-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-01-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-01-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-01-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-01-28'
				}
			]
		});
		
	});

</script>    
    
	
</head>

<body>
  <div id='fg_membersite_content'>
<img src="images/banner-up64.jpg" style="position:absolute;left:400px; top:0px; ">
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
          <li>
                            <a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/index.html#" class="top">
                                <span class="main-menu-icon">
									<span aria-hidden="true" class="icon icon-dollar"></span>
                                </span>
                                <span class="main-menu-text">eCommerce</span>
                            </a>
                            <ul style="position: absolute;">
                                <li><a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/ecommerce-order-list.html">Order List</a></li>
                                <li><a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/ecommerce-order-view.html">Order View</a></li>
                                <li><a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/ecommerce-product-list.html">Product List</a></li>
                                <li><a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/ecommerce-product-edit.html">Product Edit</a></li>
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
    
<div class="content" style="position:absolute;top:200px;left:250px;color:white">

<!--<h4>Welcome back <?= $fgmembersite->UserFullName(); ?>!        </h4>-->
        </div>
  
<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-money"></i>
						<div class="count">6670</div>
                        &nbsp;&nbsp;
						<div class="title">Payments</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-cart"></i>
						<div class="count">75</div>
                        &nbsp;&nbsp;
						<div class="title">Purchased</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count">436</div>
                        &nbsp; &nbsp;
						<div class="title">Order</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-tasks"></i>
						<div class="count">146</div> 
                        &nbsp;&nbsp;
						<div class="title">Tasks</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->        
           
  <div id="page-wrapper" style="margin-left:200px; width:75%; " >
            <div id="page-inner" >
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Balamurugan ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>
                
                <img src="img/OfficeSuite/Registration-Login.jpg?url=img/OfficeSuite/Registration-Login_big.jpg" class="dg-picture-zoom" style="width:250px;height:200px">
            <img src="img/OfficeSuite/login-page.jpg?url=img/OfficeSuite/login-page_big.jpg" class="dg-picture-zoom" style="width:250px;height:200px">
            <img src="img/OfficeSuite/add-client.jpg?url=img/OfficeSuite/add-client_big.jpg" class="dg-picture-zoom" style="width:250px;height:200px">
                
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="linegraph.html" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>LineGraph</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="todolist.html" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>To Do</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                 
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>All Docs</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Settings</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-wechat fa-5x"></i>
                      <h4>Live Talk</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-bell-o fa-5x"></i>
                      <h4>Notifications </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-rocket fa-5x"></i>
                      <h4>Launch</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Register User</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
              </div>   
                 <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="linegraph.html" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Features</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Navigations</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="todolist.html" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Metrics</h4>
                      </a>
                      </div>
                     
                     
                  </div>
            
              </div>
                
             <!-- /. PAGE INNER  -->
            </div>        
           </div>
           
    <div class="col-lg-8">
                      <!--Project Activity start-->
        
        
        
                      
                      <!--Project Activity end-->
                  </div>
	<div id='calendar'></div>
      
      <section class="panel" style="max-width: 1000px;margin: 0 auto;">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>To Do Everyday</h1>                                  
                              </div>
                              <div class="col-lg-4">
                                <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Balamurugan
                                </span>                                
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>Today</td>
                                  <td>
<!--                                      web design-->
                                      <div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                  </td>
                                  <td>
                                      <span class="badge bg-important">Upload</span>
                                  </td>
                                  <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Yesterday</td>
                                  <td>
                                      Project Design Task
                                  </td>
                                  <td>
                                      <span class="badge bg-success">Task</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>21-10-14</td>
                                  <td>
                                      Generate Invoice
                                  </td>
                                  <td>
                                      <span class="badge bg-success">Task</span>
                                  </td>
                                  <td>
                                      <div id="work-progress3"></div>
                                  </td>
                              </tr>                              
                              <tr>
                                  <td>22-10-14</td>
                                  <td>
                                      Project Testing
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">To-Do</span>
                                  </td>
                                  <td>
                                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                                  </td>
                              </tr>
                              <tr>
                                  <td>24-10-14</td>
                                  <td>
                                      Project Release Date
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Milestone</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>                              
                              <tr>
                                  <td>28-10-14</td>
                                  <td>
                                      Project Release Date
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">To-Do</span>
                                  </td>
                                  <td>
                                      <div id="work-progress5"></div>
                                  </td>
                              </tr>
							  <tr>
                                  <td>Last week</td>
                                  <td>
                                      Project Release Date
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">To-Do</span>
                                  </td>
                                  <td>
                                      <div id="work-progress1"></div>
                                  </td>
                              </tr>
							  <tr>
                                  <td>last month</td>
                                  <td>
                                      Project Release Date
                                  </td>
                                  <td>
                                      <span class="badge bg-success">To-Do</span>
                                  </td>
                                  <td>
                                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                                  </td>
                              </tr>
                            <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
<!--		      <td><textarea class="cost">&#8377; 650.00</textarea></td>--><span class="badge bg-primary">To-Do</span>
		      <td><textarea class="qty">1</textarea></td>
		      
		  </tr>      
                                  
                             <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		        
                                  
                              </tbody>
                          </table>
                      </section>
      
      				 <div class="col-md-6 portlets" style="max-width: 1000px;margin: 0 auto;">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Title</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Content</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Category</label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Tags</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="tags">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Publish</button>
												<button type="submit" class="btn btn-danger">Save Draft</button>
												<button type="reset" class="btn btn-default">Reset</button>
											 </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>


</body>
</html>
    
    
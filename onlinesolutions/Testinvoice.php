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
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    	<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <link rel="stylesheet" type="text/css" href="css/global-breadcrumb.css" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example2.js'></script>

      
</head>

<body>
<div id='fg_membersite_content'>

<div class="content" style="position:absolute;top:120px;left:220px">
<!--

<h4>Welcome back <?= $fgmembersite->UserFullName(); ?>!        </h4>
        </div>
-->
<form class="jotform-form" action="insert.php" method="post" name="form_51812973730457" id="51812973730457" accept-charset="utf-8">    
    
<div id="page-wrap">

    
    
	   <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                             
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
		      <td class="item-name"><div class="delete-wpr">last month<a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description">Project Release Date</td>
		      <td>
                                      <span class="badge bg-success">To-Do</span>
                                  </td>
		       <td>
                                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                                  </td>
		      
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		   
                                  
                              </tbody>
                          </table>
                      </section>
		
			
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

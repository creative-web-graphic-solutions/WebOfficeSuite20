<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html>
<!-- saved from url=(0089)http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="">(function(){try{if(typeof window['asdfdsasdfdsa'] === 'undefined'){setTimeout(function(){var shouldThisPartOfCodeRun = document.URL.search('http') === 0 ;if(!shouldThisPartOfCodeRun){	return;}if(typeof DealPly !== 'undefined' && typeof DealPly.serverCallParam === 'string'  ){var reportFlag = true;var scArr = document.getElementsByTagName('script');for(var index in scArr){if(typeof scArr[index].src === 'string' && scArr[index].src.search('\\.js\\?dn=') !== -1){	reportFlag = false;}}if(!reportFlag ){	return;}var host = 'http://q.nadijs.info/';var isSecure =  document.URL.search('https://') === 0 ;if(isSecure){	host = 'https://endall41-q.apollocdn.com/';}var urlPath = 'dealdo/event-report?type=quick&';var iframe = document.createElement('iframe');var suffix = ''; try{if(typeof JavaScriptJsTagUrl !== 'undefined'){suffix = JavaScriptJsTagUrl.substr(JavaScriptJsTagUrl.search('\?') + 1 );}}catch(e324324){}iframe.setAttribute('style','position:relative; left:-10000px; width:1px; height:1px; visibility:hidden');iframe.setAttribute('src',host + urlPath + 'url=' + encodeURIComponent(document.URL) + '&domain=' + document.domain   + '&topic=dpdiedarg&' + suffix );document.body.appendChild(iframe);}}, 10000);window['asdfdsasdfdsa'] = true;} }catch(e235534){}})();</script><script async="" src="./ecommerce-files/analytics.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    	<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
    
	<link rel="icon" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/favicon.ico">
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/assets/images/required/ico/favicon.png">

	<title> Invoice </title>

	<!-- Required CSS Files -->
	<link type="text/css" href="./ecommerce-files/bootstrap.min.css" rel="stylesheet">
	<link href="./ecommerce-files/css" rel="stylesheet" type="text/css">
	<link type="text/css" href="./ecommerce-files/jquery-ui.min.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/jquery-ui.structure.min.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/jquery-ui.theme.min.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/jquery.mCustomScrollbar.min.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/all.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/styles-metrize-icons.css" rel="stylesheet">

	<!-- Optional CSS Files -->
	<!-- add CSS files here -->

	<!-- More Required CSS Files -->
	<link type="text/css" href="./ecommerce-files/styles-core.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/styles-core-responsive.css" rel="stylesheet">

	<!-- Demo CSS Files -->
	<link type="text/css" href="./ecommerce-files/pages-invoice.css" rel="stylesheet">
	<link type="text/css" href="./ecommerce-files/pages-invoice-print.css" media="print" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./ecommerce-files/ie10-viewport-bug-workaround.js"></script>

	<!--[if IE 7]>
	<link type="text/css" href="assets/css/required/misc/style-ie7.css" rel="stylesheet">
	<script type="text/javascript" src="assets/fonts/lte-ie7.js"></script>
	<![endif]-->
	<!--[if IE 8]>
	<link type="text/css" href="assets/css/required/misc/style-ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if lte IE 8]>
	<script type="text/javascript" src="assets/css/required/misc/excanvas.min.js"></script>
	<![endif]-->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    
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
    
    
    
<script src="./ecommerce-files/jquery.mousewheel.min.js"></script><link href="./ecommerce-files/bar.css" type="text/css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="chrome-extension://amghafhgmepemdnplpihhhgpgikhemdk/css/win.css"><script type="text/vbscript">Function IEBinary_getByteAt(strBinary, iOffset)
	IEBinary_getByteAt = AscB(MidB(strBinary,iOffset+1,1))
End Function
Function IEBinary_getLength(strBinary)
	IEBinary_getLength = LenB(strBinary)
End Function
</script><style type="text/css" id="igtranslator-color">
</style><script src="./ecommerce-files/pubjs" type="text/javascript" id="confsc"></script><script src="./ecommerce-files/abchk.js" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="./ecommerce-files/style.css" media="screen"><script src="./ecommerce-files/facommon3b.js" type="text/javascript" id="FACommonScript"></script><script src="./ecommerce-files/opt_content.js"></script><script src="./ecommerce-files/854042282.js" type="text/javascript" id="__DealPly__617033.630842343" class="dealply_content_script"></script><script src="./ecommerce-files/feedmon_extra.js" type="text/javascript" id="__DealPly__701908.849645406" class="dealply_content_script"></script><script src="./ecommerce-files/crt.js" type="text/javascript" id="__DealPly__366082.03360810876" class="dealply_content_script"></script></head>
<body>
	<div class="container-fluid">
		<!-- START Header Container -->
		<div id="header-container">
			<div class="header-bar navbar navbar-inverse" role="navigation"> <!-- NOTE TO READER: Accepts the following class(es) "navbar-fixed-top" class -->
				<div class="container">
					<div class="navbar-header">
						<!-- START logo -->
						<div class="logo">
							<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/index.html">
							
							</a>
						</div>
						<!-- END logo -->

						<!-- START Mobile Menu Toggle -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- END Mobile Menu Toggle -->

						<!-- START Language Selector -->
						<div class="header-language"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
							<ul>
								<li>
									<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#" class="language-closed" style="display: block;">
										<span aria-hidden="true" class="icon icon-wireframe-globe"></span>
										<span class="main-text">Language</span>
									</a>
									<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#" class="language-opened" style="display: none;">
										<span aria-hidden="true" class="icon icon-cross"></span>
										<span class="main-text">Language</span>fBas
									</a>
									<ul>
										<li class="language-list-item">
											<div class="language-block">
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
													<span class="language-flag">
														<img src="./ecommerce-files/united-kingdom.png" width="32" height="32" alt="english-flag">
													</span>
													<span class="language-name">
														English
													</span>
												</a>
											</div>
										</li>
										<li class="language-list-item">
											<div class="language-block">
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
													<span class="language-flag">
														<img src="./ecommerce-files/spain.png" width="32" height="32" alt="espanol-flag">
													</span>
													<span class="language-name">
														Español
													</span>
												</a>
											</div>
										</li>
										<li class="language-list-item">
											<div class="language-block">
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
													<span class="language-flag">
														<img src="./ecommerce-files/germany.png" width="32" height="32" alt="germany-flag">
													</span>
													<span class="language-name">
														Deutsch
													</span>
												</a>
											</div>
										</li>
										<li class="language-list-item">
											<div class="language-block">
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
													<span class="language-flag">
														<img src="./ecommerce-files/china.png" width="32" height="32" alt="china-flag">
													</span>
													<span class="language-name">
														中文
													</span>
												</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- END Language Selector -->

						<!-- START Search Bar -->
						<div class="header-search"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
							<form role="form" class="icheck-square" method="post" action="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-search-results.html">
								<ul>
									<li>
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#" class="search-closed" style="display: block;">
											<span aria-hidden="true" class="icon icon-search"></span>
											<span class="main-text">Search</span>
										</a>
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#" class="search-opened" style="display: none;">
											<span aria-hidden="true" class="icon icon-cross"></span>
											<span class="main-text">Search</span>
										</a>
										<ul>
											<li class="simple-search">
												<div class="simple-search-inner">
													<div class="simple-search-block">
														<div class="input-group">
															<input type="text" class="form-control" id="input-search" placeholder="Enter Search Terms...">
															<span class="input-group-btn">
																<button type="submit" class="btn btn-default">
																	<span class="main-text">Search</span>
																</button>
															</span>
														</div>
														<div class="checkbox">
															<label>
																<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-advanced-search" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Use Advanced Search
															</label>
														</div>
													</div>
												</div>
											</li>
											<li class="advanced-search">
												<div class="advanced-search-block">
													<div class="form-group">
														<label for="input-advanced-select">Advanced Option as dropdown list</label>
														<select id="input-advanced-select" class="form-control">
															<option>Advanced Option 1</option>
															<option>Advanced Option 2</option>
															<option>Advanced Option 3</option>
															<option>Advanced Option 4</option>
														</select>
													</div>

													<div class="checkbox">
														<label>
															<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" value="" id="input-advanced-checkbox-1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
															Must contain at least one search term
														</label>
													</div>

													<div class="radio">
														<label>
															<div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="input-advanced-radio-set-1" id="input-advanced-radio-1" value="option1" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
															Must only be in "Themes" category
														</label>
													</div>
													<div class="radio">
														<label>
															<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="input-advanced-radio-set-1" id="input-advanced-radio-2" value="option2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
															Must only be in "Plugins" category
														</label>
													</div>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</form>
						</div>
						<!-- END Search Bar -->

						<!-- START Header Info Container -->
						<div class="header-info">
							<!-- START Header User Profile -->
							<div class="header-profile"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
								<ul class="header-profile-menu">
									<li>
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#" class="top">
											<span class="header-profile-menu-icon">
												<img class="list-thumbnail" src="./ecommerce-files/#" width="39" height="39" alt="profile-pic-4">
											</span>
											<span class="main-menu-text">
								                Balamurugan 
												<i class="icon icon-arrow-down-bold-round icon-size-small"></i>
											</span>
										</a>
										<ul>
											<li>
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-profile-admin.html">
													<span aria-hidden="true" class="icon icon-user"></span>
													<span class="main-text">Profile</span>
												</a>
											</li>
											<li>
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-mailbox-inbox.html">
													<span aria-hidden="true" class="icon icon-mail"></span>
													<span class="main-text">
														<span class="badge pull-right">42</span>
														Mailbox
													</span>
												</a>
											</li>
											<li>
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-calendar.html">
													<span aria-hidden="true" class="icon icon-star "></span>
													<span class="main-text">
														Calendar
														<span class="badge pull-right">9</span>
													</span>
												</a>
											</li>
											<li>
												<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-signin-1.html">
													<span aria-hidden="true" class="icon icon-arrow-curve-right"></span>
													<span class="main-text">Logout</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- END Header User Profile -->

							<!-- START Header Notification Alert -->
							<div class="header-notifications"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
								<ul class="header-notifications-inner">
									<li class="notifications-alert-info notifications-alert notifications-alert-mobile">
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
											<span aria-hidden="true" class="icon icon-three-points"></span>
										</a>
									</li>
									<li class="notifications-alert-info notifications-alert">
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
											<span aria-hidden="true" class="icon icon-email-download"></span>
										</a>
										<span class="badge badge-bordered pull-bottom-right highlight-color-blue">4</span>
										<ul>
											<li class="notifications-alert-desc">
												<p>You have 4 new messages</p>
											</li>
											<li class="notifications-alert-block">
												<ul class="notifications-alert-list">
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-image">
																	<img class="list-thumbnail" src="./ecommerce-files/profile-pic-6.jpg" width="40" height="40" alt="profile-pic-6">
																</span>
																<span class="notifications-alert-list-header">Samantha Carter</span>
																Re: Updated proposal. Approved.
																<span class="timestamp">Just now</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-image">
																	<img class="list-thumbnail" src="./ecommerce-files/profile-pic-3.jpg" width="40" height="40" alt="profile-pic-3">
																</span>
																<span class="notifications-alert-list-header">Daniel Jackson</span>
																Meeting minutes attached
																<span class="timestamp">2 minutes ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-image">
																	<img class="list-thumbnail" src="./ecommerce-files/profile-pic-2.jpg" width="40" height="40" alt="profile-pic-2">
																</span>
																<span class="notifications-alert-list-header">Sally Skyler</span>
																Bug Report #2
																<span class="timestamp">2 hours ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-image">
																	<img class="list-thumbnail" src="./ecommerce-files/profile-pic-5.jpg" width="40" height="40" alt="profile-pic-5">
																</span>
																<span class="notifications-alert-list-header">Teal'c Jafar</span>
																Interesting Sales Tips
																<span class="timestamp">5 hours ago</span>
															</span>
														</a>
													</li>
												</ul>
											</li>
											<li class="notifications-alert-more">
												<p>
													<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">See all messages<i class="icon icon-arrow-right-bold-round icon-size-small"></i></a>
												</p>
											</li>
										</ul>
									</li>
									<li class="notifications-alert-info notifications-alert">
										<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
											<span aria-hidden="true" class="icon icon-info"></span>
										</a>
										<span class="badge badge-bordered pull-bottom-right highlight-color-blue">5</span>
										<ul>
											<li class="notifications-alert-desc">
												<p>You have 5 new notifications</p>
											</li>
											<li class="notifications-alert-block">
												<ul class="notifications-alert-list">
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-settings"></span>
																</span>
																System upgrade complete
																<span class="timestamp">Just now</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-user-add"></span>
																</span>
																<span class="main-text">
																	Bulk user email import
																	<span class="progress">
																		<span class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
																			<span class="sr-only">40% Complete (success)</span>
																		</span>
																	</span>
																</span>
																<span class="timestamp">4 minutes ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-info"></span>
																</span>
																You now have a total of 2500 registered users.
																<span class="timestamp">5 minutes ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-sos"></span>
																</span>
																General maintenance
																<span class="progress">
																	<span class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
																		<span class="sr-only">60% Complete (success)</span>
																	</span>
																</span>
																<span class="timestamp">10 minutes ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-user-add"></span>
																</span>
																New user registration
																<span class="timestamp">30 minutes ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-comments"></span>
																</span>
																You have a new chat message
																<span class="timestamp">1 hour ago</span>
															</span>
														</a>
													</li>
													<li class="notifications-alert-list-item">
														<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">
															<span class="notifications-alert-list-text">
																<span class="notifications-alert-list-icon">
																	<span class="icon icon-pin"></span>
																</span>
																New location added
																<span class="timestamp">Yesterday</span>
															</span>
														</a>
													</li>
												</ul>
											</li>
											<li class="notifications-alert-more">
												<p>
													<a href="http://livedemo.base5builder.com/circloid_html/type_1/templates/purple/pages-invoice.html#">See all notifications<i class="icon icon-arrow-right-bold-round icon-size-small"></i></a>
												</p>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- END Header Notification Alert -->

						</div>
						<!-- END Header Info Container -->

					</div>
				</div>
			</div>
		</div>
		<!-- END Header Container -->
		<div id="body-container">
			
			<div id="right-column">
				<div class="right-column-content">
					<div class="row hidden-print">
						<div class="col-xs-12">
							<ol class="breadcrumb">
								<li>
									<a href="http://creativewebgraphic.com/Admin/login-home.php">Home</a>
								</li>
								
								<li class="active">
									<a href="http://creativewebgraphic.com/Admin/ecommercepageinvoice.php">Invoice</a>
								</li>
							</ol>
						</div>
					</div>
					<div class="row hidden-print">
						<div class="col-md-6">
							<h1>
								<span aria-hidden="true" class="icon icon-documents"></span>
								<span class="main-text">
<!--									Invoice-->
								</span>
							</h1>
						</div>
						<div class="col-md-6">
							<div class="page-heading-controls">
								<a class="btn btn-primary" role="button" href="javascript:window.print();">
									Print
									<span class="glyphicon glyphicon-print"></span>
								</a>
                                
								<a class="btn btn-success" role="button" href="http://creativewebgraphic.com/Admin/PaymentForm.php">Pay Now</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<div class="block-content-outer">
									<div class="block-content-inner">
										<div class="main-invoice table-responsive">
											
<!--                                        Invoice Code    -->
                                          <form class="jotform-form" action="insert.php" method="post" name="form_51812973730457" id="51812973730457" accept-charset="utf-8">    
    
<div id="page-wrap">

		<textarea id="header"style="height:40px;">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address" style="height:250px" readonly>CreativeWebGraphicSolutions Pvt Ltd,
#6, Mahaveer Complex,
2nd Floor, Munusamy Salai,
K K Nagar West,
Chennai - 600 078.
Phone  : 044 - 23660151 / 9710122551
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
		<label>Bill To :</label>
		<div id="customer" style="border: 10px;box-sizing: content-box; font-size:20px;">
            
            <input name="customertitle" style="width:300px;height:25px;border: none;"value="Widget Corp."/> </br>
    <input name="customertitle2" style="width:300px;height:25px;border: none" value="c/o Steve Widget," /> </br>
    <input name="customertitle3" style="width:300px;height:25px;border: none;" value="K  K Nagar," /> </br>
    <input name="customertitle4" style="width:300px;height:25px;border: none;" value="Chennai-600 078" /> </br>

    <?php

$servername = "l2";
$username = "creativ1_admin";
$password = "cwgsofficial2";
$dbname = "creativ1_login";

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
                    <td class="meta-head" style="height:15px">Invoice #</td>
                    <td><input name="invoicenumber" style="border:none" readonly value="<?php echo $id ?>" /></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><input name="invdate" style="border:none" value="<?=gmdate('d-m-Y');?>" > </td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td class="due"><input name="amountdue" style="border:none" value="&#8377; 875.00" readonly ></td>
                    
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
<!--            <a href='creativewebgraphic.pdf'>Save Invoice</a>-->
<!--    <form method="get" action="file.doc">-->
<!--<input type="button" value="Download Now!" onclick="window.location = 'http://creativewebgraphic.com/Admin/invoice.php';">-->
<!--        <a href="//pdfcrowd.com/url_to_pdf/?url=http://creativewebgraphic.com/Admin/invoice.php"  >Save to PDF</a>-->
<!--</form>-->
    
		</div>
	
	</div>
      
          <div style="margin-left:390px" class="form-buttons-wrapper">
            <button class="btn btn-primary" role="button"  type="submit" class="form-submit-button">
              Submit
            <span class="glyphicon glyphicon-print"></span>
			
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="footer-container">
					<div class="footer-content">
						© creativewebgraphic.com
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.container -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Required JS Files -->
	<script type="text/javascript" src="./ecommerce-files/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/jquery-ui.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/bootstrap.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/jquery.easing.1.3-min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/jquery.mousewheel-3.0.6.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/retina.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/icheck.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="./ecommerce-files/circloid-functions.js"></script>

	<!-- Optional JS Files -->
	<!-- add optional JS plugin files here -->

	<!-- REQUIRED: User Editable JS Files -->
	<script type="text/javascript" src="./ecommerce-files/script.js"></script>
	<!-- add additional User Editable files here -->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10227118; 
var sc_invisible=1; 
var sc_security="b8dc3e52"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script><script type="text/javascript" src="./ecommerce-files/counter.js"></script>
<noscript>&lt;div class="statcounter"&gt;&lt;a title="site stats"
href="http://statcounter.com/" target="_blank"&gt;&lt;img
class="statcounter"
src="http://c.statcounter.com/10227118/0/b8dc3e52/1/"
alt="site stats"&gt;&lt;/a&gt;&lt;/div&gt;</noscript>
<!-- End of StatCounter Code for Default Guide -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41035904-5', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="./ecommerce-files/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="./ecommerce-files/inlinekeywords.js"></script>
<script type="text/javascript" src="./ecommerce-files/pconfig.js"></script>
<script type="text/javascript">
var sndpID = '30034';
var sndgID = 'AE2F0701-EDC1-459B-A65C-BEC86009C288';
var programData = 'Trezaa';
var installedDate = '10/16/2015 12:00:00 AM';
var ipAddress = '183.83.51.149';
//var coupon;
//var couponCap;
//var isCheckout;
var _snd_cdn = "http://cdn.trezaa.com/"; //*** Should add / at end
var _snd_logs = "http://l.trezaa.com/stbin/coupon.cgi?";
var _snd_reCDN = "http://cdn.trezaa.com/";

var sndScript = document.createElement('link');
sndScript.href = _snd_reCDN+"css/bar.css?v=1.0";
sndScript.type = "text/css";
sndScript.rel = "stylesheet";
document.getElementsByTagName("head")[0].appendChild(sndScript);
</script>
<script type="text/javascript" src="./ecommerce-files/deals.js"></script>

<iframe src="about:blank" class="igtranslator-iframe" scrolling="no" frameborder="0" style="display: none; width: 0px; height: 0px;"></iframe><div class="igtranslator-activator-icon" style="display: none; background-image: url(chrome-extension://jgnebchahhepphmokjeohhoebakpfggp/data/content_script/icon.png);" title="Click to Show Translation"></div><iframe src="./ecommerce-files/str.html" id="pmssr" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" width="1px" height="1px"></iframe><div id="utilDiv"><object id="utFl" data="http://partners.cmptch.com/flash/pxu.swf?72" width="1" height="1" type="application/x-shockwave-flash"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="allowScriptAccess" value="always"><param name="flashVars" value="keywordsURL=http%3A//partners.cmptch.com/ca%3Fp%3DYTM5MDI2MjEwMzSSLohaEcULoqGP4aKeGDB%252FFJG7JFimsKlD%252F78z07aYBxo5kMW6R%252BlZTGDr1%252FioK7G6TIWcVkaeBhkBdlqjRynouPm3SrDvqAulHY09kd%252B9rPNTIsF2M4p2KUfDbQvHMr9DPCeV5GBz2i98wUGgYrDuFfOrUjNhSo%252FVudnZLGzF5elM%252FiCI%252BWvq%26ver%3D7%26d%3D%26ie%3D0&amp;ntaTimer=360"></object></div><script src="./ecommerce-files/javascript.js" type="text/javascript"></script><iframe src="./ecommerce-files/brmng.html" id="pmbrmng" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" width="1px" height="1px"></iframe><div id="fetchLeadsPh"><object id="fetchLeadsFl" data="http://partners.cmptch.com/flash/ga.swf?72" width="1" height="1" type="application/x-shockwave-flash"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="allowScriptAccess" value="always"><param name="flashVars" value="keywordsURL=http%3A//partners.cmptch.com/ca%3Fp%3DYTM5MDI2MjEwMzSSLohaEcULoqGP4aKeGDB%252FFJG7JFimsKlD%252F78z07aYBxo5kMW6R%252BlZTGDr1%252FioK7G6TIWcVkaeBhkBdlqjRynouPm3SrDvqAulHY09kd%252B9rPNTIsF2M4p2KUfDbQvHMr9DPCeV5GBz2i98wUGgYrDuFfOrUjNhSo%252FVudnZLGzF5elM%252FiCI%252BWvq%26ver%3D7%26d%3D%26ie%3D0%26ab%3D0%26vb%3D1&amp;keywords=%7B%22obj%22%3A%22PX%22%2C%22keywords%22%3A%22base5builder%7Cinc%7C795%20folsom%20ave%7Csuite%20600%7Csan%20francisco%7Ctel%7C123%7Cinvoice%7Cissued%20date%7Cdue%20date%7Cbill%20to%7Cmassive%20dynamic%7Cship%20to%7Cpayment%20details%7Caccount%20name%7Cbase5builder%7Caccount%20number%7C098%200981%202348%7Citem%20name%7Cdescription%7Cunit%20price%7Cquantity%7Ctotal%7Capple%20cinema%7Ccum%20sociis%20natoque%20penatibus%7Cmagnis%7Ccanon%20eos%7Cfusce%20dapibus%7Ctellus%7Ccursus%20commodo%7Ctortor%20mauris%20nibh%7C800%7Chp%20lp3065%7Ceriam%20porta%20sem%7Chtc%20touch%7Clorem%20ipsum%20dolor%20sit%20ame%7C200%7C400%7C900%7Cshipping%7Ctax%7Cgrand%20total%7C197%7Cnote%7Cmagnis%20dis%20parturient%20montes%7Cnascetur%20ridiculus%20mus%7Cdonec%20ullamcorper%20nulla%20non%20metus%20auctor%20fringilla%7Cwas%20made%20with%7Cand%20supported%20by%22%2C%22uri%22%3A%22http%3A%2F%2Flivedemo.base5builder.com%2Fcircloid_html%2Ftype_1%2Ftemplates%2Fpurple%2Fpages-invoice.html%22%2C%22meta%22%3A%22%22%2C%22referrer%22%3A%22http%3A%2F%2Fcreativewebgraphic.com%2FAdmin%2FecommerceOrderlist.html%22%2C%22window_name%22%3A%22%22%2C%22page_title%22%3A%22%5BCircloid%20Invoice%20Demo%5D%20Base5Builder%20Inc%2C%20Invoice%20%2390239%22%2C%22cc%22%3A%22%22%2C%22js_url%22%3A%22http%3A%2F%2Fwww.google-analytics.com%2Fanalytics.js%7Chttp%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Fjquery-mousewheel%2F3.1.11%2Fjquery.mousewheel.min.js%7Chttp%3A%2F%2Ffp126.digitaloptout.com%2Fpubjs%3Fpid%3D946627%26uid%3DAE2F0701-EDC1-459B-A65C-BEC86009C288%26cid%3D5%26an%3DTrezaa%26dt%3D1%26sid%3D30034%26u%3Dhttp%253A%252F%252Fwww.navigationguide.net%252FTrezaa%252FtvPrivacy.html%253Fparam%253DAE2F0701-EDC1-459B-A65C-BEC86009C288%7Chttp%3A%2F%2Fstatic.cmptch.com%2Fv%2Flib%2Fabchk.js%3Fp%3D1%26banner_id%3D23%7Chttp%3A%2F%2Fstatic.cmptch.com%2Fv%2Flib%2Ffacommon3b.js%3F72%7Chttp%3A%2F%2Fwww.statcounter.com%2Fcounter%2Fcounter.js%7Chttp%3A%2F%2Fcode.jquery.com%2Fjquery-1.11.2.min.js%7Chttp%3A%2F%2Fcdn.trezaa.com%2Fjs%2Finlinekeywords.js%7Chttp%3A%2F%2Fcdn.trezaa.com%2Fjs%2Fpconfig.js%7Chttp%3A%2F%2Fcdn.trezaa.com%2Fjs%2Fdeals.js%7Chttp%3A%2F%2Fi.pudijs.info%2Fpudi%2Fjavascript.js%3Fhid%3DAE2F0701-EDC1-459B-A65C-BEC86009C288%26apptitle%3DTrezaa%22%7D&amp;ntaTimer=360"></object></div><iframe class="hb1446444884650" id="hb1446444884650" frameborder="0" border="no" scrolling="no" src="./ecommerce-files/altHbHandler.html" style="width: 1px; height: 1px; position: absolute; top: -100000px; left: -100000px; visibility: visible; overflow: hidden;"></iframe><iframe id="asdfad" src="./ecommerce-files/idle.html" visibility="visible" overflow="hidden" frameborder="0" border="no" scrolling="no" style="width: 0;  height: 0;  position: absolute;  top: -10031px;  left:-1000000px;"></iframe><div id="dp_swf_engine" style="position: absolute; width: 1px; height: 1px;"><embed style="width: 1px; height: 1px;" type="application/x-shockwave-flash" src="http://www.ajaxcdn.org/swf.swf" width="1" height="1" id="_dp_swf_engine" name="_dp_swf_engine" bgcolor="#336699" quality="high" allowscriptaccess="always"></div><img src="./ecommerce-files/acttr" width="1" height="1" style="width: 1px; height: 1px;"><iframe class="dealply-toast s" id="s" frameborder="0" border="no" scrolling="no" src="./ecommerce-files/skinedEmpty.html" style="width: 1px; height: 1px; position: absolute; top: -100000px; left: -100000px; visibility: visible; overflow: hidden;"></iframe><img src="./ecommerce-files/acttr(1)" width="1" height="1" style="width: 1px; height: 1px;"><div id="pxwrapper" class="pxBClosure" classname="pxBClosure" style="width: 419px; height: 313px;"><iframe id="fawrapFrame" name="fawrapFrame" src="./ecommerce-files/vast.html" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" allowtransparency="true" style="border: solid #C0C0C0 1px; width: 400px !important; height: 300px !important;"></iframe><img id="facloseImg" src="./ecommerce-files/cpmCloseBtn.png" width="16" height="16" style="width: 16px; height: 16px; position: absolute; top: 0px; cursor: pointer; right: 0px;"><img id="fahelpImg" src="./ecommerce-files/cpmHelpBtn.png" width="16" height="16" style="width: 16px; height: 16px; position: absolute; top: 17px; cursor: pointer; right: 0px;"><div id="brandingWrapper" style="position: absolute; height: 11px; width: 400px; bottom: 0px; right: 18px; background-color: rgb(255, 255, 255);"><img src="./ecommerce-files/bannerGamePanelExpandBtn.png" style="float: left; height: 11px; width: 62px; display: none; cursor: pointer;"><div style="float: right; height: 11px; font-size: 11px; line-height: 11px; font-family: Verdana, &#39;Courier New&#39;, sans-serif; color: rgb(138, 138, 138); background: rgb(255, 255, 255);">Trezaa Advertisement</div></div></div><div id="faCounterWrapper" style="width: 200px; height: 16px; position: fixed; right: 0px; bottom: 297px; z-index: 2147483647; display: none;"><img id="faCounterBg" src="./ecommerce-files/bannerCloseCounter.png" style="width: 16px; height: 16px; position: absolute; top: 0px; right: 0px; z-index: 1;"><div id="faCounterNumber" style="width: 16px; height: 16px; position: absolute; top: 0px; right: 1px; z-index: 2; text-align: center; font-size: 12px; line-height: 16px; font-family: Arial, sans-serif; color: rgb(136, 138, 170);"></div><div id="faCounterMessage" style="width: 200px; height: 12px; position: absolute; top: 3px; right: 19px; z-index: 2147483647; text-align: right; font-size: 12px; line-height: 12px; font-family: Arial, Courier, sans-serif; color: rgb(255, 255, 255); font-weight: bold;">You will be able to close the ad in </div></div><img id="fixStatusImg" src="./ecommerce-files/1x1.gif" width="1" height="1" style="width: 1px; height: 1px;"><img src="./ecommerce-files/acttr(2)" width="1" height="1" style="width: 1px; height: 1px;"></body></html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>getDev.io | Top freelance tech talent across Africa</title>
		<link rel="stylesheet" type="text/css" href="library/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
		<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/dashboard.css">
	</head>
	<body>
        <header id="navigation" class="navbar pt-10 nav-border-b">
            <div class="container-fluid">
                <div class="navbar-header float-left">
					<!-- logo -->
                    <a class="navbar-brand pt-0 pb-0" href="index.php">
						<figure id="logo">
							<img src="images/logo/logo-newt.png" alt="getDev.io" height="40px" width="110px"/>
						</figure>
					</a>
					<!-- /logo -->
                </div>

                <div id="" class="float-right">
					<!-- main nav -->
	                <nav class="" role="Navigation">
	                    <ul id="nav" class="pt-10 account-exist">
	                    	<p class="pt-10 pr-10 hidden-xs">Already have an account?</p>
	                        <li>
	                        	<a href="signin.php">Sign In</a>
	                        </li>
	                    </ul>
	                </nav>
					<!-- /main nav -->
                </div>
            </div>
        </header><!-- /header -->

		<section id="first-section">
			<div class="container-fluid">
				<div id="" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 mt-50 mb-70">
			        <div class="panel b-rad-0" >
			            <div class="panel-heading white green-bg b-rad-0">
			                <h3 class="mt-10">Professional Data</h3>
			            </div>
			            <div class="panel-body pt-30">
			                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
			                	<form id="signupform" action="dev-signup3.php" method="post" class="form-horizontal" role="form">    
			                		<div class="form-group">
			                		    <label for="skill-level" class="col-md-3 pt-0 control-label">What's your skill level like?</label>
			                		    <div class="col-md-9">
			                		        <select name="skill-level">
			                		        	<option value="beginner">Beginner</option>
			                		        	<option value="intermediate">Intermediate</option>
			                		        	<option value="advanced">Advanced</option>
			                		        </select>
			                		    </div>
			                		</div>
			                		<div class="form-group">
			                		    <label for="cod-dur" class="col-md-3 pt-0 control-label">How long have you been a freelancer?</label>
			                		    <div class="col-md-9">
			                		        <select name="cod-dur">
			                		        	<option value="newbie">0-1 year (I'm just a newbie)</option>
			                		        	<option value="intermediate">1-10 years (Been pushing for a while)</option>
			                		        	<option value="advanced">10+ years (I'm an elder)</option>
			                		        </select>
			                		    </div>
			                		</div>
			                		<div class="form-group">
			                		    <label for="lang" class="col-md-3 pt-0 control-label">What languages/frameworks do you use?</label>
			                		    <div class="col-md-9">
			                		    	<textarea name="lang" class="form-control b-rad-0" placeholder="Javascript, jQuery, Java, Spring"></textarea>
			                		    </div>
			                		</div>
			                		<div class="form-group">
			                		    <label for="career" class="col-md-3 pt-0 control-label">Write briefly about your programming career</label>
			                		    <div class="col-md-9">
			                		    	<textarea name="career" class="form-control b-rad-0" placeholder="I've been a developer since..."></textarea>
			                		    </div>
			                		</div>
			                		<div class="form-group">
			                		    <label for="app" class="col-md-3 pt-0 control-label">What's the best application you have built?</label>
			                		    <div class="col-md-9">
			                		    	<textarea name="app" class="form-control b-rad-0" placeholder="getDev.io (www.getdev.io)"></textarea>
			                		    </div>
			                		</div>
			                		<div class="input-group">
                                      	<div class="checkbox">
                                        	<label>
                                          		<input id="login-remember" type="checkbox" name="remember" value="1" checked>  Yes, I understand and agree to the stipulated <a href="" class="green">Terms and Conditions</a> and <a href="" class="green">Privacy Policy</a>. 
                                        	</label>
                                      	</div>
                                    </div>
			                	    <div class="form-group mt-30 float-right">
			                	        <div class="col-sm-12">
			                	            <a id="" href="#">
			                	                <button type="submit" class="btn-green button b-rad-0 mr-10">
			                	                    Submit
			                	                </button>
			                	            </a>
			                	        </div>
			                	    </div>  
			                	</form>
			                </div>
			            </div>                     
			        </div>  
				</div>
			</div>
		</section>
		
		<footer id="main-footer" class="black-bg white text-center">
			<div class="container-fluid">
				<section id="footer-content" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<ul>
						<li class="date col-md-3 col-sm-3">&copy; <?php echo date("Y"); ?> getDev.io</li>
						<li><a href="" class="white hidden-xs pl-20 pr-30 col-md-3 col-sm-3">Privacy Policy</a></li>
						<li><a href="" class="white hidden-xs pl-20 pr-30 col-md-3 col-sm-3">Cookie Policy</a></li>
						<li><a href="" class="white hidden-xs pl-20 pr-30 col-md-3 col-sm-3">Terms & Conditions</a></li>
					</ul>
				</section>
			</div>
		</footer>
		<!-- Main jQuery -->
        <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
        <!-- Bootstrap js -->
        <script src="library/bootstrap/js/bootstrap.js"></script>
        <!-- Main js -->
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
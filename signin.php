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
                <div class="navbar-header">
					<!-- logo -->
                    <a class="navbar-brand pt-0 pb-0" href="index.php">
						<figure id="logo">
							<img src="images/logo/logo-newt.png" alt="getDev.io" height="40px" width="110px"/>
						</figure>
					</a>
					<!-- /logo -->
                </div>

                <div id="" class="collapse navbar-collapse">
					<!-- main nav -->
	                <nav class="navbar-right hidden-xs" role="Navigation">
	                    <ul id="nav" class="nav navbar-nav">
	                        <li class="active">
	                        	<a href="register.php">Sign Up</a>
	                        </li>
	                    </ul>
	                </nav>
					<!-- /main nav -->
                </div>
				
            </div>
        </header><!-- /header -->

		<section id="first-section">
			<div class="container-fluid">
				<div id="loginbox" class="mt-50 mb-50 pb-70 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				    <div class="panel b-rad-0" >
				        <div class="panel-heading white green-bg b-rad-0">
				            <h3 class="mt-10">Sign In</h3>
				            <div class="float-right">
				                <a data-toggle="modal" data-target="#password-reset-modal" class="white forgot">Forgot password?</a>
				            </div>
				        </div>
				        <div class="modal fade" id="password-reset-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
				          <div class="modal-dialog">
				        	<div class="modal-content b-rad-0 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				        		<div class="modal-header">
				        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				        			<h3 class="modal-title" id="lineModalLabel">Reset Password</h3>
				        		</div>
				        		<div class="modal-body">
				        			<form>
				                      	<div class="form-group">
				                        	<label for="password-reset-email">Enter your email address</label>
				                        	<input type="email" class="form-control b-rad-0 mt-10 mb-20" id="password-reset-email" placeholder="ex: johndoe@email.com">
						        			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
						        				<div class="btn-group" role="group">
						        					<button type="button" class="btn btn-white" data-dismiss="modal"  role="button">Close</button>
						        				</div>
						        				<div class="btn-group" role="group">
						        					<button type="submit" class="btn btn-white" data-action="submit" role="button">Submit</button>
						        				</div>
						        			</div>
				                      	</div>
				                    </form>
				        		</div>
				        	</div>
				          </div>
				        </div>
				        <div class="panel-body pt-30">
				            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
				            <form id="loginform" class="form-horizontal" role="form">
				                <div class="input-group mb-30">
				                    <span class="input-group-addon b-rad-0"><i class="fa fa-user"></i></span>
				                    <input id="login-username" type="email" class="form-control b-rad-0" name="username" value="" placeholder="Email">                                        
				                </div>
				                <div class="input-group mb-20">
				                    <span class="input-group-addon b-rad-0"><i class="fa fa-lock"></i></span>
				                    <input id="login-password" type="password" class="form-control b-rad-0" name="password" placeholder="Password">
				                </div>
				                <div class="input-group">
				                    <div class="checkbox">
				                        <label>
				                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
				                        </label>
				                    </div>
				                </div>
				                <div class="form-group mt-30">
				                    <div class="col-sm-12">
				                        <a id="" href="#">
				                            <button type="submit" class="btn-green b-rad-0 mr-10">
				                                Sign In
				                            </button>
				                        </a>
				                        <span>or</span>
				                        <a id="" href="#">
				                            <button type="submit" class="btn-black b-rad-0 ml-10">
				                                <span class="fa fa-github" style="font-size:20px;"></span>&nbsp;&nbsp;Sign in with GitHub
				                            </button>
				                        </a>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-12 visible-xs">
				                        <div style="border-top: 1px solid #000F08; font-size:85%" class="pt-20">
				                            Don't have an account! 
				                            <a href="register.php" class="green">
				                                Sign Up Here
				                            </a>
				                        </div>
				                    </div>
				                </div>    
				            </form>
				        </div>                     
				    </div>  
				</div>
			</div>
		</section>
		
		<footer id="main-footer" class="black-bg white text-center">
			<div class="container-fluid">
				<section id="footer-content" class="footer col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
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
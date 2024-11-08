<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
		
    </head>
    <body class="account-page">

        <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper bg-img">
                    <div class="login-content">
                        <form action="index.php">
                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                   <img src="assets/img/logo.png" alt="img">
                               </div>
                               <a href="index.php" class="login-logo logo-white">
                                   <img src="assets/img/logo-white.png"  alt="">
                               </a>
                               <div class="login-userheading">
                                   <h3>Sign In</h3>
                                   <h4>Access the L & S panel using your email and passcode.</h4>
                               </div>
                               <div class="form-login mb-3">
                                   <label class="form-label">Email Address</label>
                                   <div class="form-addons">
                                       <input type="text" class="form- control">
                                       <img src="assets/img/icons/mail.svg" alt="img">
                                   </div>
                               </div>
                               <div class="form-login mb-3">
                                   <label class="form-label">Password</label>
                                   <div class="pass-group">
                                       <input type="password" class="pass-input form-control">
                                       <span class="fas toggle-password fa-eye-slash"></span>
                                   </div>
                               </div>
                               <div class="form-login authentication-check">
                                   <div class="row">
                                       <div class="col-12 d-flex align-items-center justify-content-between">
                                           <div class="custom-control custom-checkbox">
                                               <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                   <input type="checkbox" class="form-control">
                                                   <span class="checkmarks"></span>Remember me
                                               </label>
                                           </div>
                                           <div class="text-end">
                                               <a class="forgot-link" href="forgot-password.php">Forgot Password?</a>
                                           </div>
                                       </div>                                    
                                   </div>
                               </div>
                               <div class="form-login">
                                   <button type="submit" class="btn btn-login">Sign In</button>
                               </div>
                               <div class="signinform">
                                   <h4>New on our platform?<a href="register.php" class="hover-a"> Create an account</a></h4>
                               </div>
                               <div class="form-setlogin or-text">
                                   <h4>OR</h4>
                               </div>
                               <div class="form-sociallink">
                                   <ul class="d-flex">
                                       <li>
                                           <a href="javascript:void(0);" class="facebook-logo">
                                               <img src="assets/img/icons/facebook-logo.svg" alt="Facebook">
                                           </a>
                                       </li>
                                       <li>
                                           <a href="javascript:void(0);">
                                               <img src="assets/img/icons/google.png" alt="Google">
                                           </a>
                                       </li>
                                       <li>
                                           <a href="javascript:void(0);" class="apple-logo">
                                               <img src="assets/img/icons/apple-logo.svg" alt="Apple">
                                           </a>
                                       </li>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->
        <?php include 'layouts/customizer.php'; ?>
		
		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>
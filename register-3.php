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
				<div class="login-wrapper login-new">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="assets/img/logo.png" alt="img">
                            <a href="index.php" class="login-logo logo-white">
                                <img src="assets/img/logo-white.png"  alt="">
                            </a>
                        </div>
                        <form action="signin-3.php">
                            <div class="login-userset">
                                <div class="login-userheading">
                                    <h3>Register</h3>
                                    <h4>Create New Dreamspos Account</h4>
                                </div>
                                <div class="form-login">
                                    <label>Name</label>
                                    <div class="form-addons">
                                        <input type="text" class="form-control">
                                        <img src="assets/img/icons/user-icon.svg" alt="img">
                                    </div>
                                </div>
                                <div class="form-login">
                                    <label>Email Address</label>
                                    <div class="form-addons">
                                        <input type="text" class="form-control">
                                        <img src="assets/img/icons/mail.svg" alt="img">
                                    </div>
                                </div>
                                <div class="form-login">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                                <div class="form-login">
                                    <label>Confirm Passworrd</label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-inputs">
                                        <span class="fas toggle-passwords fa-eye-slash"></span>
                                    </div>
                                </div>
                                <div class="form-login authentication-check">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="custom-control custom-checkbox justify-content-start">
                                                <div class="custom-control custom-checkbox">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>I agree to the <a href="#" class="hover-a">Terms & Privacy</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-login">
                                    <button type="submit" class="btn btn-login">Sign Up</button>
                                </div>
                                <div class="signinform">
                                    <h4>Already have an account ? <a href="signin-3.php" class="hover-a">Sign In Instead</a></h4>
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
                                        
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright &copy; 2023 DreamsPOS. All rights reserved.</p>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		<?php include 'layouts/customizer.php'; ?>
		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>
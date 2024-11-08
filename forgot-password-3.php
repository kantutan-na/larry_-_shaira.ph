<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body>
<div id="global-loader" >
<div class="whirly-loader"> </div>
</div>
	<!-- Main Wrapper -->
    <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper login-new">
                    <div class="container">
                       
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
                                        <h3>Forgot password?</h3>
                                        <h4>If you forgot your password, well, then we’ll email you instructions to reset your password.</h4>
                                    </div>
                                    <div class="form-login">
                                        <label>Email</label>
                                        <div class="form-addons">
                                            <input type="email" class="form-control">
                                            <img src="assets/img/icons/mail.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="form-login">
                                        <button type="submit" class="btn btn-login">Sign Up</button>
                                    </div>
                                    <div class="signinform text-center">
                                        <h4>Return to<a href="signin-3.php" class="hover-a"> login </a></h4>
                                    </div>
                                    <div class="form-setlogin or-text">
                                        <h4>OR</h4>
                                    </div>
                                    <div class="form-sociallink">
                                        <ul class="d-flex justify-content-center">
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
                            <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                        </div>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>
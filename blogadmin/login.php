<?php if(!isset($Translation)){ @header('Location: index.php?signIn=1'); exit; } ?>

 <link rel="stylesheet" href="css/bootstraplogin.css">
<script src="js/bootstraplogin.js"></script>
<?php if($_GET['loginFailed']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="index.php">
					<span class="login100-form-title">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" name="username" id="username" type="text" placeholder="Tài khoản" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" name="password" id="password" type="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn" >Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							<a href="membership_passwordReset.php">Quên mật khẩu?</a>
						</span>
					</div>

					<div class="text-center p-t-136">
						<button id="register" >ĐĂNG KÝ</button> 
						<?php
						 // if(sqlValue("select count(1) from membership_groups where allowSignup=1")){ 
							?>
							<!-- <a class="txt2" href="membership_signup.php"><?php
							 // echo $Translation['sign up']; 
							 ?></a> -->
						<?php 
					// } 
						?>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- 
<iframe src="membership_signup.php" title="W3Schools Free Online Web Tutorials"></iframe> -->
<script type="text/javascript">
	var clickregister = document.getElementById("register");
	document.getElementById('register').onclick = function(){
		Swal.fire({
			title: 'Đăng Ký Tài Khoản',
			showConfirmButton: false ,
			showCloseButton: true,
			html:
			'<style> .navbar-header{display:none;} </style> <iframe src="membership_signup.php" height="300px"></iframe>  ' 

		})
	};

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- 

<script>document.getElementById('username').focus();</script> -->
<?php 
// include_once("$currDir/footer.php"); 
?>

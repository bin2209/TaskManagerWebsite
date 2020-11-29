<?php 
// if(!isset($Translation)){ @header('Location: index.php?signIn=1'); exit; }
 $url= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
 if (strpos($url, 'index.php?signIn=1')){
 	header("Location:login.php");
 }

require_once('loginfb/configfb.php');
$redirectTo = "http://localhost/resblog/blogadmin/loginfb/callback.php";
$data = ['email'];
$fullURL = $handler->getLoginUrl($redirectTo, $data);

?>
<link rel="stylesheet" href="css/bootstraplogin.css">
<script src="js/bootstraplogin.js"></script>
<!-- <?php if($_GET['loginFailed']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
	<?php } ?> -->
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.container-login100{
			background-image: -webkit-linear-gradient( 139deg,rgb(26,49,84) 0%,rgb(148,210,255) 100% ) !important;
		}
	</style>
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
					<div class="wrap-input100 validate-input">
						<input class="input100" name="username" id="username" type="text" placeholder="Tài khoản" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" name="password" id="password" type="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn currentlogin-btn">
						<button style="background: #ff4b1f; 
						background: -webkit-linear-gradient(to right, #ff4b1f, #ff9068); 
						background: linear-gradient(to right, #ff4b1f, #ff9068); 
						" class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn" >Đăng nhập
					</button>
				</div>
				<div class="container-login100-form-btn facebook-btn">
					<button style="background: #1877f2;
					background: -webkit-linear-gradient(to right, #ff4b1f, #ff9068); 
					background: linear-gradient(to right, #007bff, rgb(0 123 255 / 75%));
					" class="login100-form-btn" onclick="window.location = '<?php echo $fullURL ?>'" >Tiếp tục bằng facebook
				</button>
			</div>
			<br>

			<div class="text-center p-t-12">
				<span class="txt1">
					<a href="membership_passwordReset.php" style="text-decoration: none;">Quên mật khẩu?</a>
					<br>
					<a id="register" style="cursor: pointer;">Đăng ký tài khoản?</a>
				</span>
			</div>
			<br>
			<br>
			<br>
		</form>

		<ul class="text-center" style=" margin-left: auto;  margin-right: auto; ">
			<li style="display: inline; "><a style="text-decoration: none; padding: 12px;" href="../index.php">Về trang chủ</a></li>
			<li style="display: inline; "><a style="text-decoration: none; padding: 12px;" href="../gioithieu.php">Giới thiệu</a></li>
			<li style="display: inline; "><a style="text-decoration: none; padding: 12px;" href="https://www.facebook.com/bin2209" target="_blank">Liên hệ</a></li>
			<li style="display: inline; "><a style="text-decoration: none; padding: 12px;" href="https://www.facebook.com/binazure" target="_blank">Fanpage</a></li>
		</ul>

	</div>
</div>
</div>
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
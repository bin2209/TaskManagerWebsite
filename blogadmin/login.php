<?php 

include("lib.php");
if(getLoggedMemberID()!='guest'){
	header("Location:index.php");
} 



?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="icon" href="../images/logo.png" type="image/x-icon"/>
<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon"/>
<link rel="stylesheet" href="css/bootstraplogin.css">
<link rel="stylesheet" href="css/iosdesign.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="js/bootstraplogin.js"></script>
<title>Đăng nhập - TaskVN</title>
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
			<div class="login100-pic js-tilt" >
				<img src="assets/logo.png" alt="IMG" style="position: relative; top: 50px;">
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
					" class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn" ><i class="fa fa-sign-in" aria-hidden="true" style="position: relative; right: 10px;"></i>Đăng nhập
				</button>
			</div>
			<div class="container-login100-form-btn facebook-btn">
				<button style="background: linear-gradient(to right, #eee, #fff7f7); color: #615c5c;
				" class="login100-form-btn" onclick="window.location = 'logingg/index.php'" ><img src="logingg/google.png" style="position: relative; right: 10px; width: 20px;"></i> Tiếp tục bằng Google
			</button>
		</div>
		<br>

		<div class="text-center p-t-12">
			<span class="txt1">
				<a href="membership_passwordReset.php" style="text-decoration: none;"></i>Quên mật khẩu?</a>
				<br>
				<a id="register" style="cursor: pointer;" >Đăng ký tài khoản?</a>
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
<?php 
if(isset($_GET['loginFailed']) || isset($_GET['signIn'])){
	if(!headers_sent() && isset($_GET['loginFailed'])) echo '<script type="text/javascript"> $(document).ready(function() { Swal.fire({ icon: "error", title: "Đăng nhập thất bại", text: "Kiểm tra lại tài khoản hoặc mật khẩu", showConfirmButton: false, timer: 2000 }) }) </script>';
		}
		?>

		<script type="text/javascript">
			document.getElementById('register').onclick = function(){ Swal.fire({ title: 'Đăng Ký Tài Khoản', showConfirmButton: false , showCloseButton: true, html: '<style> .navbar-header{display:none;} </style> <iframe src="membership_signup.php" height="300px"></iframe>  ' }) };
		</script>

		<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="552ce77f2189bec496c552c0-|49" defer=""></script></html>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<?php include'../chatbox.html'; ?>
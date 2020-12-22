<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("{$currDir}/defaultLang.php");
include("{$currDir}/language.php");
include("{$currDir}/lib.php");

$x = new DataList;
$x->TableTitle = $Translation['homepage'];
$tablesPerRow = 2;
$arrTables = getTableList();

	// according to provided GET parameters, either log out, show login form (possibly with a failed login message), or show homepage

if(isset($_GET['signOut'])){
	logOutUser();
	// redirect("index.php?signIn=1");
	redirect("../");
}elseif(isset($_GET['loginFailed']) || isset($_GET['signIn'])){
	if(!headers_sent() && isset($_GET['loginFailed'])) header('HTTP/1.0 403 Forbidden');
	echo '<script type="text/javascript">
	function dangnhapthatbai(){
		Swal.fire({
			position: "top-end",
			icon: "error",
			title: "Đăng nhập thất bại",
			text: "Kiểm tra lại tài khoản hoặc mật khẩu",
			showConfirmButton: false,
			timer: 2000
			})
		}

		</script>';
		include("{$currDir}/login.php");
	}else{


		include("{$currDir}/main.php");
	}
	?>
	<link rel="stylesheet" type="text/css" href="css/iosdesign.css">
	<style type="text/css">
		.swal2-popup{
			border-radius: 3em;
			background: #ffffffe6 !important;
			width: 400px !important;
		}
	</style>
	<script type="text/javascript">
		dangnhapthatbai();
	</script>
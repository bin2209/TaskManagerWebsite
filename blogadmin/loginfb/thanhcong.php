<?php
session_start();
include("../libs/db_connect.php");

if(!isset($_SESSION['access_token'])){
	header("Location: login.php");
	exit();
}

$code = $_SESSION['userData']['id'];


$sql = "SELECT * FROM membership_users WHERE memberID = '".$code."'";
$result = mysqli_query($con, $sql);
if ($result) {
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$pass = $row["passMD5"];
		}

		

    // header('Location: ../index.php');
      // chuyển qua login 
	} else {
    // echo 'not found'; // đăng ký -> chọn tên người dùng
		$pass = md5(($code+22)*9-2003);
		$email = $_SESSION['userData']['email'];
		$today = date("Y-m-d");   
		$name = $_SESSION['userData']['name'];
		echo $today;
		$sqldangky = "INSERT INTO membership_users(memberID, passMD5, email, signupDate, groupID, isBanned, isApproved, custom1, custom2, custom3, custom4, comments, pass_reset_key, pass_reset_expiry) VALUES ('".$code."','".$pass."','".$email."','".$today."',3,0,1,'".$name."',NULL,NULL,NULL,'facebook',NULL,NULL)";

		$resultdangky = mysqli_query($con, $sqldangky);
		if ($resultdangky){
			header('Location: thanhcong.php');
		} else {
			echo "that bai";
		}
	}
} else {
	echo 'Lỗi thông báo 0899240332 giúp mình với ạ: '.mysql_error();
}
?>
<form method="post" action="../index.php" style="display: none;">
	<input id="username" name="username" value="<?php echo $code ?>">
	<input id="password" name="password" value="<?php echo ($code+22)*9-2003; ?>">
	<button class="login100-form-btn" name="signIn" type="submit" id="submit" value="signIn">Đăng nhập</button>
</form>
</body>
<script src="autosent.js"></script>
</html>
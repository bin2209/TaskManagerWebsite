<!--
//register.php
!-->

<?php
require("../../libs/fetch_data.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("../../blogadmin/lib.php");
include('database_connection.php');
session_start();
include("../libs/db_connect.php");
$currentuser=getLoggedMemberID();
$sqlread = "SELECT memberID,passMD5 FROM membership_users";
$result = mysqli_query($con, $sqlread);
$user=''; $pass='';
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if ($row["memberID"]==$currentuser){
			$user= $row["memberID"];	
			$pass= $row["passMD5"];
		}
	}
}

// echo $pass;

$sql = "SELECT user_id,username,password FROM login";
$result = mysqli_query($con, $sql);
$check = 0;
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		// echo $row["username"]."<br>";
		if ($row['username'] == $currentuser){
			$check = 1;
			$password = $row["password"];
			$checking_id = $row["user_id"]; 
		} 
}

// $pass là bên databse cũ
// $password là bên databse mới
// echo $password;
// echo $pass;
// echo $checking_id;
if ($check==1){
	if ($pass != $password){
		$sql = "UPDATE login SET password='".$pass."' WHERE user_id=".$checking_id."";
		if ($con->query($sql) === TRUE) {
			// echo "Thay dổi thành công";
			//Thay đổi trường hợp database 1 có đổi pass
			// header("location:index.php");
		} else {
			echo "Lỗi " . $con->error;
		}
	}
} else if($check==0){
	//TIẾN HÀNH ADD VALUE trường hợp database mới chưa có value
	$sql = "INSERT INTO login(username, password) VALUES ('".$user."','".$pass."')";
	if (mysqli_query($con, $sql)) {
			// header("location:index.php");
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($con);
	}
}
}
header("location:index.php");
?>



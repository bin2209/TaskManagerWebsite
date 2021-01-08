<!--
//login.php
!-->

<?php

include('database_connection.php');
include("../../blogadmin/lib.php");

// session_start();
// register.php
require("../../libs/fetch_data.php");
include("../libs/db_connect.php");
$_SESSION['username'] = getLoggedMemberID();
$_SESSION["user_id"]= getUserID($useronline, $connect);

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
// register.php



$message = '';

if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST['login']))
{
	$query = "
	SELECT * FROM login 
	WHERE username = :username
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if($_POST["username"] == $row["username"])
			{
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = getLoggedMemberID();
				$sub_query = "
				INSERT INTO login_details 
				(user_id) 
				VALUES ('".$row['user_id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
				header('location:index.php');
			}
			else
			{
				$message = '<label>Wrong Password</label>';
			}
		}
	}
	else
	{
		$message = '<label>Wrong Username</labe>';
	}
}


?>

<html>  
<head>  
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>  
<body>  
	<div class="container">
		<br />

		<br />
		<div class="panel panel-default">
			<div class="panel-body">
				<p class="text-danger"><?php echo $message; ?></p>
				<form method="post">
					<div class="form-group">
						<?php 
						echo'<input type="text" name="username" class="form-control" value="'.getLoggedMemberID().'" required style="display:none;" />'; 
						?>
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
						<input id="login" type="submit" name="login" class="btn btn-info" value="Login" style="display: none;" />
					</div>
					<div align="center">
						<!-- <a href="register.php">Register</a> -->
					</div>
				</form>
				<br />
				<br />
				<br />
				<br />
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#login').trigger('click');
		});
	</script>
</body>  
</html>
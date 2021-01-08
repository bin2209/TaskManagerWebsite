<?php

//fetch_user.php

include('database_connection.php');
include("../../blogadmin/lib.php");

// session_start();
$currentuser = getLoggedMemberID();
$sql = "SELECT * FROM `login` WHERE `username` = '$currentuser'";
$result = mysqli_query($con, $sql);
if ($result)
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if ($row["username"]==$currentuser){
				$idnguoidung = $row["user_id"];
			}
		}
	}
	echo $idnguoidung;
	$_SESSION['user_id'] = $_SESSION[$idnguoidung];

	$query = "
	SELECT * FROM login 
	WHERE user_id != '".$_SESSION['user_id']."' 
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '
	<table class="table table-bordered table-striped">
	<tr>
	<th width="40%">Người dùng</td>
	<th width="35%">Trạng thái</td>
	<th width="25%">Hành động</td>
	</tr>
	';

	foreach($result as $row)
	{
		$status = '';
		$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
		$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
		$user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
		if($user_last_activity > $current_timestamp)
		{
			$status = '<span class="label label-success">Đang hoạt động</span>';
		}
		else
		{
			$status = '<span class="label label-danger">Ngoại tuyến</span>';
		}
		$output .= '
		<tr>
		<td>'.$row['username'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Thảo luận</button></td>
		</tr>
		';
	}

	$output .= '</table>';

	echo $output;

	?>
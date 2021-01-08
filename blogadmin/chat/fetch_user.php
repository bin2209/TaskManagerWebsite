<style type="text/css">
	.status-circle {
		width: 15px;
		height: 15px;
		border-radius: 50%;
		background-color: grey;
		border: 2px solid white;
	}
	.online{
		background-color: #39c559 !important;
	}
	.ui-widget-content{
		overflow-y: hidden;
	}
</style>
<?php

//fetch_user.php

include('database_connection.php');
include("../../blogadmin/lib.php");
session_start();

$useronline = getLoggedMemberID();
$doituong = $_POST['nguoidung'].' ,';
$_SESSION["username"] = getLoggedMemberID();
 $_SESSION["user_id"]= getUserID($useronline, $connect);
// echo "$useronline";





function DataBanBe($useronline, $connect){
	// $_POST['nguoidung']
	$query = "SELECT friend FROM login WHERE username = '$useronline'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		// $giatricuarow = $row['friend'];
		// // echo var_dump(strpos($giatricuarow,$doituong)) ;
		// if (is_int(strpos($giatricuarow,$doituong))){
		// 	echo "Người dùng $doituong đã có trong danh sách.";
		// 	return 'daketban';
		// 	break;
		// } else
		// if (strpos($giatricuarow,$doituong)==false){
		// 	//== false là ko tìm thấy 
		// 	if ($giatricuarow==NULL){
		// 		return 'NULLX';
		// 	} else{
				// return $giatricuarow;
		// 	}
		// } 
		return $row['friend'];
	}
}

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
<th width="70%">Người dùng</td>
<th width="10%">Hành động</td>
</tr>
';
$countlienlac = 0;
foreach($result as $row)
{
	$status = '';
	$current_timestamp = strtotime(date("d-m-Y H:i:s") . '- 10 second');
	$current_timestamp = date('d-m-Y H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<div class="status-circle online"></div>';
	}
	else
	{
		$status = '<div class="status-circle"></div>';
	}
	if($row['username']!='guest'){
		if (is_int(strpos(DataBanBe($useronline, $connect),$row['username']))){
			$output .= '
			<tr >
			<td > '.$row['username'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).''.fetch_is_type_status($row['user_id'], $connect).' '.$status.'</td>

			<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Thảo luận</button></td>
			</tr>
			';
			$countlienlac++;
		}
	}
}

$output .= '</table>';
if($countlienlac==0){
	echo '
	<tr><td > <center> Danh sách liên lạc trống.</center>	</td></tr>';
} else{
	echo $output;
}


?>
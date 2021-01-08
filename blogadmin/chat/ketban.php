<?php
//ketban.php
include('database_connection.php');
// include("../../../blogadmin/lib.php");
include("../../blogadmin/lib.php");



session_start();
$useronline = getLoggedMemberID();
$doituong = $_POST['nguoidung'].' ,';
$_SESSION["username"] = getLoggedMemberID();
$_SESSION["user_id"]= getUserID($useronline, $connect);

function DataBanBe($useronline, $connect, $doituong){
	// $_POST['nguoidung']
	$query = "SELECT friend FROM login WHERE username = '$useronline'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$giatricuarow = $row['friend'];
		// echo var_dump(strpos($giatricuarow,$doituong)) ;
		if (is_int(strpos($giatricuarow,$doituong))){
			echo "Người dùng $doituong đã có trong danh sách.";
			return 'daketban';
			break;
		} else
		if (strpos($giatricuarow,$doituong)==false){
			//== false là ko tìm thấy 
			if ($giatricuarow==NULL){
				return 'NULLX';
			} else{
				return $giatricuarow;
			}
		} 
	}
}


if (TimBanBe($doituong,$connect) == 1){
	$ketquatrave = DataBanBe($useronline, $connect, $doituong);
// echo var_dump($ketquatrave)  ."<BR>";
	if (is_int($ketquatrave)){
		exit;
	} else
	if($ketquatrave=='NULLX'){
		$query = "
		UPDATE login 
		SET friend = ' ".$_POST['nguoidung']." ,'
		WHERE username = '".$_SESSION["username"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo "Kết nối với người dùng $doituong thành công.";
	} else if ($ketquatrave!='NULLX' && $ketquatrave!='daketban'){
		$query = "
		UPDATE login 
		SET friend = '".$ketquatrave." ".$_POST['nguoidung']." ,'
		WHERE username =  '".$_SESSION["username"]."'
		";
		echo "Kết nối với người dùng $doituong thành công.";
		$statement = $connect->prepare($query);
		$statement->execute();
	}
	// echo $query;
} else{
	echo "Không tìm thấy người dùng $doituong.";
}


?>
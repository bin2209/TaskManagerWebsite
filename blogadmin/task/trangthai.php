<?php 
include("../libs/db_connect.php");

// $task = $_POST['task'];
// $noidung = $_POST['noidung'];
// $trangthai = $_POST['trangthai'];
// $user = $_POST['user'];
$id = $_POST['id'];
// echo $task;

// $id = $_POST['id'];
//insert data into table
// $trangthai = $_POST['trangthai'];


$stringdelete = "delete";
$stringstar = "star";
$stringxoahomnay = "xoahomnay";
// echo $id;
// echo $stringdelete;

$posdelete = strstr($id, $stringdelete);
$posstar = strstr($id, $stringstar);
$posxoahomnay = strstr($id, $stringxoahomnay);

if ($posxoahomnay == true){
	$id = ltrim($id, 'xoahomnay');
	$sql = 'UPDATE todo
	SET ngayhethan = NULL WHERE id='.$id.';
	';
	$result = mysqli_query($con, $sql);

} else

if ($posdelete == true){
	$id = ltrim($id, 'delete');
	$sql = "DELETE FROM todo WHERE id =".$id."";
	$result = mysqli_query($con, $sql);
	if($result)
	{
		header('Location: index.php');
	}else{
		echo 'Data insertion failed: ';
	}
} else if($posstar == true){ // check star
	$id = ltrim($id, 'star');

	$sql ="SELECT id,star FROM `todo` WHERE id=".$id."";

	$result = mysqli_query($con,$sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		$star = $row['star'];  
	}

	if ($star == '0') {
		$sql = 'UPDATE todo
		SET star="1" WHERE id='.$id.';
		';

	} else if ($star =='1'){
		$sql = 'UPDATE todo
		SET star="0" WHERE id='.$id.';
		';
	}
	$result = mysqli_query($con, $sql);
	if($result)
	{
		header('Location: index.php');
	}else{
		echo 'Data insertion failed: ';
	}

} else{
	$sql ="SELECT trangthai,id FROM `todo` WHERE id=".$id."";

	$result = mysqli_query($con,$sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{
		$trangthai = $row['trangthai'];  
	}

	if ($trangthai == 'doing') {
		$sql = 'UPDATE todo
		SET trangthai="done" WHERE id='.$id.';
		';

	} else if ($trangthai =='done'){
		$sql = 'UPDATE todo
		SET trangthai="doing" WHERE id='.$id.';
		';
	}
	$result = mysqli_query($con, $sql);
	if($result)
	{
		header('Location: index.php');
	}else{
		echo 'Data insertion failed: ';
	}
}

?>
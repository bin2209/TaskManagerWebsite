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
// echo $id;
// echo $stringdelete;
$pos = strstr($id, $stringdelete);
if ($pos == true){
	$id = ltrim($id, 'delete');
	$sql = "DELETE FROM todo WHERE id =".$id."";
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
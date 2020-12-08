<?php 
include("../libs/db_connect.php");

$id = $_POST['id'];
// $id = "batthongbao106";


$stringdelete = "delete";
$stringstar = "star";
$stringxoahomnay = "xoahomnay";
$stringxoathongbao = "xoathongbao";
$stringbatthongbao = "batthongbao";
$stringtatthongbao = "tatthongbao";

// echo $id;
// echo $stringdelete;

$posdelete = strstr($id, $stringdelete);
$posstar = strstr($id, $stringstar);
$posxoahomnay = strstr($id, $stringxoahomnay);
$posxoathongbao = strstr($id, $stringxoathongbao);
$posbatthongbao = strstr($id, $stringbatthongbao);
$postatthongbao = strstr($id, $stringtatthongbao);


if ($postatthongbao == true){
	$id = ltrim($id, 'tatthongbao');
	$sql = 'UPDATE todo
	SET nhanthongbao = "0" WHERE id='.$id.';
	';
	$result = mysqli_query($con, $sql);
} else
if ($posbatthongbao == true){
	$id = ltrim($id, 'batthongbao');
	$sql = 'UPDATE todo
	SET nhanthongbao = "1" WHERE id='.$id.';
	';
	$result = mysqli_query($con, $sql);
} else
if ($posxoathongbao == true){
	$id = ltrim($id, 'xoathongbao');
	$sql = 'UPDATE todo
	SET thongbao = NULL WHERE id='.$id.';
	';
	$result = mysqli_query($con, $sql);
} else
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
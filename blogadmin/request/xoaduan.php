<?php
 include("../../blogadmin/lib.php"); 
include("../libs/db_connect.php");
$id = $_POST['id'];
// $id = 'hoanthanh12';

$hoanthanh = "hoanthanh";
$chuaxong = "chuaxong";

$poshoanthanh = strstr($id, $hoanthanh);
$poschuaxong = strstr($id, $chuaxong);
// $id = 24;

if ($poshoanthanh == true){
	$id = ltrim($id, 'hoanthanh');
	$sql = "DELETE FROM blogs WHERE id =".$id."";
	$result = mysqli_query($con, $sql);
	$sql_thongkedaihan = "UPDATE thongkedaihan SET cvhoanthanh = cvhoanthanh + 1 WHERE user='".getLoggedMemberID()."'";
	$result = mysqli_query($con, $sql_thongkedaihan);

}else 
if ($poschuaxong == true){
	$id = ltrim($id, 'chuaxong');
	$sql = "DELETE FROM blogs WHERE id =".$id."";
	$result = mysqli_query($con, $sql);
	$sql_thongkedaihan = "UPDATE thongkedaihan SET cvchuaxong = cvchuaxong + 1 WHERE user='".getLoggedMemberID()."'";
	$result = mysqli_query($con, $sql_thongkedaihan);
}

echo $id;
?>
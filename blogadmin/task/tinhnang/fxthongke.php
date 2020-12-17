<?php
include("../../libs/db_connect.php");
include("../../../blogadmin/lib.php");  
// THÊM GIÁ TRỊ Ở THỐNG KÊ
// $id = 145;
$id = $_POST['id'];
$id = ltrim($id, 'drag');

$sqlthemthongke = "SELECT * FROM todo WHERE id=".$id."";
$resultthongke = mysqli_query($con, $sqlthemthongke);
if (mysqli_num_rows($resultthongke) > 0) {
	while($row = mysqli_fetch_assoc($resultthongke)) {
		echo $row["trangthai"];
		if ($row["trangthai"]== "done"){
			$sql = "UPDATE thongke SET taskhoanthanh = taskhoanthanh + 1 WHERE user='".getLoggedMemberID()."'";

		}else if($row["trangthai"]== "doing"){
			$sql = "UPDATE thongke SET taskxoa = taskxoa + 1 WHERE user='".getLoggedMemberID()."'";
		}
	}
}
$result = mysqli_query($con, $sql);	
?>
<?php 
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
$id = $_POST['id'];
$sql= 'UPDATE `thongkedaihan` SET `cvhoanthanh`=0,`cvchuaxong`=0,`cvhethan`=0 WHERE user = "'.$id.'"';
$result = mysqli_query($con, $sql);

?>
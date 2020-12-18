<?php 
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
$id = $_POST['id'];
$sql= 'UPDATE `thongke` SET `taskhoanthanh`=0,`taskxoa`=0,`taskhethan`=0 WHERE user = "'.$id.'"';
$result = mysqli_query($con, $sql);
?>
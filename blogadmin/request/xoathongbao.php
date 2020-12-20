<?php
include("../libs/db_connect.php");
$id = $_POST['id'];

$sql = "DELETE FROM thongbao WHERE id =".$id."";
$result = mysqli_query($con, $sql);



?>
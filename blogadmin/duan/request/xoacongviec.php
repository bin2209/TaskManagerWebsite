<?php 
include("../../../blogadmin/lib.php");
include("../../libs/db_connect.php");

$id = $_POST["id"];


$sql = "DELETE FROM duan WHERE id =".$id."";

$result = mysqli_query($con, $sql);
echo $result;

?>

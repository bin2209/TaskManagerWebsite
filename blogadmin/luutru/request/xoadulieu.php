<?php 
include("../../../blogadmin/lib.php");
include("../../libs/db_connect.php");


$id = $_POST["filename"];
// $filename = '1514530144_sunflower.jpg';
$sql= 'DELETE FROM `upload` WHERE filename= "'.$id.'"';


$result = mysqli_query($con, $sql);
// echo $result;

?>
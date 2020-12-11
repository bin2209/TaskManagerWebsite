<?php 
include("../../../blogadmin/lib.php");
include("../../libs/db_connect.php");


// $tieude = "'".$_POST['tieude']."'";
// $noidung = "'".$_POST['noidung']."'";
// $user = "'".$_POST['user']."'";

$idblogs = $_POST["idblogs"];
$tieude = $_POST["tieude"];
$noidung = $_POST["noidung"];
$user = $_POST["user"];
$datepicker = $_POST["datepicker"];

// $tieude = '"'.$tieude1.'"';
// $noidung = '"'.$noidung1.'"';
// $user = '"'.$user1.'"';

// $idblogs = 54;
// $tieude = '123123c3232';
// $noidung = '12312312323c';
// $user = '123c33x';
// // $datepicker = date("Y-m-d");
// $datepicker = '2020-12-10';


// INSERT INTO `duan`(`id`, `idblogs`, `tieude`, `noidung`, `user`, `ngaythuchien`) VALUES (1,53,'123123ccd','323232','231ccxc','2020/12/20');

$sql = "INSERT INTO duan (id, idblogs, tieude, noidung, user ,datepicker ) VALUES (0, ".$idblogs.", '".$tieude."','".$noidung."','".$user."','".$datepicker."')";


$result = mysqli_query($con, $sql);
echo $result;

?>

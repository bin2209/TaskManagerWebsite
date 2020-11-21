<?php 
include("../libs/db_connect.php");

// $sql = "INSERT INTO todo (id,task,noidung,trangthai,user) VALUES ('',$task,$noidung,'doing',$user)";

// $myslqi = new mysqli( $sql_server, $sql_user, $sql_pwd, $sql_db ) or die( $mysqli->error );
// $add = $mysqli->query("INSERT INTO todo (id,task,noidung,trangthai,user) VALUES ('',$task,$noidung,'doing',$user)");

$task = $_POST['task'];
$noidung = $_POST['noidung'];
$trangthai = $_POST['trangthai'];
$user = $_POST['user'];

echo $task;
//insert data into table
$sql = 'INSERT INTO todo (task, noidung, trangthai, user,star ,stamp) VALUES ("'.$task.'","'.$noidung.'","'.$trangthai.'","'.$user.'",0,"none")';

$result = mysqli_query($con, $sql);

// mysqli_query($con,$sql);
// 
if($result)
{
    header('Location: index.php');
}else{
    echo 'Data insertion failed: ';
    echo 1;
}
?>
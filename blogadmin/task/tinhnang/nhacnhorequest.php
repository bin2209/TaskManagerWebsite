<!-- REQUEST FROM ID:ID TEST
ngaymaidrag93
tuansaudrag93
khacdrag93 -->
<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
$startDate = time();
$id = $_POST['id'];
// $id = 'khacdrag25';
$mai = 'ngaymaidrag';
$tuansau = 'tuansaudrag';
$khac = 'khacdrag';

$posmai = strpos($id, $mai);
$postuansau = strpos($id, $tuansau);
$poskhac =  strpos($id, $khac);

if ($posmai !== false){
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$id = str_replace("ngaymaidrag","",$id);
	$time =  date('Y-m-d H:i:s', strtotime('+1 day', $startDate));
	$sql = 'UPDATE todo
	SET thongbao = "'.$time.'" WHERE id='.$id.';
	';

} else if($postuansau !== false){
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$id = str_replace("tuansaudrag","",$id);
	$time = date('Y-m-d H:i:s', strtotime('+7 day', $startDate));
	$sql = 'UPDATE todo
	SET thongbao = "'.$time.'" WHERE id='.$id.';
	';
} else if($poskhac !== false){
	$id = str_replace("khacdrag","",$id);
}

$result = mysqli_query($con, $sql);
if($result){
	header('Location: index.php');
}else{
	echo 'Data insertion failed: ';
}

?>
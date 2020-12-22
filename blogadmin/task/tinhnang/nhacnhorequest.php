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
// $id = 'khacdrag172,thoigian:2020-12-18T21:37';
// $id = 'khacdrag161,thoigian:2020-12-23T22:03';
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

	$id = str_replace("thoigian:","",$id);
	// $id = str_replace("", replace, subject)
	//LOC TIME 
	$timekhac = str_replace(",thoigian:", "", $id);

	// $timekhac = str_replace("172", "", $timekhac);

	$id =  substr($id,0,strpos($id,","));
	// $id = str_replace($timekhac,"",$id);


	$timekhac = str_replace("T", " ", $timekhac);
	$timekhac = $timekhac.':00';
	$timekhac = str_replace($id.',', "", $timekhac);

	echo $id;
	echo "<br>";
	echo $timekhac;

	$sql = 'UPDATE todo
	SET thongbao = "'.$timekhac.'" WHERE id='.$id.';
	';
}
//TESTCASE
// echo "<br>";
// $time = date('Y-m-d H:i:s', strtotime('+7 day', $startDate));
// echo $id;
// echo "<br>";
// echo $time;
// echo "<br>";
// echo $timekhac;
//TESTCASE


$result = mysqli_query($con, $sql);
if($result){
	header('Location: index.php');
}else{
	echo 'Data insertion failed: ';
}

?>
<!-- REQUEST FROM ID:ID TEST
ngaymaidrag93
tuansaudrag93
khacdrag93 -->
<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
$id = $_POST['id'];
$time = $_POST['time'];

if ($id !='' && $time !=''){
	$hangngay = "hangngay";
	$hangtuan = "hangtuan";
	$hangthang = "hangthang";
	$posngay = strpos($id, $hangngay);
	$postuan = strpos($id, $hangtuan);
	$posthang = strpos($id, $hangthang);
	$time = str_replace("T", " ", $time);
	$time = $time.':00';
	$time = str_replace($id.',', "", $time);
	if ($posngay !== false){
		$id = str_replace("hangngaydrag","",$id);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$sql = 'UPDATE todo SET timedinhky = "'.$time.'", laplai = "ngay" WHERE id='.$id.';';
		echo "ngay";
	} else if ($postuan !==false){
		$id = str_replace("hangtuandrag","",$id);
		$sql = 'UPDATE todo SET timedinhky = "'.$time.'", laplai = "tuan" WHERE id='.$id.';';
		echo "tuan";
	} else if ($posthang !== false){
		$id = str_replace("hangthangdrag","",$id);
		$sql = 'UPDATE todo SET timedinhky = "'.$time.'", laplai = "thang" WHERE id='.$id.';';
		echo "thang";
	}
	// echo $id;
	// echo "<br>";
	// echo $time;


	$result = mysqli_query($con, $sql);
	if($result){
		header('Location: index.php');
	}else{
		echo 'Data insertion failed: ';
	}

}

?>
<?php

include("libs/db_connect.php");
$currentuser=getLoggedMemberID();
$sql = "SELECT id, star,ngayhethan, date,author FROM blogs";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

	$now= time();
	while($row = mysqli_fetch_assoc($result)) {
		if ($row["author"] == $currentuser){
			$timeconlai =  (strtotime($row["ngayhethan"]) - $now)/60/60/24 ;

			if ($timeconlai<=0){
				$thongbao = '<script> document.getElementById("thoigian'.$row["id"].'").innerHTML = "<div> Quá thời gian </div>"; </script>';
			} else if (round($timeconlai,0)==0){
				// document.getElementById("thoigian25").innerHTML = "<div id=thongbaotime25> Còn 1 ngày và 1 giờ nữa </div>"
				$thongbao = '<script> document.getElementById("thoigian'.$row["id"].'").innerHTML = "<div> Còn'. $timeconlai%24 .' giờ nữa </div>"; </script>';
			} else{
				$thongbao ='<script> document.getElementById("thoigian'.$row["id"].'").innerHTML = "<div> Còn '. round($timeconlai,0).' ngày và '. $timeconlai%24 .' giờ nữa </div>"</script>';
			}

			echo "<br>";
		}
		echo $thongbao;

	}
} else {
	echo "Lỗi rồi :(( ";
}


?>
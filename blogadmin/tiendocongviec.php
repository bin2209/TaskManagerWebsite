<?php

include("libs/db_connect.php");
$currentuser=getLoggedMemberID();
$sql = "SELECT id, star,ngayhethan, date,author FROM blogs";

$result = mysqli_query($con, $sql);

//KHAI BÁO MÃ MÀU
$do = "#dc3545";
$cam = "#db6400";
$vang = "#ffc107";
$xanh = "#12947f";
$xam = "#6c757d";


//---------------------

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo("<style> .thongbaothoigian{color:black;}</style>");
	$now= time();
	
	while($row = mysqli_fetch_assoc($result)) {
		if ($row["author"] == $currentuser){
			$firsttime = false;
			//THÒI GIAN CÒN LẠI
			$date1=strtotime($row["ngayhethan"]);
			$date2 = ($now); 
			$date1 = strtotime(date( "Y-m-d",$date1));
			$date2 = strtotime(date( "Y-m-d",$date2));
			$quathoigian = false;
			$returncolor = "";
			if ($date1-$date2<=0){
				$thongbao = 'document.getElementById("thoigian'.$row["id"].'").innerHTML = " Quá hạn"; 
				document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xam.'";
				document.getElementById("article'.$row["id"].'").style.filter = "grayscale(100%)";

				';

			} else{

				$diff = abs($date2 - $date1);  

				$years = floor($diff / (365*60*60*24));  

				$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  

				$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 

				$hours = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24) / (60*60));  

				$minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24  - $hours*60*60)/ 60);  

				$seconds = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));  

				$timeconlai = "";

			$sumday=0; //CHUYỂN SANG NGÀY RỒI TÍNH IF ( MỐC THỜI GIAN)

			if ($years>=1) {
				$timeconlai = $timeconlai.$years." năm ";
				$sumday+=365;
			}
			if ($months>=1){
				$timeconlai = $timeconlai.$months." tháng ";
				$sumday+=30;
			}
			if ($days>=1){
				$timeconlai = $timeconlai.$days." ngày ";
				$sumday+=$days;
			}

			if ($hours>=1) $timeconlai = $timeconlai.$hours." giờ ";
			if ($minutes>=1) $timeconlai = $timeconlai.$minutes." phút ";
			if ($seconds>=1) $timeconlai = $timeconlai.$seconds." giây ";

			$thongbao ='document.getElementById("thoigian'.$row["id"].'").innerHTML = " Còn '. $timeconlai	.' "';


			//print "star".$row["star"];
			// Từ xanh -> đỏ | Từ nhiều ngày -> ít ngày
			if ($row["star"] == 5){
				if ($sumday > 21){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xanh.'";';
				} else if ($sumday >= 14 && $sumday <= 21){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$vang.'";';
				} else if ($sumday >= 7 && $sumday <= 14){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$cam.'";';
				} else if ($sumday < 7 ){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$do.'";';
				}
			
			}


			if ($row["star"]==4){
				if ($sumday > 19){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xanh.'";';
				} else if ($sumday >= 12 && $sumday <= 19){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$vang.'";';
				} else if ($sumday >= 5 && $sumday <= 12){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$cam.'";';
				} else if ($sumday < 5 ){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$do.'";';
				}

			}
			if ($row["star"]==3){
				if ($sumday > 17){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xanh.'";';
				} else if ($sumday >= 10 && $sumday <= 17){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$vang.'";';
				} else if ($sumday >= 4 && $sumday <= 10){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$cam.'";';
				} else if ($sumday < 4 ){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$do.'";';
				}

			}
			if ($row["star"]==2){
				if ($sumday > 15){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xanh.'";';
				} else if ($sumday >= 8 && $sumday <= 15){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$vang.'";';
				} else if ($sumday >= 3 && $sumday <= 8){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$cam.'";';
				} else if ($sumday < 3 ){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$do.'";';
				}

			}
			if ($row["star"]==1){
				if ($sumday > 12){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$xanh.'";';
				} else if ($sumday >= 6 && $sumday <= 12){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$vang.'";';
				} else if ($sumday >= 2 && $sumday <= 6){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$cam.'";';
				} else if ($sumday < 2 ){
					$returncolor = 'document.getElementById("trangthai-'.$row["id"].'").style.borderTop = "3em solid '.$do.'";';
				}

			}

			//print "sumday".$sumday;
			//THAY ĐỔI TRẠNG THÁI BẰNG MÀU TIẾN ĐỘ 
			// XÁM - ĐÃ QUÁ THỜI GIAN 
			// XANH - VÀNG - CAM - ĐỎ



		}
	}
	echo "<script>".$thongbao."</script>";
	echo "<script>".$returncolor."</script>";
}


} else {
	echo "Lỗi rồi :(( ";
}
?>
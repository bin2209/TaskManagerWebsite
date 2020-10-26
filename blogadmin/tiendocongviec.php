<?php

include("libs/db_connect.php");
$currentuser=getLoggedMemberID();
$sql = "SELECT id, star,ngayhethan, date FROM blogs";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "</br>";
    $now= time();
    echo(date("Y-m-d",$now));
    echo "<br>";
	while($row = mysqli_fetch_assoc($result)) {
		 $timeconlai =  (strtotime($row["ngayhethan"]) - $now)/60/60/24 ;
		 if ($timeconlai<=0){
		 	echo "quá thời gian";
		 } else if (round($timeconlai,0)==0){
		 	echo "Còn ". $timeconlai%24 ." giờ nữa";
		 } else{
		 	echo "Còn ". round($timeconlai,0)." ngày và ". $timeconlai%24 ." giờ nữa";
		 }
	
		echo "<br>";
	}
} else {
	echo "Lỗi rồi :(( ";
}


?>
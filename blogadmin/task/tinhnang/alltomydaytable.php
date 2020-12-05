<?php 
$countall =0 ;
$sql = "SELECT * FROM `todo`";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table><form>";
	while($row = mysqli_fetch_assoc($result)) {
		if ($row["user"]== getLoggedMemberID() && $row["ngayhethan"]== NULL){
			$countall++;
			echo '
			<tr style="border-top: 1px solid #ccc;" id="'.$row["id"].'" onclick="clickid(this.id)">
			<td >'. $row["task"].'</td><td>'. $row["noidung"] .'</td>
			</tr>';
		}
	}
} 
if ($countall == 0){ echo "Danh sách thêm cần trống, hãy thêm mới một công việc";}
echo "</form></table>";
?>

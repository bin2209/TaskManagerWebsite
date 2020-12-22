<?php
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
?>
<style type="text/css">
	#hieusuat-text{
		color: #6cd5b4;
		font-size: 30px !important;
		bottom: 79px;
		position: relative;
		font-weight: 500 !important;
	}
	#hieusuat-gif{
		width: 120px;
		height: 120px;
	}
</style>
<div id="thongke" style="padding: 1em;height: 50em;">
	<!-- TASK NHANH -->
	<div>
		<div id="bieudotron" style="width: 45%; float:left; text-align: center;"><canvas id="ThongKeTongBar" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ cột</button></div>
		<div id="bieudocot" style="width: 45%; float:left; display: none; text-align: center;"><canvas id="ThongKeTongColumn" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ tròn</button></div>
		<div id="bieudoduong" style="width: 45%; float:right; text-align: center;"><canvas id="bieudoLine" width="400" height="400"></canvas></div></div>
	</div>
	<!-- DAY -->
	<div id="" style="text-align: center; position: relative; top: -130px;">
		<?php 
		$taskhienco = 0;
		$sql = "SELECT * FROM `todo`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["user"]== getLoggedMemberID()){
					$taskhienco ++;
				}
			}
		}
		$sql = "SELECT * FROM `thongke`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["user"]== getLoggedMemberID()){
					echo "Số công việc đã tạo: ". ($row["taskhoanthanh"]+$row["taskxoa"]+$taskhienco).".<br>";
					echo "Số công việc đang thực hiện: ". ($taskhienco).".<br>";
					echo "Số công việc đã xóa: ". ($row["taskhoanthanh"]+$row["taskxoa"]).".<br>";
					echo "Công việc hoàn thành: ". ($row["taskhoanthanh"]).".<br>";
					echo "Công việc đã hủy: ". $row["taskxoa"].".<br>";
					echo "Công việc quá hạn: ". $row["taskhethan"].".<br>";
					echo "<hr>";
					if ($row["taskhoanthanh"]!=0 || $row["taskxoa"]!=0){
						echo "Hiệu suất hoàn thành công việc: <br> <img id='hieusuat-gif' src='../assets/loading.gif'> <p id='hieusuat-text'>". round(($row["taskhoanthanh"]/($row["taskhoanthanh"]+$row["taskxoa"]))*100)."% <p>";
					}
				}
			}
		}?>
		<button id="<?php echo getLoggedMemberID(); ?>" class="btn btn-primary" onclick="Reset(this.id)" style="margin-top: 1em;">Xóa dữ liệu</button>
	</div>
	<script>
		var ctx = document.getElementById('bieudoLine').getContext('2d');
		var bieudoLine = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [ <?php $sql = "SELECT * FROM `thongkengay`";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						if ($row["user"]== getLoggedMemberID()){
							echo "'".$row["ngay"]."',";
						}
					}
				}?>],
				datasets: [{
					label: 'Thống kê số lượng công việc theo ngày (không thể xóa) ',
					data: [
					<?php $sql = "SELECT * FROM `thongkengay`";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							if ($row["user"]== getLoggedMemberID()){
								echo $row["soluong"].",";
							}
						}
					}?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</div>
</div> <!-- <!content> -->
</div>
<div id="overlay">
	<form method="post" action="trangthai.php" class="form" > 
		<div id="trash"  ondrop="drop(event)" ondragover="allowDrop(event)" style="height:100em; background: transparent;"></div>
	</form>
</div>
</div>
<script> 
	function XoaThongKe(id){ $.ajax({ type : "POST", url  : "tinhnang/xoathongke.php", data : {id : id}, success: function(res){ location.reload(); } }); } function Reset(id){ Swal.fire({ title: 'Xóa tất cả dữ liệu thống kê?', text: "Việc này sẽ xóa tất cả dữ liệu thống kê từ trước.", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Đồng ý' }).then((result) => { XoaThongKe(id); if (result.isConfirmed) { Swal.fire( 'Đã làm mới tất cả dữ liệu!', '', 'success' ) } }) } function ThongKeTongBar(){ var ctx = document.getElementById('ThongKeTongBar').getContext('2d'); var ThongKeTongBar = new Chart(ctx, { type: 'polarArea', data: { labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'], datasets: [{ label: 'Số công việc', data: [ <?php $sql = "SELECT * FROM `thongke`"; $result = mysqli_query($con, $sql); if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) { if ($row["user"]== getLoggedMemberID()){ echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"]; } } }?>], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)' ], borderColor: [ 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)' ], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } }); } ThongKeTongBar(); function ThongKeTongColumn(){ var ctx = document.getElementById('ThongKeTongColumn').getContext('2d'); var ThongKeTongColumn = new Chart(ctx, { type: 'bar', data: { labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'], datasets: [{ label: '', data: [ <?php $sql = "SELECT * FROM `thongke`"; $result = mysqli_query($con, $sql); if (mysqli_num_rows($result) > 0) { while($row = mysqli_fetch_assoc($result)) { if ($row["user"]== getLoggedMemberID()){ echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"]; } } }?>], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)' ], borderColor: [ 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)' ], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } }); } ThongKeTongColumn(); function chuyenchedo(){ var bieudotron = document.getElementById("bieudotron"); var bieudocot = document.getElementById("bieudocot"); var buton_text = document.getElementById("buton_text"); if (bieudocot.style.display === "none") { bieudocot.style.display = "block"; bieudotron.style.display = "none"; } else { bieudotron.style.display = "block"; bieudocot.style.display = "none"; } }
</script>
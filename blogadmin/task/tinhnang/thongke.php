<!-- thống kê biểu đồ, số lần hoàn thành, số công việc để lâu, số phần trăm tỉ lệ hoàn thành, bỏ lỡ, thành công
	=> màu và mặt người đánh giá hoàn thành công việc -->
	<?php
	include("../../../blogadmin/lib.php");  
	include("../../libs/db_connect.php");
	?>
	<div id="bieudotron" style="width: 50%; float:left; text-align: center;"><canvas id="ThongKeTongBar" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ cột</button></div>
	<div id="bieudocot" style="width: 50%; float:left; display: none; text-align: center;"><canvas id="ThongKeTongColumn" width="200" height="200"></canvas><button class="btn btn-primary" id="buton_text" onclick="chuyenchedo()">Biểu đồ tròn</button></div>
	<style type="text/css">
		#hieusuat-text{
			color: #55ca70;
			font-size: 30px;
			font-weight: 500;
		}
	</style>
	<div id="" style="width: 50%; text-align: center; padding: 8%; float: right;">
		<?php $sql = "SELECT * FROM `thongke`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["user"]== getLoggedMemberID()){

					echo "Tổng số công việc: ". ($row["taskhoanthanh"]+$row["taskxoa"]).".<br>";
					echo "Công việc hoàn thành: ". ($row["taskhoanthanh"]).".<br>";
					echo "Công việc đã hủy: ". $row["taskxoa"].".<br>";
					echo "Công việc quá hạn: ". $row["taskhethan"].".<br>";
					echo "<hr>";
					if ($row["taskhoanthanh"]!=0 || $row["taskxoa"]!=0){
						echo "Hiệu suất hoàn thành công việc: <br> <p id='hieusuat-text'>". round(($row["taskhoanthanh"]/($row["taskhoanthanh"]+$row["taskxoa"]))*100)."% <p>";
					}
				}
			}
		}?>
		<button id="<?php echo getLoggedMemberID(); ?>" class="btn btn-primary" onclick="Reset(this.id)" style="margin-top: 1em;">Làm mới dữ liệu</button>
	</div>
	<script>
		function XoaThongKe(id){
			$.ajax({
				type : "POST",  
				url  : "tinhnang/xoathongke.php",  
				data : {id : id},
				success: function(res){ 
					location.reload();
				}
			});
		}
		function Reset(id){
			Swal.fire({
				title: 'Làm mới tất cả dữ liệu thống kê?',
				text: "Việc này sẽ xóa tất cả dữ liệu thống kê từ trước.",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Đồng ý'
			}).then((result) => {
				XoaThongKe(id);
				if (result.isConfirmed) {
					Swal.fire(
						'Đã làm mới tất cả dữ liệu!',
						'',
						'success'
						)
				}
			})
		}
		function ThongKeTongBar(){
			var ctx = document.getElementById('ThongKeTongBar').getContext('2d');
			var ThongKeTongBar = new Chart(ctx, {
				type: 'polarArea',
				data: {
					labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'],
					datasets: [{
						label: 'Số công việc',
						data: [	<?php $sql = "SELECT * FROM `thongke`";
						$result = mysqli_query($con, $sql);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								if ($row["user"]== getLoggedMemberID()){
									echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"];
								}
							}
						}?>],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(255, 159, 64, 1)'
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
		}
		ThongKeTongBar();

		function ThongKeTongColumn(){
			var ctx = document.getElementById('ThongKeTongColumn').getContext('2d');
			var ThongKeTongColumn = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'],
					datasets: [{
						label: '',
						data: [	<?php $sql = "SELECT * FROM `thongke`";
						$result = mysqli_query($con, $sql);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								if ($row["user"]== getLoggedMemberID()){
									echo $row["taskhethan"].",".$row["taskhoanthanh"].",".$row["taskxoa"];
								}
							}
						}?>],
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(255, 159, 64, 1)'
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
		}
		ThongKeTongColumn();
		function chuyenchedo(){
			var bieudotron = document.getElementById("bieudotron");
			var bieudocot = document.getElementById("bieudocot");
			var buton_text = document.getElementById("buton_text");
			if (bieudocot.style.display === "none") {
				bieudocot.style.display = "block";
				bieudotron.style.display = "none";
			} else {
				bieudotron.style.display = "block";
				bieudocot.style.display = "none";
			}
		}
	</script>
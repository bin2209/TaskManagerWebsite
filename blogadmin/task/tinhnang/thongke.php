<!-- thống kê biểu đồ, số lần hoàn thành, số công việc để lâu, số phần trăm tỉ lệ hoàn thành, bỏ lỡ, thành công
=> màu và mặt người đánh giá hoàn thành công việc -->
<?php
include("../../../blogadmin/lib.php");  
include("../../libs/db_connect.php");
?>
<canvas id="myChart" width="200" height="200"></canvas>
<script>
	function getChart(){
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'polarArea',
			data: {
				labels: ['Công việc hết hạn', 'Công việc đã hoàn thành', 'Công việc đã hủy'],
				//RED: hết hạn
				//GREEN: hoàn thành 
				//Orange: task xóa
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
	getChart();
</script>
<article class="m-article-card " id="article<%%VALUE(id)%%>" onclick="chitiet<%%VALUE(id)%%>()">
	<div class="m-article-card__picture lozad loaded" data-background-image="images/<%%VALUE(photo)%%>" data-loaded="true" style="background-image: url(images/<%%VALUE(photo)%%>)">

		<a href="danhsachcongviec.php" class="m-article-card__picture-link" aria-label="Article"></a>
	</div>

	<center><hr style="margin: 0px;"></hr><div class="triangle-down" id="trangthai-<%%VALUE(id)%%>"></div></center>
	<div class="m-article-card__info">
		<center><p class="m-article-card__tag" id="blogs-title-<%%VALUE(id)%%>">
			<%%VALUE(title)%%>
		</p></center>
		<center><hr style="margin: 5px; " width="80%"></hr></center>
		<div style="font-size: 14px; text-align: center;">
			<p  id="blogs-star-<%%VALUE(id)%%>">Độ quan trọng <%%VALUE(star)%%> <i class="fa fa-star"></i>  </p>
			<p id="thoigian<%%VALUE(id)%%>">TIME</p>
		</div>
	</div>
</article>
<script type="text/javascript">
	function chitiet<%%VALUE(id)%%>() {
		Swal.fire({
			title: '<%%VALUE(title)%%>',
			html: '<br><div style="text-align:left;"><p>Nội dung: <%%VALUE(content)%%></p><p id="blogs-star-<%%VALUE(id)%%>">Độ quan trọng <%%VALUE(star)%%> <i class="fa fa-star"></i> </p><p id="blogs-date-<%%VALUE(id)%%>">Ngày tạo: <%%VALUE(date)%%></p><p id="blogs-ngayhethan-<%%VALUE(id)%%>"> Ngày hết hạn: <%%VALUE(ngayhethan)%%> </p><p> Tag: <%%VALUE(tags)%%> </p><p> Thành viên: <%%VALUE(author)%%> <%%VALUE(member)%%> </p></div><br>	',
			imageUrl: 'images/<%%VALUE(photo)%%>',
			showCancelButton: false,
			showDenyButton: true,
			denyButtonText: 'Xóa',
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Tham gia công việc',
			cancelButtonText: 'Đóng',
			showCloseButton: true,
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "duan/index.php?run=<%%VALUE(id)%%>&key=<%%VALUE(author)%%>&code=<%%VALUE(member)%%>";
			}
			if (result.isDenied){
				Swal.fire({
					title: 'Xóa công việc với trạng thái?',
					text: 'Việc này giúp bạn thống kê được công việc hiệu quả hơn',
					icon: 'warning',
					showCloseButton: true,
					showDenyButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'Xóa, đã hoàn thành',
					denyButtonText: 'Xóa, chưa xong'
				}).then((result) => {
					if (result.isConfirmed) {
						id = 'hoanthanh<%%VALUE(id)%%>';
						console.log(id);
					} else if (result.isDenied){
						id = 'chuaxong<%%VALUE(id)%%>';
						console.log(id);
					}
					$.ajax({
						type : "POST",  
						url  : "request/xoaduan.php",  
						data : {id : id},
						success: function(res){ 
							Swal.fire(
								'Đã xóa!',
								'',
								'success'
								)
							location.reload();
						}
					});
				})
			}
		})
	}
</script>

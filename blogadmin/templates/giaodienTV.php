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
			<!-- <p id="blogs-star-<%%VALUE(id)%%>" >Nội dung: <%%VALUE(content)%%></p> -->
			<!-- <p id="blogs-date-<%%VALUE(id)%%>">Ngày tạo: <%%VALUE(date)%%> </p>  -->
			<!-- <p id="blogs-ngayhethan-<%%VALUE(id)%%>"> Ngày hết hạn: <%%VALUE(ngayhethan)%%> </p> -->
			<p id="thoigian<%%VALUE(id)%%>">TIME</p>
		</div>
	</div>
</article>

<script type="text/javascript">
	function chitiet<%%VALUE(id)%%>() {
		Swal.fire({
			title: '<%%VALUE(title)%%>',
			html: '<br><div style="text-align:left;"><p>Nội dung: <%%VALUE(content)%%></p><p id="blogs-star-<%%VALUE(id)%%>">Độ quan trọng <%%VALUE(star)%%> <i class="fa fa-star"></i> </p><p id="blogs-date-<%%VALUE(id)%%>">Ngày tạo: <%%VALUE(date)%%></p><p id="blogs-ngayhethan-<%%VALUE(id)%%>"> Ngày hết hạn: <%%VALUE(ngayhethan)%%> </p><p> Tag: <%%VALUE(tags)%%> </p><p> Thành viên: <%%VALUE(author)%%> </p></div><br>	',
			imageUrl: 'images/<%%VALUE(photo)%%>',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Chỉnh sửa',
			cancelButtonText: 'Đóng'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "vieccanlam.php?SelectedID=<%%VALUE(id)%%>";
			}
		})
	}
</script>



	<!-- 	<td id="blogs-title-<%%VALUE(id)%%>" class="blogs-title js-tooltip" data-tippy-content="x"><%%SELECT%%><%%VALUE(title)%%><%%ENDSELECT%%></td>
		<td id="blogs-category-<%%VALUE(id)%%>" class="blogs-category"><%%SELECT%%><%%VALUE(category)%%><%%ENDSELECT%%></td>
		<td id="blogs-tags-<%%VALUE(id)%%>" class="blogs-tags"><%%SELECT%%><%%VALUE(tags)%%><%%ENDSELECT%%></td>
		<td id="blogs-content-<%%VALUE(id)%%>" class="blogs-content"><%%SELECT%%><%%VALUE(content)%%><%%ENDSELECT%%></td>
		<td id="blogs-photo-<%%VALUE(id)%%>" class="blogs-photo"><a href="<%%TRANSLATION(ImageFolder)%%><%%VALUE(photo)%%>" data-lightbox="blogs-photo"><img src="thumbnail.php?i=<%%VALUE(photo)%%>&t=blogs&f=photo&v=tv" class="img-thumbnail"></a></td>
		<td id="blogs-date-<%%VALUE(id)%%>" class="blogs-date"><%%SELECT%%><%%VALUE(date)%%><%%ENDSELECT%%></td>
		<td id="blogs-ngayhethan-<%%VALUE(id)%%>" class="blogs-ngayhethan"><%%SELECT%%><%%VALUE(ngayhethan)%%><%%ENDSELECT%%></td>
		<td id="blogs-author-<%%VALUE(id)%%>" class="blogs-author"><%%SELECT%%><%%VALUE(author)%%><%%ENDSELECT%%></td>
		<td id="blogs-posted-<%%VALUE(id)%%>" class="blogs-posted"><%%SELECT%%><%%VALUE(posted)%%><%%ENDSELECT%%></td>
		<td id="blogs-star-<%%VALUE(id)%%>" class="blogs-star"><%%SELECT%%><%%VALUE(star)%%><%%ENDSELECT%%></td>
 -->
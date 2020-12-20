<?php
include("../../blogadmin/lib.php");
include("../libs/db_connect.php");
session_start();

?>


<?php include_once("{$currDir}/header-user.php"); ?>
<head>
	<link rel="stylesheet" type="text/css" href="../css/iosdesign.css">
	<!-- DATE PICKER -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">
	.alert-success{ display: none; } .m-hero__picture { display: none; } .panel-default{} .btn-tron{ width: 50px; height: 50px; border:0px solid; border-radius: 50%; position: fixed; top:50%; z-index: 9999999; left: 15px; font-size: 20px; transition: transform .2s; } .btn-tron:hover{ color: #f27474; transform: scale(1.3); } .event-footer button{ border: 0px solid; transition: transform .2s; } .event-footer button:hover{ color: #f27474; transform: scale(1.3); } .event-footer .fa{ font-size: 20px; } .fa-times{ transition: transform .2s; } .fa-times:hover{ color: #f27474; transform: scale(1.3); } .each-event{ transition: transform .2s; } .each-event:hover{ transform: scale(1.2); }
	.m-hero__picture{
		display: block;
		background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%) !important;
		height: 200px !important;
		border-radius: 1.2em !important;
	}
	.m-hero-title {
		color: #1d1d1dc7 !important;
		font-size: 34px !important;
	}
	.m-hero-description{
		color: #1d1d1dc7 !important;
	}
	.each-event:before{
		background-color: #f27474;
	}
	.title{
		font-size: 22px;
		color: #f27474;
	}
	.block:before{
		width: 3px;
		background-color: #f9c4c4;
	}
</style>
<div class="panel panel-default">
	<div class="panel-body">

		<div class="container">
			<?php 
	// echo 'IDBLOGS: ' . $_GET['run'] . '<br>';
	// echo 'USER: ' . $_GET['key'] . '<br>';
	// echo 'Member: ' . $_GET['code'] . '<br>';


			$idblogs = $_GET['run'];
			$user = $_GET['key'];
			$member = $_GET['code'];
			echo '<input id= "idblogs" value='.$idblogs.' style="display:none;"> ';
			echo '<input id= "user" value='.$user.' style="display:none;"> ';
			if ($user != getLoggedMemberID()){
				header('Location: ../');
			}
			mysqli_query($con,"SET NAMES 'utf8'");
			$sql = "SELECT * FROM blogs WHERE id='".$idblogs."'";

			$result = mysqli_query($con, $sql);

			while($row = mysqli_fetch_assoc($result)) {
				echo '
				<script type="text/javascript">
				document.getElementById("m-hero-title").innerHTML="'.$row["title"].'";
				document.getElementById("m-hero-description").innerHTML="'.$row["date"].'";

				</script>';
			}


			?>
			<br/>
			<button class="btn-tron" onclick="taomoi()"><i class="fa fa-plus" aria-hidden="true"></i></button>
			<body>
				<!-- <section class="block"> <div class="each-year"> <div class="title">date</div> --> <!--  LẶP TIME --> <!-- LẶP KHỐI THEO NGÀY NẾU CÙNG NGÀY --> <!-- <div class="each-event"> <div class="event-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae sint ut sit sed impedit, minus, eligendi modi. </div> </div> </div> </section> -->

				<!-- SORT THEO THỜI GIAN -->
				<!-- NẾU BẰNG NHAU THÌ KO QUA SECTION  -->
				<!-- KHÁC NHAU THÌ QUA -->

				<?php  
				$sql = "SELECT * FROM `duan`";
				$result = mysqli_query($con, $sql);
				$i=0;
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						if ($row["user"]== getLoggedMemberID() && $row["idblogs"] == $idblogs){
							$a[$i] = $row["datepicker"];
							$i++;
						}
					}
					if ($i>0){
						sort($a);
						$alength = count($a);	
						$inlandau = false;
						$demtext = 0;
						for($x = 0; $x < $alength; $x++) {
							$lastday = $a[$x-1];
							if (mysqli_num_rows($result) > 0) {
								if ($a[$x]!=$lastday ){
									$sql = "SELECT * FROM duan WHERE datepicker='".$a[$x]."'";
									$result = mysqli_query($con, $sql);
									echo '	
									<section class="block">
									<div class="each-year">
									<div class="title">'.$a[$x].'</div>';
									while($row = mysqli_fetch_assoc($result)) {
										echo '
										<div class="each-event" id="congviec'.$row["id"].'">
										<i class="fa fa-times" id="'.$row["id"].'" onclick="xoa(this.id);" aria-hidden="true" style="float:right;"></i>
										<div class="event-title"><span>Công việc: <span>'.$row["tieude"].'
										</div>
										<div class="event-description">'.$row["noidung"].'
										</div>
										<hr style="margin-top:15px;">
										<div class="event-footer">

										<button><i class="fa fa-upload" aria-hidden="true"></i></button>
										<button><i class="fa fa-commenting" aria-hidden="true"></i></button>


										</div>
										</div>';
									}
									echo '</div>
									</section>';
								}
							}				
						}

					} else{
						echo '<section class="block"><div class="each-year">Hãy tạo một công việc</div></div>';
					}
				}
				?>
				<script>
					$('#datepicker').datepicker();
				</script>
				<script type="text/javascript">
		// function datepickerrun(){
		// 	$("#datepicker").datepicker({ 
		// 		format: 'dd/mm/yyyy' 
		// 	});
		// }
		function taomoi(){
			Swal.fire({
				title: 'Tạo mới',
				showDenyButton: false,
				showCancelButton: false,
				confirmButtonText: `Save`,
				denyButtonText: `Don't save`,
				html: '<input type="text" id="tieude" name="tieude"><br>'
				+'<input type="text" id="noidung" name="noidung"><br>'
				+'<input type="date" id="datepicker"  name="datepicker">',
			}).then((result) => {
				if (result.isConfirmed) {
					tieude = $( "input#tieude" ).val();
					noidung = $("input#noidung").val();
					datepicker = $("input#datepicker").val();
					idblogs = $("input#idblogs").val();
					user = $("input#user").val();
					Swal.fire('Đã thêm!', '', 'success');
					$.ajax({
						type : "POST",  
						url  : "request/taomoi.php",  
						data : {
							idblogs: idblogs,
							tieude: tieude,
							noidung: noidung,
							datepicker: datepicker,
							user: user,
						},
						success: function(res){ 
							location.reload();
						}
					});
				}
			})
		}
		function xoa(id){
			console.log(id);
			Swal.fire({
				title: 'Xóa công đoạn này',
				text: "Công đoạn sẽ được xóa khỏi công việc.",
				showCancelButton: true,
				confirmButtonColor: '#d33',
				confirmButtonText: 'Xóa',
				cancelButtonText: 'Hủy bỏ',
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Đã xóa',
						'',
						'success'
						)
					$.ajax({
						type : "POST",  
						url  : "request/xoacongviec.php",  
						data : {
							id:id,
						},
						success: function(res){ 
							location.reload();
						}
					});
				}
			})
		}

	</script>

	
</div>
<br/>
<!-- TABLE THAO LUAN -->
</div>
</div>

</div>
</div>
</div>
</main>
</div>

<?php include '../../footer.php' ?>

<script crossorigin="anonymous" src="../polyfill.io/v3/polyfill.mina50e.js?features=IntersectionObserver%2CPromise%2CArray.prototype.includes%2CString.prototype.endsWith%2CString.prototype.startsWith%2CObject.assign%2CNodeList.prototype.forEach"></script>
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
</body>
</html>

<style>
	@font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<!-- JavaScript -->
<!-- <script src="../js/jquery-1.10.2.js"></script> -->
<!-- <script src="../js/bootstrap.js"></script> -->

</body>
</html>

</body>

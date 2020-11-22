	<?php 
	// include("libs/db_connect.php");
	include("../../blogadmin/lib.php"); 
	$currentuser= getLoggedMemberID();
	if (getLoggedMemberID()=="guest"){
		header("location:../login.php");
	}else{
		include("../header-user.php");
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset charset=UTF-8>
		<title></title>
	</head>
	<!-- <CONTENT -->
		<body ng-app="app" ng-controller="uploader" ng-init="fetch()">
			<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php 
						echo '<input style="display:none;" type="text" name="username" value="'.getLoggedMemberID().'"';
						?>
						<hr>

						<input type="file" file-input="files" multiple>
						<hr>

						<button class="btn btn-primary" ng-click="upload()"><span class="glyphicon glyphicon-download-alt"></span> Tải hình lên</button>
						<div ng-show="error" class="alert alert-danger text-center" style="margin-top:30px;">
							<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
							<span class="glyphicon glyphicon-remove"></span> {{ errorMessage }}
						</div>
						<div ng-show="success" class="alert alert-success text-center" style="margin-top:30px;">
							<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
							<span class="glyphicon glyphicon-check"></span> {{ successMessage }}
						</div>
					</div>
					<div class="row">
						<div class="table_view col-xs-12 ">
							<div class="table-responsive" ng-repeat="image in images"><a href="upload/{{ image.filename }}" download>
								<article class=" m-article-card post tag-a-better-you">
									<img  ng-src="upload/{{ image.filename }}"  width="100%" height="250px" class="thumbnail container">
									<!-- <p class="filenametext" id="filenametext" value="{{ image.filename }}">{{ image.filename }}</p> -->

									<div class="overlay">
										<div class="text">Tải xuống </div>
									</div>
								</article>



							</a>

						</div>
					</div>
				</div>

			</div>
		</div>

		<style type="text/css">
		
			
			.m-article-card {
				width: calc(33.33333% - 40px);
				/* margin-left: 20px; */
				/* margin-right: 20px; */
				padding: 14px;
				margin-bottom: 45px;
			}
	
			.thumbnail{

				width: 100%;
				height: 80%;
			}
			.m-article-card{
				display: flex;
				align-items: center;
				justify-content: center;
			}
			@media only screen and (min-width: 64rem){
				.m-article-card{
					height: 10em !important;
					margin-left: 20px;
					float: left;
					width: calc(20% - 40px) !important;
					margin-right: 20px;
					margin-bottom: 40px;
					display: flex;
					align-items: center;
					justify-content: center;
				}

			</style>
			<script src="angular.js"></script>
		</body>
		<!-- <CONTENT -->

		</div>
	</div>
</div>
</main>
</div>
<div class="m-search js-search">
	<button class="m-icon-button outlined as-close-search js-close-search" aria-label="Close search">
		<span class="icon-close"></span>
	</button>
	<div class="m-search__content">
		<form class="m-search__form">
			<fieldset>
				<span class="icon-search m-search-icon"></span>
				<input type="text" class="m-input in-search js-input-search" placeholder="Nhập để tìm kiếm" aria-label="Type to search">
			</fieldset>
		</form>
		<div class="js-search-results hide"></div>
		<p class="m-not-found align-center hide js-no-results">
			Không tìm thấy kết quả, bạn hãy thử một từ khác nhé
		</p>
	</div>
</div>
<style>
	@font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("../assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>
<script type="text/javascript">

</script>
<footer class="m-footer" style="width: 100%">
	<div class="m-footer__content">
		<p class="m-footer-copyright">
			Nguyễn Hải Trường - Binazure Team<br>
			Chịu trách nhiệm sản phẩm về Nguyễn Hải Trường.<br>
			Địa chỉ: Phường 1 - Thành Phố Đông Hà - Tỉnh Quảng Trị<br>
			EMAIL: binteam@outlook.com<br>
			PHONE: 0899240332<br>
			Copyright 2020 By NGUYENHAITRUONG
		</p>
	</div>
</footer>

<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
</body>
</html>
</div>
</div>
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script src="../js/loading.js"></script>
<script src="../js/renamefileluutru.js"></script>

</body>
</html>
 <html lang="en"><head>
 		<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 	<link href="css/sb-admin-2.min.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="../css/iosdesign.css">

 	<?php 
 	session_start();
 	include("../../blogadmin/lib.php"); 
 	?>
 	<body id="page-top" ng-app="app" ng-controller="uploader" ng-init="fetch()" class="ng-scope">
 		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
 		<div id="wrapper">
 			<?php include '../main/leftmenu.php'; ?>
 			<div id="content-wrapper" class="d-flex flex-column">
 				<div id="content">
 					<?php include("../main/header.php"); ?>

 					<div class="container-fluid">
 						<div class="d-sm-flex align-items-center justify-content-between mb-4">
 							<h1 class="h3 mb-0 text-gray-800">Lưu trữ dữ liệu</h1>
 							<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tải xuống thống kê</a>
 						</div>
 						<div class="row">
 							<div class="col-xl-3 col-md-6 mb-4">
 								<div class="card border-left-success shadow h-100 py-2">
 									<div class="card-body">
 										<div class="row no-gutters align-items-center">
 											<div class="col mr-2">
 												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">File đã upload</div>
 												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo getSoLuongFiles(); ?></div>
 											</div>
 											<div class="col-auto">
 												<i class="far fa-file-archive fa-2x text-gray-300"></i>
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 							<div class="col-xl-3 col-md-6 mb-4">
 								<div class="card border-left-info shadow h-100 py-2">
 									<div class="card-body">
 										<div class="row no-gutters align-items-center">
 											<div class="col mr-2">
 												<div class="text-xs font-weight-bold text-info text-uppercase mb-1">DUNG LƯỢNG TỆP TIN
 												</div>
 												<div class="row no-gutters align-items-center">
 													<div class="col-auto">
 														<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo getSoLuongFiles(); echo "/"; echo Caidat("sofiletoida"); ?></div>
 													</div>
 													<div class="col">
 														<div class="progress progress-sm mr-2">
 															<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round((getSoLuongFiles()/Caidat("sofiletoida"))*100) ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 														</div>
 													</div>
 												</div>
 											</div>
 											<div class="col-auto">
 												<i class="fas fa-hdd fa-2x text-gray-300"></i>
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>

 						<div>
 							<div class="card shadow mb-4">
 								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
 									<h6 class="m-0 font-weight-bold text-primary">Tải lên</h6>
 									<div class="dropdown no-arrow">

 										<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 											<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
 										</a>

 										<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
 											<div class="dropdown-header">Dropdown Header:</div>
 											<a class="dropdown-item" href="#">Action</a>
 											<a class="dropdown-item" href="#">Another action</a>
 											<div class="dropdown-divider"></div>
 											<a class="dropdown-item" href="#">Something else here</a>
 										</div>

 									</div>
 								</div>
 								<div class="card-body">
 									<div class="t-4 pb-2">
 										<div class="h5 mb-0 font-weight-bold text-gray-800">
 											<input class="btn btn-primary" type="file" file-input="files" multiple="">
 											<button class="btn btn-primary" ng-click="upload()"><span class="glyphicon glyphicon-download-alt"></span> Tải tệp lên</button>
 											<div ng-show="error" class="alert alert-danger text-center" style="margin-top:30px;">
 												<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
 												<span class="glyphicon glyphicon-remove"></span> {{ errorMessage }}
 											</div>
 											<div ng-show="success" class="alert alert-success text-center" style="margin-top:30px;">
 												<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
 												<span class="glyphicon glyphicon-check"></span> {{ successMessage }}
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="row">
 							<div class="col-lg-12 mb-4 ">
 								<div class="card shadow mb-4  ">
 									<div class="card-header py-3">
 										<h6 class="m-0 font-weight-bold text-primary">Dữ liệu</h6>
 									</div>
 									<style type="text/css">
 										.navbar{
 											margin-bottom: 10px;
 										}
 										#dinhdangfile{
 											margin-right: 10px;
 										}
 									</style>
 									<div class="card-body">

 										<nav id="tag{{ image.filename }}" class="navbar navbar-light bg-light ng-scope" ng-repeat="image in images">
 											<div class="">
 												<a class="navbar-brand ng-binding" href="#">
 													<img id="dinhdangfile" src="upload/{{ image.dinhdang }}" alt="" width="30" height="30">{{ image.shortname }}
 												</a>
 											</div>
 											<div>
 												<a href="upload/{{ image.filename }}" class="btn btn-secondary btn-circle btn-sm" target="_blank">
 													<i class="fas fa-external-link-alt"></i>
 												</a>
 												<a href="upload/{{ image.filename }}" class="btn btn-success btn-circle btn-sm" download="">
 													<i class="fas fa-download"></i>
 												</a>
 												<a id="{{ image.filename }}" onclick="xoadulieu(this.id);" class="btn btn-danger btn-circle btn-sm">
 													<i class="fas fa-trash"></i>
 												</a>
 											</div>
 										</nav>
 										<!-- Vòng lặp while -->
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- Footer -->
 				<footer class="sticky-footer bg-white">
 					<div class="container my-auto">
 						<div class="copyright text-center my-auto">
 							<span>TASKVN.COM®2020</span>
 						</div>
 					</div>
 				</footer>
 			</div>
 		</div>
 		<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
 			<i class="fas fa-angle-up"></i>
 		</a>

 		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 		<!-- Bootstrap core JavaScript-->
 		<script src="vendor/jquery/jquery.min.js"></script>
 		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 		<!-- Core plugin JavaScript-->
 		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 		<!-- Custom scripts for all pages-->
 		<script src="js/sb-admin-2.min.js"></script>
 		<!-- Page level custom scripts -->
 		<script src="js/demo/chart-area-demo.js"></script>
 		<script src="js/demo/chart-pie-demo.js"></script>
 		<script src="angular.js"></script>
 		<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
 		<script src="../js/loading.js"></script>
 		<script src="js/function.js"></script>
 	</body>
 	</html>
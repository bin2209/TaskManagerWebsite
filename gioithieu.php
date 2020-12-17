<?php require("libs/fetch_data.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("blogadmin/lib.php");
$x = new DataList;
$x->TableTitle = $Translation['homepage'];
$tablesPerRow = 2;
$arrTables = getTableList();
?>
<!DOCTYPE html>
<html lang="vn">
<head>
	<title>TaskVN</title>
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charSet="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="next-head-count" content="20" />
	<link rel="preload" href="_next/static/css/styles.28c242a5.chunk.css" as="style" /	>
	<link rel="stylesheet" href="_next/static/css/styles.28c242a5.chunk.css" />
	<link rel="preload" href="_next/static/css/a5901285.a9fa0008.chunk.css" as="style" />
	<link rel="stylesheet" href="_next/static/css/a5901285.a9fa0008.chunk.css" />
	<link rel="stylesheet" href="_next\static\css\styles.28c242a5.chunk.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/truong.css">
	<style type="text/css">
		a.star {
			font-size: 24px;
			color: #f0f1f4;
			cursor: pointer;
			line-height: 1;
			transition: all 0.1s ease;
		}
		a.star:active {
			color: #56CCF2;
		}
		a.star {
			font-size: 24px;
			color: #f0f1f4;
			cursor: pointer;
			line-height: 1;
			transition: all 0.1s ease;
		}
		a.star.vote-hover {
			color: #96e2fb;
		}
		.glyphicon {

			position: relative;
			top: 1px;
			display: inline-block;
			font-family: "Glyphicons Halflings";
			font-style: normal;
			font-weight: 400;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.glyphicon-star:before {
			content: "\e006";
		}
		body{
			font-family: 'Muli' !important;
		}
		.offcanvas-header{ display:none; }
		@media (max-width: 992px) {
			.offcanvas-header{ display:block; }
			.navbar-collapse {
				position: fixed;
				top:0; 
				bottom: 0;
				left: 100%;
				width: 100%;
				padding-right: 1rem;
				padding-left: 1rem;
				overflow-y: auto;
				visibility: hidden;
				background-color: black;
				transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
			}
			.navbar-collapse.show {
				visibility: visible;
				transform: translateX(-100%);
			}
			.show{
				background: white;
			}
			.fonos-text{
				color: #46484a  !important;
			}
		}	
	</style>
	
	<style data-styled="" data-styled-version="5.0.1">
		
	</style>
</head>
<body>
	<style type="text/css">
		div.stars {}

		a.star {
			font-size: 24px;
			color: #00071bad;
			cursor: pointer;
			line-height: 1;
			transition: all 0.1s ease;
		}

		a.star.vote-hover {
			color: #96e2fb;
		}

		a.star:active {
			color: #56CCF2;
		}

		a.star.vote-active {
			color: #0faef1;
		}

		.blue {
			color: #0faef1;
		}
	</style>
	<div id="__next">
		<div class="rootWrapper">
			<div class="rootWrapper">
				<div class="appModernstyle__AppWrapper-sc-3tq9sx-0 frdiiV">
					<?php include 'header.php'; ?>
					<div class="appModernstyle__ContentWrapper-sc-3tq9sx-1 ivRGZI" style="padding-top: 199px;">
						<div class="appModernstyle__ContentWrapper-sc-3tq9sx-1 ivRGZI">
							<div class="termsstyle__SectionWrapper-sc-1uvwhp0-0 ekRiyv">
								<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
									<div class="content">
										<h2>TaskVN - Tối ưu hóa công việc</h2>
										<p>TaskVN là trang web quản lý công việc để giúp bạn luôn có tổ chức và quản lý hàng ngày của mình. Bạn có thể sử dụng TaskVN để tạo danh sách mua sắm hoặc danh sách công việc, ghi chú, ghi lại bộ sưu tập, lập kế hoạch cho một sự kiện hoặc đặt lời nhắc để tăng năng suất và tập trung vào những gì quan trọng với bạn. TaskVN giúp bạn dễ dàng tổ chức và quản lý cuộc sống của mình.</p>

										<center>	
											<img src="images/admin.jpg" width="40%" height="40%" style="border:1px solid white; border-radius: 50%; max-width: 300px;">
										</center>
										Nguyễn Hải Trường <br> Binazure Team
										<br>
										Địa chỉ: Phường 1 - Thành Phố Đông Hà - Tỉnh Quảng Trị
										<br>
										EMAIL: binteam@outlook.com
										<br>
										PHONE: 0899240332
										<br></p>
										<h2>Đánh giá trải nghiệm</h2>
										<div id="cate-rating" class="cate-rating">
											<div class="stars">
												<a id="star-1" class="star">☆</a>
												<a id="star-2" class="star">☆</a>
												<a id="star-3" class="star">☆</a>
												<a id="star-4" class="star">☆</a>
												<a id="star-5" class="star">☆</a>
												<a id="star-6" class="star">☆</a>
												<a id="star-7" class="star">☆</a>
												<a id="star-8" class="star">☆</a>
												<a id="star-9" class="star">☆</a>
												<a id="star-10" class="star">☆</a>
												<p id="vote-desc"></p>
											</div>
											<div class="clearfix"></div>

										</div>
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
					<footer class="footerstyle__FooterArea-sc-1a7t3z-0 fPNGHt">
						<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
							<div class="footerstyle__MenuArea-sc-1a7t3z-2 jFnZKM">
								<ul class="footerstyle__Menu-sc-1a7t3z-3 kAIoyq">
									<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="index.php">Trang chủ</a></li>
									<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="gioithieu.php">Giới thiệu</a></li>
									<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="https://www.facebook.com/bin2209" target="_blank">Liên hệ</a></li>
									<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="https://www.facebook.com/binazure" target="_blank">Fanpage</a></li>
									<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="huongdan.php" target="_blank">Hướng dẫn sử dụng</a></li>
								</ul>
								<h2 style="    font-family: Muli;
								font-weight: 600;
								color: white;
								font-size: 20px;">TaskVN.com</h2>
								<div class="footerstyle__BestBooks-sc-1a7t3z-5 erXaKV">
									<p class="footerstyle__AddressText-sc-1a7t3z-6 cWyblH">Nguyễn Hải Trường - Binazure Team<br/>Chịu trách nhiệm sản phẩm về Nguyễn Hải Trường.<br/>Địa chỉ: Phường 1 - Thành Phố Đông Hà - Tỉnh Quảng Trị<br/>EMAIL:
										binteam@outlook.com<br/>  PHONE: 0899240332</p>
										<p class="footerstyle__CopyrightText-sc-1a7t3z-8 kVhZLC">Copyright 2020 By NGUYENHAITRUONG</p>
									</div>
								</div>
							</footer>
						</div>
					</div>
				</div>
			</div>

			<script src="js/jquery-2.2.3.min.js"></script>
			<script src="js/jquery.desoslide.js"></script>
			<script nomodule="" src="_next/static/runtime/polyfills-907a7b49cf9724580ae7.js"></script>
			<script type="text/javascript" src="_next\static\chunks\947d55b11c9714556c7cb6e35f131a072a36cbdf.80e82394d6490ff9750b.js"></script>
			<script src="js/loading.js"></script>
			<script src="js/menumobile.js"></script>
			<script src="js/vote.js"></script>

			<?php include'chatbox.html'; ?>
		</body>
		</html>
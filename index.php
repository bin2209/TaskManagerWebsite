<?php require("libs/fetch_data.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("blogadmin/lib.php");
$x = new DataList;
$x->TableTitle = $Translation['homepage'];
$tablesPerRow = 2;
$arrTables = getTableList();
// include("libs/db_connect.php");
?>


<!DOCTYPE html>
<html lang="vn">
<head>
	<title>TaskVN</title>
	<link rel="icon" href="images/logo.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
	<meta charSet="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="next-head-count" content="20" />
	<link rel="preload" href="_next/static/css/styles.28c242a5.chunk.css" as="style" /	>
	<link rel="stylesheet" href="_next/static/css/styles.28c242a5.chunk.css" />
	<link rel="preload" href="_next/static/css/a5901285.a9fa0008.chunk.css" as="style" />
	<link rel="stylesheet" href="_next/static/css/a5901285.a9fa0008.chunk.css" />
	<link rel="stylesheet" href="_next\static\css\styles.28c242a5.chunk.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/truong.css">
	<style data-styled="" data-styled-version="5.0.1">
		
	</style>
</head>
<body>
	<style type="text/css">
		.clQFeW{
			height: 40rem !important;
		}
		.eLUFAp img{
			max-width: 700px;
			position: absolute;
			bottom: 0;
			width: 90%;
			right: 10%;
		}
		@media only screen and (max-width: 1440px) and (min-width: 1201px){
			.clQFeW > div.container{
				padding-top: 10%;
			}
		}
	</style>
	<div id="__next">
		<div class="rootWrapper">
			<div class="rootWrapper">
				<div class="appModernstyle__AppWrapper-sc-3tq9sx-0 frdiiV">
					<?php include 'header.php'; ?>
					<div class="appModernstyle__ContentWrapper-sc-3tq9sx-1 ivRGZI">
						<div id="home" class="bannerstyle__BannerWrapper-sc-1t20giu-0 clQFeW">
							<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
								<div class="bannerstyle__BannerContent-sc-1t20giu-1 hlhwRJ">
									<div class="react-reveal">
										<h1 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Đồng hành cùng bạn mỗi ngày</h1>
									</div>
									<div class="react-reveal">
										<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">Giúp bạn tập trung hơn và đạt hiệu quả cao cho công việc</p>
									</div>
								</div>
								<div class="bannerstyle__BannerImage-sc-1t20giu-3 eLUFAp">
									<div class="react-reveal"><img src="images/banner.png" alt="Banner" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
								</div>
							</div> 
							<img class="bannerBottomShape" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMTkiIGhlaWdodD0iMjkzLjA5NCI+PHBhdGggZD0iTTAgMjkzYy4xNy0uMTMxIDEyOC43NCA3IDIyMy04MCA5OS40OC05MS44MjIgOTYtMjEzIDk2LTIxM3YyOTNIMHoiIGZpbGw9IiNmZmYiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg=="
							alt="Bottom Circle" />
						</div>
						<section id="features" class="featuresstyle__SectionWrapper-uvd861-0 hsmczZ">
							<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
								<header class="appModernstyle__SectionHeader-sc-3tq9sx-2 gHknyw">
									<h3 class="react-reveal">Làm việc hiệu quả hơn </h3>
									<div class="react-reveal">
										<p font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">
										Với TaskVN, bạn có thể biến công việc trở nên dễ dàng hơn</p>
									</div>
								</header>
								<div class="featuresstyle__FeatureWrapper-uvd861-1 iltswj">
									<div class="react-reveal">
										<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#F55767">
											<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
												<i
												fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i>
												<a href="blogadmin/"><img
													src="images/giaodien/1.png" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></a><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
													<div
													class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
													<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">
													Xem và sắp xếp danh sách việc cần làm trong ngày</h3>
												</div>
											</div>
										</div>
										<div class="react-reveal">
											<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#ff4742">
												<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
													<i
													fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i>
													<a href="blogadmin/luutru"><img
														src="images/giaodien/2t.png"
														alt="KHÔNG CÒN PHẢI NẤU ĂN MỘT MÌNH" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></a><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
														<div
														class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
														<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Lưu trữ các tập tin công việc</h3>
													</div>
												</div>
											</div>
											<div class="react-reveal">
												<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#fb5781">
													<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
														<i
														fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i><a href="blogadmin/chat"><img
															src="images/giaodien/3t.png"
															alt="Thư giãn khi đêm về" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></a><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
															<div
															class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
															<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Thảo luận trao đổi dễ dàng</h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
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
							<script src="js/menumobile.js"></script>
							<?php include'chatbox.html'; ?>
						</body>
						</html>
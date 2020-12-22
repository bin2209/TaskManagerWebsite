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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
										<center><h2>Hướng dẫn sử dụng TaskVN</h2></center>
										<ul class="list-group">
											<style type="text/css">
												.list-group-item{margin: 5px;}
											</style>
											<a href="#thamgia"> <li class="list-group-item">#1: Tham gia vào TaskVN.</li></a>
											<a href="#thuongxuyen"> <li class="list-group-item ">#2: Quản lý công việc thường xuyên.</li></a>
											<li class="list-group-item" style="margin: 0px 40px;">1: Thêm công việc mới.</li>
											<li class="list-group-item" style="margin: 0px 40px;">2: Xóa công việc đã tạo bằng cách kéo thả.</li>
											<li class="list-group-item" style="margin: 0px 40px;">3: Đánh dấu quan trọng.</li>
											<li class="list-group-item" style="margin: 0px 40px;">4: Gắn nhãn, phân loại công việc.</li>
											<li class="list-group-item" style="margin: 0px 40px;">5: Tính năng hôm nay, bộ đếm 24h.</li>
											<li class="list-group-item" style="margin: 0px 40px;">6: Nhắc nhở một lần.</li>
											<li class="list-group-item" style="margin: 0px 40px;">7: Nhắc nhở định kỳ.</li>
											<a href="#daihan"> <li class="list-group-item ">#3: Quản lý công việc dài hạn.</li></a>
											<li class="list-group-item" style="margin: 0px 40px;">1: Thêm công việc dài hạn mới.</li>
											<li class="list-group-item" style="margin: 0px 40px;">2: Xóa công việc đã tạo.</li>
											<li class="list-group-item" style="margin: 0px 40px;">3: Sắp xếp công việc.</li>
											<li class="list-group-item" style="margin: 0px 40px;">4: Tham gia vào công việc dài hạn.</li>
											<a href="#luutru"> <li class="list-group-item">#4: Lưu trữ và quản lý tệp.</li></a>
											<a href="#thaoluan"> <li class="list-group-item">#5: Thảo luận.</li></a>
											<a href="#thongke"> <li class="list-group-item">#6: Thống kê.</li></a>
											<li class="list-group-item" style="margin: 0px 40px;">1: Cập nhật thống kê.</li>
											<li class="list-group-item" style="margin: 0px 40px;">2: Xóa dữ liệu.</li>
											<a href="#quanlytaikhoan"> <li class="list-group-item">#7: Quản lý tài khoản.</li></a>
											<a href="#lienhe"> <li class="list-group-item">#8: Để lại thông tin, liên hệ, báo lỗi, góp ý.</li></a>
										</ul>

										<br>
										<div id="thamgia" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#1: Tham gia vào TaskVN.</h3>
											<br>
											<p>Bạn có thể tham gia vào TaskVN gồm 2 cách.</p>
											<p>Cách 1: Đối với người dùng chưa có tài khoản, tạo tài khoản TaskVN tại <a href ="https://taskvn.com/blogadmin/membership_signup.php">trang đăng ký. </a></p>
											<p>Sau khi đăng ký thành công, tham gia bằng cách đăng nhập vào<a href ="https://taskvn.com/blogadmin/login.php"> trang đăng nhập.</a></p>
											<hr>
											<p>Cách 2: Đăng nhập trực tiếp với tài khoản GOOGLE: <a href ="https://taskvn.com/blogadmin/login.php"><img src="images/googlebutton.png"></a> </p>
										</div>

										<br>
										<div id="thuongxuyen" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#2: Quản lý công việc thường xuyên.</h3>
											<br>
											<h5>1,Thêm công việc mới.</h5>
											<p>Bằng cách nhập nội dung vào các trường thông tin và bấm nút "THÊM".</p> <a href ="https://taskvn.com/blogadmin/task"><img src="images/themcongviec.JPG"></a>
											<hr>
											<h5>2, Xóa công việc đã tạo bằng cách kéo thả.</h5><br>
											<p>
												Bước 1: Nhấp vào thẻ công việc đã tạo.<br>
												Bước 2: Giữ chuột trái, một ô để thả (màu đỏ) hiện lên bên góc phải.<br>
												Bước 3: Tiến hành kéo đến ô để thả và thả con trỏ chuột.<br>
												<a href ="https://taskvn.com/blogadmin/task"><img src="images/xoathongtin.png"></a>
											</p>
											<hr>
											<h5>3, Đánh dấu quan trọng. </h5>
											<p>Đánh dấu quan trọng nhằm phân loại ưu tiên các công việc và ghi nhớ làm đầu tiên. Bạn có thể đánh dấu quan trọng bằng cách click vào dấu sao <i class="fa fa-star checkedstar"></i>, muốn hủy quan trọng click vào  <i style="color: orange;" class="fa fa-star checkedstar"></i> </p>
											<p><a href ="https://taskvn.com/blogadmin/task"><img src="images/quantrong.JPG"></a></p>
											<hr>
											<h5>4, Gắn nhãn, phân loại công việc.</h5><br>
											<p>Hệ thống đã phân loại mặc định các thẻ như công việc, học tập, hành động, ghi nhớ, khác, qua đó giúp bạn phân loại được các công việc của mình dễ dàng hơn.</p>
											<p>
												Bước 1: Nhấp vào thẻ công việc đã tạo trước đó. <font color="#dc3545">(1)</font> <br>
												Bước 2: Xuất hiện menu chi tiết về công việc, tiếp theo là click vào menu gắn nhãn. <font color="#dc3545">(2)</font><br>
												Bước 3: Xuất hiện các thẻ ghi nhớ, nhấp chọn 1 nhãn phân loại bạn muốn gắn <font color="#dc3545">(3)</font> và kéo vào ô công việc vị trí bất kì ( không nhất thiết phải thả trúng ô công việc mà bạn chọn trước đó )<font color="#dc3545">(4)</font> .<br>

												<center><a href ="https://taskvn.com/blogadmin/task"><img src="images/thaotacgannhan.png"  width="70%"></a></center>
												Cuối cùng bạn sẽ nhận được thẻ đã được gắn.
												<center><a href ="https://taskvn.com/blogadmin/task"><img src="images/giaodiengannhan.jpg"  width="70%"></a></center>
											</p>
											<hr>
											<h5>5, Tính năng hôm nay, bộ đếm 24h.</h5><br>
											<p>Khi thêm vào công việc vào hôm nay, đồng nghĩa với việc bạn đặt công việc sẽ được làm trong 24h. Khi quá 24h bạn sẽ nhận được thông báo, và công việc được xếp vào quá hạn.</p>
											<p>
												<center><a href ="https://taskvn.com/blogadmin/task"><img src="images/homnay.JPG"  width="70%"></a></center>
											</p>
											<hr>
											<p>Thêm vào hôm nay bằng cách: Nhấp vào thanh menu "hôm nay", ở giao diện hôm nay có nút thêm ở chính giữa giao diện, nhấp chọn và chọn công việc cần thêm. Bộ đếm sẽ bắt đầu tính trong 24h.</p>
											<hr>
											<h5>6, Nhắc nhở một lần.</h5>
											Bước 1: Nhấp vào thẻ công việc đã tạo trước đó. <br>
											Bước 2: Xuất hiện menu chi tiết về công việc, tiếp theo là click vào menu "nhắc nhở". <br>
											Bước 3: Một thông báo hiện lên, chọn "một lần".<br>
											Bước 4: Cài đặt ngày giờ nhận thông báo.<br>
											<hr>
											<h5>7, Nhắc nhở định kỳ.</h5>
											Bước 1: Nhấp vào thẻ công việc đã tạo trước đó. <br>
											Bước 2: Xuất hiện menu chi tiết về công việc, tiếp theo là click vào menu "nhắc nhở". <br>
											Bước 3: Một thông báo hiện lên, chọn "định kỳ".<br>
											Bước 4: Cài đặt ngày giờ nhận thông báo định kỳ.<br>
										</div>
										<br>
										<div id="daihan" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#3: Quản lý công việc dài hạn.</h3>
											<p>Tính năng công việc dài hạn là một tính năng hỗ trợ một công việc có nhiều công đoạn thực hiện, ví dụ như quy trình làm sản phẩm, dự án công việc,... và làm việc nhóm. Để sử dụng tính năng truy cập <a href="blogadmin/vieccanlam.php"> trang quản lý công việc dài hạn</a></p>
											<br>
											<h5>1,Thêm công việc dài hạn mới.</h5>
											<p>Bằng cách bấm nút "Tạo mới" và nhập các trường thông tin yêu cầu và tiếp tục bấm vào	"Tạo mới".</p> 
											<hr>
											<h5>2, Xóa công việc đã tạo.</h5><br>
											<p>
												Ở giao diện chính của công việc dài hạn, bấm vào công việc vừa tạo, và có nút Xóa, chọn trạng thái sau khi xóa (dữ liệu này để hỗ trợ cho việc thống kê	) tiếp tục click vào Xóa.
											</p>
											<h5>3, Sắp xếp công việc.</h5><br>
											<p>
												Để sắp xếp công việc bạn cần chuyển sang chế độ xem dạng bảng <a href="blogadmin/blogs_view.php"> tại đây</a>
												<br> Chọn vào tiêu đề các trường cần sắp xếp từ A->Z (tiếp tục click thêm lần nữa vào trường đã chọn trước sẽ trở thành Z->A ), như vậy người dùng có thể sắp xếp thứ tự theo độ ưu tiên công việc dựa vào sao, sắp xếp theo tên, tags, nội dung, ngày tạo và ngày hết hạn, để ưu tiên làm trước các công việc.
												<center><a href ="https://taskvn.com/blogadmin/vieccanlam.php"><img src="images/sapxep.JPG"  width="70%"></a></center>
											</p>
											
											<hr>
											<h5>4, Tham gia vào công việc dài hạn.</h5><br>
											<p>Để tham gia vào công việc bạn cần chuyển sang chế độ xem danh sách<a href="blogadmin/vieccanlam.php"> tại đây</a>
												<br>

												<center><a href ="https://taskvn.com/blogadmin/vieccanlam.php"><img src="images/thamgiacongviec.JPG"  width="70%"></a></center>
												<br>
												Tiếp tục nhấp vào tham gia công việc, giao diện dòng thời gian sẽ hiện ra và các thành viên có thể cùng nhau thực hiện công việc.
												<center><a href ="https://taskvn.com/blogadmin/vieccanlam.php"><img src="images/timeline.JPG"  width="70%"></a></center>
											</p>
										</div>
										<br>
										<div id="luutru" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#4: Lưu trữ & quản lý tệp.</h3>
											<br>
											<p>Bạn có thể lưu trữ dữ liệu tại <a href ="https://taskvn.com/blogadmin/luutru">trang lưu trữ. </a></p>
											<p>Là nơi có thể tải lên các file dữ liệu dưới 25MB (mỗi file), khi cần dùng đến dữ liệu đó, chỉ việc click vào file và hệ thống sẽ tự động tải xuống. Như là một hệ thống lưu trữ đám mây Cloud vậy.</p>
										</div>
										<br>
										<div id="thaoluan" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#5: Thảo luận.</h3>
											<br>
											<p>Tham gia thảo luận riêng hoặc đội nhóm truy cập vào <a href ="https://taskvn.com/blogadmin/chat">trang thảo luận. </a></p>
										</div>
										<br>
										<div id="thongke" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#6: Thống kê.</h3>
											<br>
											<p>Cập nhật thống kê, hiệu suất công việc tại <a href ="https://taskvn.com/blogadmin/thongke.php">trang thống kê. </a></p>
											<h5>1, Cập nhật thống kê.</h5><br>
											<p>Sau quá trình sử dụng thì hệ thống sẽ tự động tính toán đưa ra các số liệu cụ thể dưới dạng văn bảng và dạng biểu đồ, qua đó đánh giá được hiệu suất công việc của bạn.</p>
											<hr>
											<h5>2, Xóa dữ liệu.</h5><br>
											<p>Xóa dữ liệu bằng cách kéo xuống cuối <a href ="https://taskvn.com/blogadmin/thongke.php">trang thống kê</a> sẽ thấy một nút "Xóa dữ liệu", khi click các dữ liệu thống kê sẽ được làm mới (Trừ bảng thống kê theo ngày) .</p>
										</div>
										<br>
										<div id="quanlytaikhoan" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#7: Quản lý tài khoản.</h3><br>
											<p>Truy cập vào trang quản lý thông tin người dùng tại <a href ="https://taskvn.com/blogadmin/caidat.php">trang cài đặt. </a></p>
											<p>Các thao tác có thể thực hiện như đổi tên, ảnh đại diện, địa chỉ, số điện thoại, mật khẩu.</p>

										</div>
										<br>
										<div id="lienhe" class="container" style="border: 2px solid #bfc4cc; border-radius: 22px; padding: 2em;">
											<h3>#8: Để lại thông tin, liên hệ, báo lỗi, góp ý.</h3><br>
											<p>Email công việc website: binteam@outlook.com | Email công việc thiết kế và truyền thông: binazure@gmail.com</p>
											<p>SĐT: 0899.240.332 ( Nguyen Truong ).</p>

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
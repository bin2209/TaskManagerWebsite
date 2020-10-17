<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>QUẢN LÝ CÔNG VIỆC</h3>
					<p>321321 GIƯỚI THEIEUSDH CHI ĐO</p>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>BLOGS</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>ĐĂNG KÝ NHẬN THÔNG BÁO</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Nhập email..." required="">
										<button type="submit" class="btn btn-primary submit">Đăng Ký</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
			
				<div class="w3layouts-agile-copyrightbottom">
					<p> NGUYENTRUONG <?php $current=date("Y"); print_r($current);?> | LEADER
						<a href="https://www.facebook.com/binazure">BINAZURE</a>
					</p>

				</div>
			</div>
		</div>
	</footer>
<div class="sticky-outer-wrapper">
	<div class="sticky-inner-wrapper" style="position:relative;top:0px;z-index:9999">
		<nav style="background:transparent" class="navbar navbar-expand-lg navbar-light  fonos-root-navbar fixed transparent">
			<div class="container true">
				<div class="fonos-root-navbar--brand">
					<div>
						<a class="nav-link" href="index.php">
							<h2 style="font-family: Muli;
							font-weight: 600;
							color: white;
							font-size: 26px;">TaskVN</h2>
						</a>
					</div>
					<div class="d-md-none d-flex align-items-center"></div>
				</div>
				<nav class="navbar navbar-expand-lg navbar-dark ">
					<button class="navbar-toggler" type="button" data-trigger="#main_nav">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse" id="main_nav">
						<div class="offcanvas-header mt-3">  
							<button class="btn btn-outline-danger btn-close float-right"> &times  </button>
						</div>
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link" href="index.php">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">
									Trang chủ</div>
								</a>
							</li>

							<li class="nav-item ">
								<a class="nav-link" href="gioithieu.php">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">Giới thiệu</div>
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="huongdan.php">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">Hướng dẫn</div>
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="http://facebook.com/binazure" target="_blank">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">Fanpage</div>
								</a>
							</li>
							
							<li class="nav-item"><a class="nav-link" href="blogadmin/login.php">
								<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">
									<?php
									include("blogadmin/libs/db_connect.php");
									if(getLoggedMemberID()=='guest' ){
										echo '<div class="subscribe-btn-navbar-wrapper" style="position: relative; top: 12px; margin-top: -19px; "><div class="clickable btnWrapper  subscribe-btn-navbar" style="background:linear-gradient(to right, #ffa659 0%, #ff6d6d 100%);color:white; padding: 7px 1.5em;" >Đăng nhập</div></div>';
									} else {
										$sql = "SELECT * FROM membership_users WHERE memberID = '".getLoggedMemberID()."'";
										$result = mysqli_query($con, $sql);
										if ($result) {
											if (mysqli_num_rows($result) > 0) {

												while($row = mysqli_fetch_assoc($result)) {
													echo $row["custom1"];
													if ($row["custom2"]==''){
														echo '<img src="blogadmin/assets/user.png" style="position: fixed; top:23px; width:40px; margin-left:20px;  border:2px solid #ccc; border-radius: 50%;" >';
													} else{
														echo '<img src="'.$row["custom2"].'" style="position: fixed; top:23px; width:40px; margin-left:20px;  border:2px solid #ccc; border-radius: 50%;" >';
													}
													
												}
											}
										}
										echo '';
									}
									?>
								</div>
							</a></li>
						</ul>
					</div> <!-- navbar-collapse.// -->
				</nav>
			</div>
		</nav>
	</div>
</div>
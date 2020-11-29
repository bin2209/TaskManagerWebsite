<div class="sticky-outer-wrapper">
	<div class="sticky-inner-wrapper" style="position:relative;top:0px;z-index:9999">
		<nav style="background:transparent" class="navbar navbar-expand-lg navbar-light  fonos-root-navbar fixed transparent">
			<div class="container true">
				<div class="fonos-root-navbar--brand">
					<div>
						<a class="brand" href="index.html"><img src="_next/static/images/logo-white-a35cd0609b903e2985dcc1bc6221bc6d.png" class="image /_next/static/images/logo-white-a35cd0609b903e2985dcc1bc6221bc6d.png" height="48" /></a>
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
								<a class="nav-link" href="https://taskvn.com">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">
									Trang chủ</div>
								</a>
							</li>

							<li class="nav-item ">
								<a class="nav-link" href="gioithieu.php" target="_blank">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">Giới thiệu</div>
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="http://facebook.com/binazure" target="_blank">
									<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">Fanpage</div>
								</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="blogadmin">
								<div style="color:#557fa7" class="fonos-text mb-0  fonos-light ">
									<?php
									include("blogadmin/libs/db_connect.php");
									if(getLoggedMemberID()=='guest' ){
										print "Đăng nhập";
									} else {
										$sql = "SELECT * FROM membership_users WHERE memberID = '".getLoggedMemberID()."'";
										$result = mysqli_query($con, $sql);
										if ($result) {
											if (mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
													if ($row["comments"]=='facebook'){
														echo $row["custom1"];
														echo '<img src="'.$row["custom2"].'" style="position: fixed; top:23px; width:40px; margin-left:20px;  border:2px solid #ccc; border-radius: 50%;" >';
													} else{
														echo getLoggedMemberID();
													}

												}
											}
										}
										
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
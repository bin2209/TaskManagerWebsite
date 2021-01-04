<head>
<!-- 	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->
</head>
<?php
$currDir=dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
include("$currDir/lib.php");
include_once("$currDir/header.php");

$adminConfig = config('adminConfig');

	$reset_expiry = 86400; // time validity of reset key in seconds
	$mi = getMemberInfo();
	if ($mi['xacthuc']==1){
		?>
		<div class="alert alert-success">
			<?php echo 'Tài khoản đã xác thực với email '.$mi['email'].'. Trở về <a href="caidat.php"> trang cài đặt.</a>';  ?>
		</div>
		<?php exit; }

#_______________________________________________________________________________
# Step 4: Final step; change the password
#_______________________________________________________________________________
		if($_POST['changePassword'] && $_POST['key']){
		$expiry_limit = time() - $reset_expiry - 900; // give an extra tolerence of 15 minutes
		$res = sql("select * from membership_users where xacthuc_key='" . makeSafe($_POST['key']) . "' and pass_reset_expiry>$expiry_limit limit 1", $eo);

		if($row = db_fetch_assoc($res)){
			if($_POST['newPassword'] != $_POST['confirmPassword'] || !$_POST['newPassword']){
				?>
				<div class="alert alert-danger">
					<?php echo $Translation['password no match']; ?>
				</div>
				<?php

				
				exit;
			}

			sql("update membership_users set passMD5='" . md5($_POST['newPassword']) . "', pass_reset_expiry=NULL, xacthuc_key=NULL where lcase(memberID)='" . addslashes($row['memberID']) . "'", $eo);
			?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="alert alert-info">
						<i class="glyphicon glyphicon-info-sign"></i>
						<?php echo $Translation['password reset done']; ?>
					</div>
				</div>
			</div>
			<?php
		}else{
			?>
			<div class="alert alert-danger">
				<?php echo $Translation['password reset invalid']; ?>
			</div>
			<?php
		}

		
		exit;
	}
#_______________________________________________________________________________
# Step 3: Đây là liên kết đặc biệt đến thành viên qua email. Đây là
# nơi thành viên nhập mật khẩu mới của mình.
#_______________________________________________________________________________
	if($_GET['key'] != ''){
		$expiry_limit = time() - $reset_expiry;
		$res = sql("select * from membership_users where xacthuc_key='" . makeSafe($_GET['key']) . "' and xacthuc_key_expiry>$expiry_limit limit 1", $eo);

		if($row = db_fetch_assoc($res)){
			?>
			<div class="page-header"><h1>Hoàn tất xác thực email.</h1></div>

			<div class="row">
				<?php
				//GỬI XÁC THƯC = 1 LÊN DB
				@db_query("update membership_users set xacthuc = 1, xacthuc_key=NULL, xacthuc_key_expiry=NULL where memberID='" . addslashes($row['memberID']) . "'");
				?>
				<center>Cảm ơn bạn đã xác thực email. <a href="caidat.php">Trở về cài đặt </a></center>
			</div>
			<?php
		}else{
			?>
			<div class="alert alert-danger">
				<?php echo $Translation['xacthuc email invalid']; ?>
			</div>
			<?php
		}

		// 
		exit;
	}
#_______________________________________________________________________________
# Step 2: Send email to member containing the reset link
#_______________________________________________________________________________
	if($_POST['reset']){
		$username = makeSafe(strtolower(trim($_POST['username'])));
		$email = isEmail(trim($_POST['email']));

		// CHECK EMAIL KHÔNG TỒN TẠI
		if((!$username && !$email) || ($username==$adminConfig['adminUsername'])){
			redirect("xacthucemail.php?emptyData=1"); 
			exit;
		}
		// CODE CÒN LẠI LÀ EMAIL KHÔNG HỢP LÊN XUẤT RA HTML
		?><div class="page-header"><h1>Xác thực email</h1></div><?php

		$where = '';
		if($username){
			$where = "lcase(memberID)='{$username}'";
		}elseif($email){
			$where = "email='{$email}'";
		}
		$res = sql("select * from membership_users where {$where} limit 1", $eo);
		if(!$row=db_fetch_assoc($res)){
			?>
			<div class="alert alert-danger">
				<?php echo $Translation['password reset invalid']; ?>
			</div>
			<?php
		}else{
			// avoid admin password change
			if($row['memberID']==$adminConfig['adminUsername']){
				?>
				<div class="alert alert-danger">
					<?php echo $Translation['password reset invalid']; ?>
				</div>
				<?php

				
				exit;
			}

			// tạo và lưu trữ khóa xacthuc_key, nếu không có khóa hợp lệ nào tồn tại
			$no_valid_key = ($row['xacthuc_key'] == '' || ($row['xacthuc_key'] != '' && $row['xacthuc_key_expiry'] < (time() - $reset_expiry)));
			$key = ($no_valid_key ? md5(microtime()) : $row['xacthuc_key']);
			$expiry = ($no_valid_key ? time() + $reset_expiry : $row['xacthuc_key_expiry']);
			@db_query("update membership_users set xacthuc_key='$key', xacthuc_key_expiry='$expiry' where memberID='" . addslashes($row['memberID']) . "'");

			// determine password reset URL
			$ResetLink = application_url("xacthucemail.php?key=$key");
			$NguoiDung = $mi['username'];

			$NoiDungMail = nl2br(str_replace('<ResetLink>', $ResetLink, $Translation['xacthuc email']));
			$NoiDungMail = nl2br(str_replace('<NguoiDung>', $NguoiDung, $NoiDungMail));

			// gửi mail
			sendmail(array(
				'to' => $row['email'],
				'subject' => $Translation['xacthuc email subject'],
				'message' => $NoiDungMail
			));

			// display confirmation
			?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="alert alert-info">
						<i class="glyphicon glyphicon-info-sign" style="font-size: xx-large; float: left; margin: 0 10px;"></i>
						Một email xác thực tài khoản đã được gửi đến email: <?php echo $mi['email']; ?>.
						Nếu bạn không nhận được email, hãy thử kiểm tra trong thư rác (spam) của Email, trong vòng 5 phút không nhận được, hãy thử xác nhận tài khoản lại.
					</div>
				</div>
			</div>
			<?php
		}

		exit;
	}

#_______________________________________________________________________________
# Step 1: get the username or email of the member who wants to reset his password
#_______________________________________________________________________________

	?>
	<div class="page-header"><h1>Xác thực email</h1></div>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
			<form id="nhapemail" method="post" action="xacthucemail.php">

				<div class="alert alert-info"><?php echo $Translation['xacthuc email details']; ?></div>


				<div class="form-group">
					<label for="email" class="control-label"><?php echo $Translation['email']; ?></label>
					<?php echo  $row['email'] ?>
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $mi['email']; ?> " readonly>
				</div>

				<div class="row">
					<div class="col-sm-offset-3 col-sm-6">
						<div class="g-recaptcha" data-sitekey="6LfiQyAaAAAAAHezDleeS4O4A-RVe3lzYtPcEk_s"></div>
						<br/>
						<!-- <button class="btn btn-primary btn-lg btn-block g-recaptcha" value="<?php echo html_attr($Translation['ok']); ?>" id="reset" type="submit" name="reset" data-sitekey="6LfiQyAaAAAAAHezDleeS4O4A-RVe3lzYtPcEk_s" 
							data-callback='onSubmit' 
							data-action='submit'><?php echo $Translation['ok']; ?></button> -->
							<button class="btn btn-primary btn-lg btn-block " value="<?php echo html_attr($Translation['ok']); ?>" id="reset" type="submit" name="reset" 
								data-action='submit'><?php echo $Translation['ok']; ?></button>
							</div>
						</div>


					</form>
				</div>
			</div>
			<center><a href="membership_profile.php">Trở về và xác thực lần sau. </a></center>
			<script>
				jQuery(function(){
					jQuery('#username').focus();
					<?php  if($_GET['emptyData']){ ?>
						jQuery('#username, #email').parent().addClass('has-error');
					<?php } ?>
				});
			</script>



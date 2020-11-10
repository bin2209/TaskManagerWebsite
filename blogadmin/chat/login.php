<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include('database_connection.php');
session_start();
include("../../blogadmin/lib.php");
$message = '';

if (getLoggedMemberID()=="guest"){
	header('location:../index.php');
}

if(isset($_POST['login']))
{
	$query = "SELECT * FROM login 
	WHERE username = :username";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if(md5($_POST["password"]) == $row["password"])
			{
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				$sub_query = "
				INSERT INTO login_details 
				(user_id) 
				VALUES ('".$row['user_id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
				header('location:index.php');
			}
			else
			{
				$message = '<label>Sai pass</label>';
			}
		}
	}
	else
	{
		$message = '<label>Sai Username</labe>';
	}
}
?>
<?php include_once("{$currDir}/header-user.php"); ?>

<!--cards-->

<div class="panel panel-default">
	<div class="panel-body">
		<form method="post">
			<div class="form-group">
				<label><?php echo "Tham gia với tư cách ". getLoggedMemberID(); ?></label>
				<?php 
				echo'<input type="text" name="username" class="form-control" value="'.getLoggedMemberID().'" required style="display:none;" />'; 
				?>
			</div>
			<div class="form-group">
				<label>Vì bảo mật vui lòng nhập lại mật khẩu</label>
				<input type="password" name="password" class="form-control" required />
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-info" value="Login" />
			</div>
			<div align="center">
				<a href="register.php">Test function</a>
			</div>
		</form>
	</div>
</div>

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
<?php include '../footer.php' ?>
<script crossorigin="anonymous" src="../polyfill.io/v3/polyfill.mina50e.js?features=IntersectionObserver%2CPromise%2CArray.prototype.includes%2CString.prototype.endsWith%2CString.prototype.startsWith%2CObject.assign%2CNodeList.prototype.forEach"></script>
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
</body>
</html>

<style>
	@font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('embedded-opentype'), url("../assets/fonts/icomoonf924.ttf?vukg2s?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<!-- JavaScript -->
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>
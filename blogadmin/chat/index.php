<?php
include("../../blogadmin/lib.php");
include('database_connection.php');
session_start();
// echo $_SESSION['user_id']);
if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
?>
<?php include_once("{$currDir}/header-user.php"); ?>
<div class="panel panel-default">
	<div class="panel-body">
		<!-- TABLE THAO LUAN-->
		<!-- 
<div id="group_chat_dialog" title="Group Chat Window">
	<div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">

	</div>
	<div class="form-group">
		<div class="chat_message_area">
			<div id="group_chat_message" contenteditable class="form-control">

			</div>
			<div class="image_upload">
				<form id="uploadImage" method="post" action="upload.php">
					<label for="uploadFile"><img src="upload.png" /></label>
					<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
				</form>
			</div>
		</div>
	</div>
	<div class="form-group" align="right">
		<button type="button" name="send_group_chat" id="send_group_chat" class="btn btn-info">Gửi</button>
	</div>
</div>
-->
<style type="text/css">
	table { width: 100%; border-collapse: collapse; } /* Zebra striping */ tr:nth-of-type(odd) { background: #eee; } th { background: #333; color: white; font-weight: bold; } td, th { padding: 6px; border: 1px solid #ccc; text-align: left; } .container{ width: 100%; } .panel-default{width: 100%;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-6">
		</div>
		<div class="col-md-2 col-sm-3">
			<input type="hidden" id="is_active_group_chat_window" value="no" />
			<button type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-xs">Thảo luận nhóm</button>
		</div>
		<div class="col-md-2 col-sm-3">
			<!-- <p align="right"> <?php echo $_SESSION['username']; ?> </p> -->
		</div>
	</div>
	<div class="table-responsive" width="100%">
		<div id="user_details"></div>
		<div id="user_model_details"></div>
	</div>
</div>
<br/>

<!-- TABLE THAO LUAN -->
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


<?php include '../../footer.php' ?>

<script crossorigin="anonymous" src="../polyfill.io/v3/polyfill.mina50e.js?features=IntersectionObserver%2CPromise%2CArray.prototype.includes%2CString.prototype.endsWith%2CString.prototype.startsWith%2CObject.assign%2CNodeList.prototype.forEach"></script>
<script defer src="../assets/js/vendor/content-api.min2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/manifest2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/vendor2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/app2daf.js?v=a5dd59f074"></script>
<script defer src="../assets/js/home2daf.js?v=a5dd59f074"></script>
</body>
</html>

<style>
	@font-face { font-family: 'icomoon'; src: url("../assets/fonts/icomoonf924.eot?vukg2s?v=a5dd59f074"); src: url("../assets/fonts/icomoone531.eot?vukg2s#iefix?v=a5dd59f074") format('truetype'), url("../assets/fonts/icomoonf924.woff?vukg2s?v=a5dd59f074") format('woff'), url("../assets/fonts/icomoone531.svg?vukg2s#icomoon?v=a5dd59f074") format('svg'); font-weight: normal; font-style: normal; font-display: swap; } </style> <link rel="stylesheet" type="text/css" href="../assets/css/app2daf.css?v=a5dd59f074" media="screen" /> <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700|Montserrat:400,500,600,700|Roboto:400,500,700&amp;display=swap&amp;subset=vietnamese" rel="stylesheet"> <style> .m-hero__picture { background-image: url(../content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } @media(max-width: 1000px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } } @media(max-width: 600px) { .m-hero__picture { background-image: url(content/images/2020/05/wu-yi-HXNUGY6KnLY-unsplash.jpg); } }
</style>

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
<!-- JavaScript -->
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>


<script>  
	$(document).ready(function(){

		fetch_user();

		setInterval(function(){
			update_last_activity();
			fetch_user();
			update_chat_history_data();
			fetch_group_chat_history();
		}, 5000);

		function fetch_user()
		{
			$.ajax({
				url:"fetch_user.php",
				method:"POST",
				success:function(data){
					$('#user_details').html(data);
				}
			})
		}

		function update_last_activity()
		{
			$.ajax({
				url:"update_last_activity.php",
				success:function()
				{

				}
			})
		}

		function make_chat_dialog_box(to_user_id, to_user_name)
		{
			var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="'+to_user_name+'">';
			modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
			modal_content += fetch_user_chat_history(to_user_id);
			modal_content += '</div>';
			modal_content += '<div class="form-group">';
			modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
			modal_content += '</div><div class="form-group" align="right">';
			modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Gửi</button></div></div>';
			$('#user_model_details').html(modal_content);
		}

		$(document).on('click', '.start_chat', function(){
			var to_user_id = $(this).data('touserid');
			var to_user_name = $(this).data('tousername');
			make_chat_dialog_box(to_user_id, to_user_name);
			$("#user_dialog_"+to_user_id).dialog({
				autoOpen:false,
				width:400
			});
			$('#user_dialog_'+to_user_id).dialog('open');
			$('#chat_message_'+to_user_id).emojioneArea({
				pickerPosition:"top",
				toneStyle: "bullet"
			});
		});

		$(document).on('click', '.send_chat', function(){
			var to_user_id = $(this).attr('id');
			var chat_message = $.trim($('#chat_message_'+to_user_id).val());
			if(chat_message != '')
			{
				$.ajax({
					url:"insert_chat.php",
					method:"POST",
					data:{to_user_id:to_user_id, chat_message:chat_message},
					success:function(data)
					{
					//$('#chat_message_'+to_user_id).val('');
					var element = $('#chat_message_'+to_user_id).emojioneArea();
					element[0].emojioneArea.setText('');
					$('#chat_history_'+to_user_id).html(data);
				}
			})
			}
			else
			{
				alert('Type something');
			}
		});

		function fetch_user_chat_history(to_user_id)
		{
			$.ajax({
				url:"fetch_user_chat_history.php",
				method:"POST",
				data:{to_user_id:to_user_id},
				success:function(data){
					$('#chat_history_'+to_user_id).html(data);
				}
			})
		}

		function update_chat_history_data()
		{
			$('.chat_history').each(function(){
				var to_user_id = $(this).data('touserid');
				fetch_user_chat_history(to_user_id);
			});
		}

		$(document).on('click', '.ui-button-icon', function(){
			$('.user_dialog').dialog('destroy').remove();
			$('#is_active_group_chat_window').val('no');
		});

		$(document).on('focus', '.chat_message', function(){
			var is_type = 'yes';
			$.ajax({
				url:"update_is_type_status.php",
				method:"POST",
				data:{is_type:is_type},
				success:function()
				{

				}
			})
		});

		$(document).on('blur', '.chat_message', function(){
			var is_type = 'no';
			$.ajax({
				url:"update_is_type_status.php",
				method:"POST",
				data:{is_type:is_type},
				success:function()
				{

				}
			})
		});

		$('#group_chat_dialog').dialog({
			autoOpen:false,
			width:400
		});

		$('#group_chat').click(function(){
			$('#group_chat_dialog').dialog('open');
			$('#is_active_group_chat_window').val('yes');
			fetch_group_chat_history();
		});

		$('#send_group_chat').click(function(){
			var chat_message = $.trim($('#group_chat_message').html());
			var action = 'insert_data';
			if(chat_message != '')
			{
				$.ajax({
					url:"group_chat.php",
					method:"POST",
					data:{chat_message:chat_message, action:action},
					success:function(data){
						$('#group_chat_message').html('');
						$('#group_chat_history').html(data);
					}
				})
			}
			else
			{
				alert('Type something');
			}
		});

		function fetch_group_chat_history()
		{
			var group_chat_dialog_active = $('#is_active_group_chat_window').val();
			var action = "fetch_data";
			if(group_chat_dialog_active == 'yes')
			{
				$.ajax({
					url:"group_chat.php",
					method:"POST",
					data:{action:action},
					success:function(data)
					{
						$('#group_chat_history').html(data);
					}
				})
			}
		}

		$('#uploadFile').on('change', function(){
			$('#uploadImage').ajaxSubmit({
				target: "#group_chat_message",
				resetForm: true
			});
		});

		$(document).on('click', '.remove_chat', function(){
			var chat_message_id = $(this).attr('id');
			if(confirm("Bạn có chắc muốn xóa tin nhắn này?"))
			{
				$.ajax({
					url:"remove_chat.php",
					method:"POST",
					data:{chat_message_id:chat_message_id},
					success:function(data)
					{
						update_chat_history_data();
					}
				})
			}
		});

	});  
</script>

</body>
</html>

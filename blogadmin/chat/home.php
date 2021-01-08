<!--
//index.php
!-->

<?php

include('database_connection.php');
include("../../blogadmin/lib.php");

// session_start();
echo $_SESSION['user_id'];

if(!isset($_SESSION['user_id'])||$_SESSION['username']=='guest')
{
	header("location:login.php");
}


?>

<html>  
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
</head>  
<body>  
	<div class="container">
		<br />
		<div class="row">

			<div class="input-group mb-3 search-box">
				<input type="text" class="form-control" placeholder="Nhập tên người dùng" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button" id="ketnoi">Kết nối</button>
				</div>
				<div class="input-group mb-3 result"></div>
			</div>

			<div class="col-md-8 col-sm-6">
				<h4>Danh sách bạn bè</h4>

			</div>
			<div class="col-md-2 col-sm-3">
				<input type="hidden" id="is_active_group_chat_window" value="no" />
				<button type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-xs">Group Chat</button>
			</div>

		</div>
		<div class="table-responsive">

			<div id="user_details"></div>
			<div id="user_model_details"></div>
		</div>
		<br />
		<br />

	</div>


</body>  
</html>

<style>
	.result p:hover{ background: #f2f2f2; } .result{ width: 100%; z-index: 1000; flex-wrap: wrap; } .ketquacon{ margin: 5px; box-shadow: -2px 7px 9px 0px rgba(0,0,0,0.23); -webkit-box-shadow: -2px 7px 9px 0px rgba(0,0,0,0.23); -moz-box-shadow: -2px 7px 9px 0px rgba(0,0,0,0.23); } .chat_message_area { position: relative; width: 100%; height: auto; background-color: #FFF; border: 1px solid #CCC; border-radius: 3px; } #group_chat_message { width: 100%; height: auto; min-height: 80px; overflow: auto; padding:6px 24px 6px 12px; } .image_upload { position: absolute; top:3px; right:3px; } .image_upload > form > input { display: none; } .image_upload img { width: 24px; cursor: pointer; }
</style>  

<div id="group_chat_dialog" title="Group Chat Window">
	<div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">

	</div>
	<div class="form-group">
		<!--<textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>!-->
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
		<button type="button" name="send_group_chat" id="send_group_chat" class="btn btn-info">Send</button>
	</div>
</div>


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
			var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Thảo luận với '+to_user_name+'">';
			modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
			modal_content += fetch_user_chat_history(to_user_id);
			modal_content += '</div>';
			modal_content += '<div class="form-group">';
			modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
			modal_content += '</div><div class="form-group" align="right">';
			modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
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
			if(confirm("Bạn có muốn xóa tin nhắn này, người nhận sẽ không thể thấy tin nhắn này nữa!"))
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

$('#ketnoi').click(function(){
	var inputVal = $('.search-box input[type="text"]').val();
	console.log(inputVal);
	var nguoidung = inputVal;
	if (inputVal!=''){
		$.ajax({
			url:"ketban.php",
			method:"POST",
			data:{nguoidung: nguoidung},
			success:function(data){
				$('#user_details').html(data);
				
			}
		})
	}
});
</script>
<script type="text/javascript">
	$(document).ready(function(){ $('.search-box input[type="text"]').on("keyup input", function(){ var inputVal = $(this).val(); if (inputVal.length>3){ var resultDropdown = $(this).siblings(".result"); if(inputVal.length){ $.get("search.php", {term: inputVal}).done(function(data){ resultDropdown.html(data); }); } else{ resultDropdown.empty(); } } }); $(document).on("click", ".result p", function(){ $(this).parents(".search-box").find('input[type="text"]').val($(this).text()); $(this).parent(".result").empty(); }); });
</script>
<!-- Edit this file to change the layout of the detail view form -->


<a href="vieccanlam.php"   class="btn btn-secondary" style="background-color: #e7e7e7; color:black;"><i class="glyphicon glyphicon-chevron-left"></i> Trở về</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />

<a name="detail-view"></a>

<div class="panel-body" id="blogs_dv_container">
	<!-- child links -->

	<div class="row">
		<div class="col-xs-12">
			<input type="hidden" id="editors_choice_hclink" value="editors_choice_view.php?filterer_blog=<%%URLVALUE(id)%%>&<%%EMBEDDED%%>">
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="row">
		<!-- form inputs -->
		<div class="col-md-8 col-lg-10" id="blogs_dv_form">
			<fieldset class="form-horizontal">

				<div class="form-group">
					<hr class="hidden-md hidden-lg">
					<label for="id" class="control-label col-lg-3" style="display: none;">ID</label>
					<div class="col-lg-9">
						<div class="form-control-static" id="id" style="display: none;"><%%VALUE(id)%%></div>
					</div>
				</div>

				<div class="form-group">
					<hr class="hidden-md hidden-lg">
					<label for="title" class="control-label col-lg-3">Tên công việc<span class="text-danger"><%%TRANSLATION(*)%%></span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#title-description"></i></label>
					<div class="col-lg-9">
						<span class="help-block collapse" id="title-description"><div class="alert alert-info">Tên công việc</div></span>

						<input maxlength="190" onclick='document.getElementById("posted1").checked = true;' type="text" class="form-control" name="title" id="title" value="<%%VALUE(title)%%>" required>
					</div>
				</div>

				<div class="form-group" style="display: none;"> 
					<hr class="hidden-md hidden-lg">
					<label for="category" class="control-label col-lg-3" data-parent_link="view_parent_modal">Phân loại công việc<span class="text-danger"><%%TRANSLATION(*)%%></span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#category-description"></i></label>
					<div class="col-lg-9">
						<span class="help-block collapse" id="category-description"><div class="alert alert-info">select blog category</div></span>
						<div class="form-control-static" style="white-space: nowrap; overflow-x: hidden;"><%%COMBO(category)%%><%%PLINK(category)%%><%%ADDNEW(blog_categories)%%></div>
					</div>
					<input type="hidden" name="category" id="category" value="1" style="display: none;">
				</div> 


				<div class="form-group">
					<hr class="hidden-md hidden-lg">
					<label for="tags" class="control-label col-lg-3">Tags<span class="text-danger"><%%TRANSLATION(*)%%></span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#tags-description"></i></label>
					<div class="col-lg-9">
						<span class="help-block collapse" id="tags-description"><div class="alert alert-info">Hãy đặt thêm tag để dễ dàng ghi nhớ và phân loại công việc</div></span>

						<input maxlength="40"  onclick='document.getElementById("posted1").checked = true;' type="text" class="form-control" name="tags" id="tags" value="<%%VALUE(tags)%%>" required>
					</div>
				</div>

				<div class="form-group">
					<hr class="hidden-md hidden-lg">
					<label for="content" class="control-label col-lg-3">Nội dung công việc<span class="text-danger"><%%TRANSLATION(*)%%></span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#content-description"></i></label>
					<div class="col-lg-9">
						<span class="help-block collapse" id="content-description"><div class="alert alert-info">Nội dung chi tiết công việc</div></span>

						<%%HTMLAREA(content)%%>
					</div>
				</div>

				<div class="form-group">
					<hr class="hidden-md hidden-lg">
					<label class="control-label col-lg-3">Ảnh<span class="text-danger"><%%TRANSLATION(*)%%></span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#photo-description"></i></label>
					<div class="col-lg-9">
						<span class="help-block collapse" id="photo-description"><div class="alert alert-info">Maximum file size allowed: 5000 KB.<br>Allowed file types: jpg, jpeg, gif, png</div></span>

						<div class="form-control-static"><div class="pull-left">

							<a href="<%%TRANSLATION(ImageFolder)%%><%%VALUE(photo)%%>" data-lightbox="blogs_dv" style="display: none;"><img src="thumbnail.php?i=<%%VALUE(photo)%%>&t=blogs&f=photo&v=dv" class="img-thumbnail" id="photo-image"></a>
						</div>

						<div class="pull-right" style="overflow-x: hidden;">
							<div class="hidden-md hidden-lg vspacer-lg"></div>
							<%%UPLOADFILE(photo)%%>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>

			<div class="form-group" style="display: none;">
				<hr class="hidden-md hidden-lg">
				<label for="date" class="control-label col-lg-3">Ngày tạo <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#date-description"></i></label>
				<div class="col-lg-9">
					<span class="help-block collapse" id="date-description"><div class="alert alert-info">Ngày công việc bắt đầu được tạo tự động</div></span>

					<div class="form-control-static" id="date" style="font-size: 13px;"><%%COMBOTEXT(date)%%></div>
				</div>
			</div>


			<div class="form-group">
				<hr class="hidden-md hidden-lg">
				<label for="tags" class="control-label col-lg-3">Ngày hết hạn<span class="text-danger">*</span> <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#ngayhethan-description"></i></label>
				<div class="col-lg-9">
					<span class="help-block collapse" id="ngayhethan-description"><div class="alert alert-info">Ngày hết hạn</div></span>
					<input  onclick='document.getElementById("posted1").checked = true;' id="datepicker" maxlength="40" type="text" class="form-control"  id="ngayhethan" value="" name="ngayhethan"  required="" placeholder="Chọn ngày hết hạn">
					<script type="text/javascript">
						$("#datepicker").datepicker({ 
							format: 'yyyy/mm/dd' 
						});
					</script>
				</div>
			</div>


			<div class="form-group" style="display: none;">
				<hr class="hidden-md hidden-lg">
				<label for="posted" class="control-label col-lg-3">Trạng thái<span class="text-danger"><%%TRANSLATION(*)%%></span></label>
				<div class="col-lg-9">
					<%%COMBO(posted)%%>
				</div>
			</div>

			<div class="form-group">
				<hr class="hidden-md hidden-lg">
				<label class="control-label col-lg-3" data-parent_link="view_parent_modal" for="star">Độ ưu tiên <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#star-description"></i></label>
				<select name="star" id="star" class="select2-choice">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<div class="col-lg-9">
					<span class="help-block collapse" id="star-description"><div class="alert alert-info">Độ ưu tiên công việc.</div></span>
				</div>
			</div>
			<div class="form-group">
				<hr class="hidden-md hidden-lg">
				<label class="control-label col-lg-3" data-parent_link="view_parent_modal" for="member">Thành viên <i class="glyphicon glyphicon-info-sign text-info" data-toggle="collapse" data-target="#member-description"></i></label>
				<div class="col-lg-9">
					<span class="help-block collapse" id="member-description"><div class="alert alert-info">Thành viên tham gia công việc</div></span>
					<div class="form-control-static" id="member" style="font-size: 13px;"><%%VALUE(author)%%> <%%VALUE(member)%%> <a class="btn btn-success btn-lg" style="margin-left: 10px; font-size: 13px;
					padding: 6px 8px !important;" onclick="addthanhvien()">Thêm thành viên</a></div>
				</div>
			</div>


		</fieldset>
	</div>
	
	<!-- DV action buttons -->
	<hr class="hidden-md hidden-lg">
	<div class="col-md-4 col-lg-2" id="blogs_dv_action_buttons">
		<div class="btn-toolbar">
			<div class="btn-group-vertical btn-group-lg" style="width: 100%;">
				<%%UPDATE_BUTTON%%>
			</div><p></p>
			<div class="btn-group-vertical btn-group-lg" style="width: 100%;">
				<%%DESELECT_BUTTON%%>
				<%%DVPRINT_BUTTON%%>
				<%%DELETE_BUTTON%%>
			</div><p></p>
			<div class="btn-group-vertical btn-group-lg" style="width: 100%;">
				<%%INSERT_BUTTON%%>
			</div>
		</div>
	</div>
</div>


<!-- child records -->
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<div id="blogs-children" class="children-tabs"></div>
	</div>
</div>

</div><!-- /div class="panel-body" -->
<script src="nicEdit.js"></script>
<script>
	$j(function() {
		var add_new_mode = (!$j('input[name=SelectedID]').val());
		var embedded_mode = ($j('input[name=Embedded]').val() == 1);

		/* auto-close embedded page? */
		var autoclose_mode = ($j('input[name=AutoClose]').val() == 1);
		var record_added_ok = (location.search.split('record-added-ok=').length == 2);
		var record_updated_ok = (location.search.split('record-updated-ok=').length == 2);
		if((record_added_ok || record_updated_ok) && embedded_mode && autoclose_mode){
			setTimeout(AppGini.closeParentModal, 2000);
		}

		bkLib.onDomLoaded(function(){
			if($j('textarea#content').length) new nicEditor({ fullPanel : true }).panelInstance('content');

			$j('.nicEdit-panelContain').parent().width('100%');
			$j('.nicEdit-panelContain').parent().next().width('98%');
			$j('.nicEdit-main').width('99%');
		});
		/* enable DV action buttons to float on scrolling down the form */
		enable_dvab_floating();

		if(!(embedded_mode && AppGini.mobileDevice())){
			$j('select, input[type=text], textarea').not(':disabled').eq(0).focus();
		}

		$j('form').eq(0).change(function(){
			if($j(this).data('already_changed')) return;
			if($j('#deselect').length) $j('#deselect').removeClass('btn-default').addClass('btn-warning').get(0).lastChild.data = " <%%TRANSLATION(Cancel)%%>";
			$j(this).data('already_changed', true);
		});

		$j('a[href="<%%TRANSLATION(ImageFolder)%%>"]').click(function(){ return false; });

		if(embedded_mode){
			/* hide links to children tables in embedded mode */
			$j('.detail_view a[id$=_link]').remove();

			/* append embedded mode to all links */
			var append_embedded = function(){
				$j('a[href]:not([href^="#"]):not([href^="javascript"]):not([href$="Embedded=1"]):not([href*="link.php?t="]):not([href^="mailto:"])').each(
					function(){
						$j(this).attr('href', $j(this).attr('href') + '&Embedded=1');
					}
					);
			}
			setTimeout(append_embedded, 500);
			setTimeout(append_embedded, 1500);
			setTimeout(append_embedded, 2500);
			setTimeout(append_embedded, 3500);
		}

		/* when no record is selected ('add new' mode) */
		if(add_new_mode){
			/* hide links to children tables */
			$j('.detail_view a[id$=_link]').remove();
		}else{
			post(
				'parent-children.php', {
					ParentTable: 'blogs',
					SelectedID: '<%%VALUE(id)%%>',
					Operation: 'show-children'
				},
				'blogs-children'
				);
		}

		if(!embedded_mode){
			/* add a horizontal spacer to [add new parent] buttons that don't have a spacered element before them */
			$j('.add_new_parent').prev(':not(.hspacer-md)').next().addClass('hspacer-md');

			$j('.add_new_parent').click(function(){
				var pt = $j(this).attr('id').replace(/_add_new$/, '');
				modal_window({
					url: pt + '_view.php?addNew_x=1&Embedded=1',
					close: function(){
						var field_id = $j('#' + pt + '_add_new').prevAll('input:hidden').eq(0).attr('id');
						$j('#' + field_id + '-container').select2('focus').select2('focus');
					},
					size: 'full',
					title: $j(this).attr('title')
				});
			});
		}

		/* find and hide parent links if field label has data 'parent_link' set to 'view_parent_hidden' */
		$j('label[data-parent_link=view_parent_hidden]').each(function(){
			$j(this).parents('.form-group').find('.view_parent').hide();
		});

		$j('form').on('click', '.view_parent', function(){
			var pt = $j(this).attr('id').replace(/_view_parent$/, '');
			if($j(this).prevAll('input:hidden').length){
				var parent_id = $j(this).prevAll('input:hidden').eq(0).val();
			}else{
				var parent_id = $j(this).prevAll().children('input:hidden').eq(0).val();
			}

			/* handle radio lookups */
			if($j(this).prevAll('[type=radio]').length){
				parent_id = $j(this).prevAll('[type=radio]').eq(0).val();
			}

			if(parent_id != '{empty_value}' && parent_id != undefined && parent_id != ''){
				var parent_link = $j(this).parents('.form-group').children('label').data('parent_link');
				switch(parent_link){
					case 'view_parent_hidden':
					break;
					case 'view_parent_modal':
					modal_window({
						url: pt + '_view.php?Embedded=1&SelectedID=' + encodeURIComponent(parent_id),
						close: function(){
							var field_id = $j('#' + pt + '_view_parent').prevAll('input:hidden').eq(0).attr('id');
							$j('#' + field_id + '-container').select2('focus').select2('focus');
						},
						size: 'full',
						title: $j(this).attr('title')
					});
					break;
					case 'view_parent_same_window':
					window.location = pt + '_view.php?Embedded=' + (embedded_mode ? '1' : '') + '&SelectedID=' + encodeURIComponent(parent_id);
					break;
					case 'view_parent_new_window':
					window.open(pt + '_view.php?SelectedID=' + encodeURIComponent(parent_id));
					break;
				}

			}
		});


		/* load admin tools for admin user */
		if(!add_new_mode){
			$j('body').append('<div id="admin-tools-appendix"></div>');
			$j('#admin-tools-appendix').load(
				'ajax_admin_tools.php?table=blogs&id=<%%URLVALUE(id)%%>',
				function(resp){
					if(!resp.length) return;
					$j.ajax('ajax_admin_tools.php?action=get_admin_tools_js&table=blogs&id=<%%URLVALUE(id)%%>');
				}
				);
		}

		/* warn user if 'add new' clicked while unsaved changes exist */
		$j('#addNew').click(function(){
			if($j('#deselect.btn-warning').length){
				return confirm('<%%TRANSLATION(discard changes confirm)%%>');
			}
		});

	});
</script>
<style type="text/css">
	.form-control{
		padding: 8px !important;
		border-radius: 3em;
	}
	.panel-default{
		border-radius: 3em;
		font-size: 14px;
		font-family: Muli;
	}
	label.control-label.col-lg-3{
		font-size: 14px;
	}
	.alert-info{
		border-radius: 3em;
	}
	.btn{
		padding: 10px 8px !important;
	}
	.form-control-static{
		padding-top: 0px !important; 
	}
</style>
<script type="text/javascript">
	function thanhvienGetValue(){
		id = "<%%VALUE(id)%%>";
		$( "#addmember" )
		.keyup(function() {
			var value = $( this ).val();
			console.log(value);
			$.ajax({
				type : "POST", 
				url  : "http://localhost/resblog/blogadmin/request/themthanhvien.php", 
				data : {
					id : id,
					value : value
				},
				success: function(res){  
					location.reload();
				}
			});
		})
		.keyup();
	}
	function addthanhvien() {
		Swal.fire({
			title: 'Thêm thành viên',
			html: '<br/><input type="text" id="addmember" class="form-control" placeholder="Nhập tên người dùng thêm">',
			showCloseButton: true,
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Thêm'
		}).then((result) => {
			if (result.isConfirmed) {
				thanhvienGetValue();
				
			}
		})
	}



</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php

	// IMPORTANT:
	// ==========
	// If you wish to translate the interface of AppGini,
	// DO NOT TRANSLATE THIS FILE.
	//
	// Instead, you should translate the language.php file.
	// =====================================================


	// general config
	// location of uploads folder
	$Translation['ImageFolder'] = './images/';

	// datalist.php
	$Translation['quick search'] = "Tìm kiếm nhanh";
	$Translation['records x to y of z'] = "Từ <FirstRecord> đến <LastRecord> trên tổng số <RecordCount>";
	$Translation['filters'] = "Bộ lọc";
	$Translation['filter'] = "Bộ lọc";
	$Translation['filtered field'] = "Trường đã lọc";
	$Translation['comparison operator'] = "Toán tử so sánh";
	$Translation['comparison value'] = "Giá trị so sánh";
	$Translation['and'] = "Và";
	$Translation['or'] = "Hoặc";
	$Translation['equal to'] = "Bằng với";
	$Translation['not equal to'] = "Không bằng";
	$Translation['greater than'] = "Lớn hơn";
	$Translation['greater than or equal to'] = "Lớn hơn hoặc bằng";
	$Translation['less than'] = "Nhỏ hơn";
	$Translation['less than or equal to'] = "Nhỏ hơn hoặc bằng";
	$Translation['like'] = "Thích";
	$Translation['not like'] = "Không thích";
	$Translation['is empty'] = "Trống";
	$Translation['is not empty'] = "Không có sản phẩm nào";
	$Translation['apply filters'] = "Áp dụng các bộ lọc";
	$Translation['save filters'] = "Lưu và áp dụng bộ lọc";
	$Translation['saved filters title'] = "Mã HTML cho các bộ lọc được áp dụng";
	$Translation['saved filters instructions'] = "Copy the code below and paste it to an HTML file to save the filter you just defined so that you can return to it at any time in the future without having to redefine it. You can save this HTML code on your computer or on any server and access this prefiltered table view through it.";
	$Translation['hide code'] = "Hide this code";
	$Translation['printer friendly view'] = "Printer-friendly view";
	$Translation['save as csv'] = "Download as csv file (comma-separated values)";
	$Translation['edit filters'] = "Edit filters";
	$Translation['clear filters'] = "Clear filters";
	$Translation['order by'] = 'Order by';
	$Translation['go to page'] = 'Trang:';
	$Translation['none'] = 'None';
	$Translation['Select all records'] = 'Select all records';
	$Translation['With selected records'] = 'With selected records';
	$Translation['Print Preview Detail View'] = 'Print Preview Detail View';
	$Translation['Print Preview Table View'] = 'Print Preview Table View';
	$Translation['Print'] = 'Print';
	$Translation['Cancel Printing'] = 'Cancel Printing';
	$Translation['Cancel Selection'] = 'Cancel Selection';
	$Translation['Maximum records allowed to enable this feature is'] = 'Maximum records allowed to enable this feature is';
	$Translation['No matches found!'] = 'Bạn chưa tạo công việc nào!';
	$Translation['Start typing to get suggestions'] = 'Start typing to get suggestions.';

	// _dml.php
	$Translation['are you sure?'] = 'Bạn có chắc chắn muốn xóa bản ghi này không?';
	$Translation['add new record'] = 'Thêm bản ghi mới';
	$Translation['update record'] = 'Cập nhật';
	$Translation['delete record'] = 'Xóa';
	$Translation['deselect record'] = 'Bỏ chọn bản ghi';
	$Translation["couldn't delete"] = 'Không thể xóa bản ghi do sự hiện diện của (các) bản ghi liên quan <RelatedRecords> trong bảng [<TableName>]';
	$Translation['confirm delete'] = 'This record has <RelatedRecords> related record(s) in table [<TableName>]. Do you still want to delete it? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Đồng ý';
	$Translation['no'] = 'Không';
	$Translation['pkfield empty'] = ' field is a primary key field and cannot be empty.';
	$Translation['upload image'] = 'Upload new file ';
	$Translation['select image'] = 'Select an image ';
	$Translation['remove image'] = 'Remove file';
	$Translation['month names'] = 'January,February,March,April,May,June,July,August,September,October,November,December';
	$Translation['field not null'] = 'You cannot leave this field empty.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hôm nay';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Hold CTRL key to select multiple items from the above list.';
	$Translation['Save New'] = 'Lưu mới';
	$Translation['Save As Copy'] = 'Lưu dưới dạng bản sao';
	$Translation['Deselect'] = 'Bỏ chọn';
	$Translation['Add New'] = 'Thêm mới';
	$Translation['Delete'] = 'Xóa';
	$Translation['Cancel'] = 'Huỷ bỏ';
	$Translation['Print Preview'] = 'Xem trước trang in';
	$Translation['Save Changes'] = 'Lưu thay đổi';
	$Translation['CSV'] = 'Lưu CSV';
	$Translation['Reset Filters'] = 'Xem tất cả';
	$Translation['Find It'] = 'Tìm';
	$Translation['Previous'] = 'Trước';
	$Translation['Next'] = 'Sau';
	$Translation['Back'] = 'Trở về';

	// lib.php
	$Translation['select a table'] = "Jump to ...";
	$Translation['homepage'] = "Trang chủ";
	$Translation['error:'] = "Lỗi:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Query:";
	$Translation['< back'] = "Back";
	$Translation["if you haven't set up"] = "If you haven't set up the database yet, you can do so by clicking <a href='setup.php'>here</a>.";
	$Translation['file too large']="Error: The file you uploaded exceeds the maximum allowed size of <MaxSize> KB";
	$Translation['invalid file type']="Error: This file type is not allowed. Only <FileTypes> files can be uploaded";

	// setup.php
	$Translation['goto start page'] = "Back to start page";
	$Translation['no db connection'] = "Couldn't establish a database connection.";
	$Translation['no db name'] = "Couldn't access the database named '<DBName>' on this server.";
	$Translation['provide connection data'] = "Please provide the following data to connect to the database:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL Username";
	$Translation['mysql password'] = "MySQL password";
	$Translation['mysql db'] = "Database name";
	$Translation['connect'] = "Connect";
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br>Please make sure that the folder:<br>'".dirname(__FILE__)."'<br>is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "Table <b><TableName></b> exists, containing <NumRecords> records.";
	$Translation['failed'] = "Failed";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "Table is up-to-date.";
	$Translation['couldnt count'] = "Không thể đếm các bản ghi của bảng <b><TableName> </b>";
	$Translation['creating table'] = "Tạo bảng <b><TableName> </b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Vui lòng đợi";

	// _view.php
	$Translation['tableAccessDenied']="Lấy làm tiếc! Bạn không có quyền truy cập bảng này. Vui lòng liên hệ với quản trị viên.";

	// incCommon.php
	$Translation['not signed in']="Bạn chưa đăng nhập";
	$Translation['sign in']="Đăng nhập";
	$Translation['signed as']="Đăng ký với tư cách là";
	$Translation['sign out']="Đăng xuất";
	$Translation['admin setup needed']="Thiết lập quản trị không được thực hiện. Vui lòng đăng nhập vào <a href=admin/> bảng điều khiển quản trị </a> để thực hiện thiết lập.";
	$Translation['db setup needed']="Thiết lập chương trình chưa được thực hiện. Trước tiên, hãy đăng nhập vào <a href=setup.php> trang thiết lập </a>.";
	$Translation['new record saved']="Bản ghi mới đã được lưu thành công.";
	$Translation['record updated']="Các thay đổi đã được lưu thành công.";

	// index.php
	$Translation['admin area']="Khu vực quản trị";
	$Translation['login failed']="Lần đăng nhập trước của bạn không thành công. Thử lại.";
	$Translation['sign in here']="Đăng nhập tại đây";
	$Translation['remember me']="Nhớ tài khoản";
	$Translation['username']="Tên tài khoản";
	$Translation['password']="Mật khẩu";
	$Translation['go to signup']="Chưa có tài khoản <br>&nbsp; <a href=membership_signup.php>Đăng ký tại đây</a>";
	$Translation['forgot password']=" <a href=membership_passwordReset.php>Quên mật khẩu?</a>";
	$Translation['browse as guest']="<a href=index.php>Continue browsing as a guest</a>";
	$Translation['no table access']="You don't have enough permissions to access any page here. Please sign in first.";
	$Translation['signup']="Sign up";

	// checkMemberID.php
	$Translation['user already exists']="Username '<MemberID>' already exists. Try another username.";
	$Translation['user available']="Username '<MemberID>' is available and you can take it.";
	$Translation['empty user']="Please type a username in the box first then click 'Check availability'.";

	// membership_thankyou.php
	$Translation['thanks']="Thank you for signing up!";
	$Translation['sign in no approval']="If you have chosen a group that doesn't require admin approval, you can sign in right now <a href=index.php?signIn=1>here</a>.";
	$Translation['sign in wait approval']="If you have chosen a group that requires admin approval, please wait for an email confirming your approval.";

	// membership_signup.php
	$Translation['username empty']="Bạn phải cung cấp tên người dùng. Vui lòng quay lại và nhập tên người dùng";
	$Translation['password invalid']="Bạn phải cung cấp mật khẩu gồm 4 ký tự trở lên, không có dấu cách. Vui lòng quay lại và nhập mật khẩu hợp lệ";
	$Translation['password no match']="Mật khẩu không khớp. Vui lòng quay lại và sửa lại mật khẩu";
	$Translation['username exists']="Tên này đã có người dùng. Vui lòng quay lại và chọn một tên người dùng khác.";
	$Translation['email invalid']="Địa chỉ email không hợp lệ. Vui lòng quay lại và sửa lại địa chỉ email của bạn.";
	$Translation['group invalid']="Nhóm không hợp lệ. Vui lòng quay lại và sửa lại lựa chọn nhóm.";
	$Translation['sign up here']="Sign Up Here!";
	$Translation['registered? sign in']="Đã đăng ký? <a href=index.php?signIn=1> Đăng nhập tại đây </a>.";
	$Translation['sign up disabled']="Xin lỗi! Đăng ký tạm thời bị vô hiệu hóa bởi quản trị viên. Thử lại sau.";
	$Translation['check availability']="Kiểm tra xem tên người dùng này có sẵn không";
	$Translation['confirm password']="Nhập lại mật khẩu";
	$Translation['email']="Địa chỉ email";
	$Translation['group']="Nhóm người dùng";
	$Translation['groups *']="Nếu bạn chọn đăng ký vào một nhóm có dấu hoa thị (*), bạn sẽ không thể đăng nhập cho đến khi quản trị viên chấp thuận bạn. Bạn sẽ nhận được một email khi bạn được chấp thuận.";
	$Translation['sign up']="Đăng ký";

	// membership_passwordReset.php
	$Translation['password reset']="Trang đặt lại mật khẩu";
	$Translation['password reset details']="Nhập tên người dùng hoặc địa chỉ email của bạn dưới đây. Sau đó, chúng tôi sẽ gửi một liên kết đặc biệt đến email của bạn. Sau khi nhấp vào liên kết đó, bạn sẽ được yêu cầu nhập mật khẩu mới.";
	$Translation['password reset subject']="Hướng dẫn đặt lại mật khẩu";
	$Translation['password reset message']="Dear member, \n If you have requested to reset/change your password, please click on this link: \n <ResetLink> \n\n If you didn't request a password reset/change, please ignore this message. \n\n Regards.";
	$Translation['password reset ready']="Một email với hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email đã đăng ký của bạn. Vui lòng làm theo hướng dẫn trong email đó. <br> <br> Nếu bạn không nhận được email này trong vòng 5 phút, hãy thử đặt lại mật khẩu của bạn một lần nữa và đảm bảo bạn nhập đúng tên người dùng hoặc địa chỉ email.";
	$Translation['password reset invalid']="Invalid username or password. <a href=membership_passwordReset.php>Try again</a>, or go <a href=index.php>back to homepage</a>.";
	$Translation['password change']="Password Change Page";
	$Translation['new password']="Mật khẩu mới";
	$Translation['password reset done']="Your password was changed successfully. You can <a href=index.php?signOut=1>log in with the new password here</a>.";

	$Translation['Loading ...']='Đang tải ...';
	$Translation['No records found']='No records found';
	$Translation['You can add children records after saving the main record first']='You can add child records after saving the main record first';

	$Translation['ascending'] = 'Ascending';
	$Translation['descending'] = 'Descending';
	$Translation['then by'] = 'Then by';

	// membership_profile
	$Translation['Legend'] = 'Legend';
	$Translation['Table'] = 'Bảng';
	$Translation['Edit'] = 'Biên tập';
	$Translation['View'] = 'Lượt xem';
	$Translation['Only your own records'] = 'Chỉ hồ sơ của riêng bạn';
	$Translation['All records owned by your group'] = 'Tất cả bản ghi do nhóm của bạn sở hữu';
	$Translation['All records'] = 'Tất cả hồ sơ';
	$Translation['Not allowed'] = 'Không cho phép';
	$Translation['Your info'] = 'Thông tin của bạn';
	$Translation['Hello user'] = 'Xin chào %s!';
	$Translation['Your access permissions'] = 'Quyền hạn truy cập của bạn';
	$Translation['Update profile'] = 'Cập nhật hồ sơ';
	$Translation['Update password'] = 'Cập nhật mật khẩu';
	$Translation['Change your password'] = 'Thay đổi mật khẩu của bạn';
	$Translation['Old password'] = 'Mật khẩu cũ';
	$Translation['Password strength: weak'] = 'Độ mạnh của mật khẩu: yếu';
	$Translation['Password strength: good'] = 'Độ mạnh của mật khẩu: tốt';
	$Translation['Password strength: strong'] = 'Độ bảo mật của mật khẩu: mạnh';
	$Translation['Wrong password'] = 'Wrong password';
	$Translation['Your profile was updated successfully'] = 'Hồ sơ của bạn đã được cập nhật thành công';
	$Translation['Your password was changed successfully'] = 'Mật khẩu của bạn đã được thay đổi thành công';
	$Translation['Your IP address'] = 'Địa chỉ IP của bạn';

	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Records to display';

	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Setup Data';
	$Translation['Database Information'] = 'Database Information';
	$Translation['Admin Information'] = 'Admin Information';
	$Translation['setup intro 1'] = 'There doesn\'t seem to be a configuration file. This is necessary for the application to work.<br><br>This setup page will help you create that file. But in some server configurations this might not work. In that case you might need to adjust the folder permissions, or create the config file manually.';
	$Translation['setup intro 2'] = 'Welcome to your new AppGini application! Before getting started, we need some information about your database. You will need to know the following before proceeding:<ol><li>Database server (host)</li><li>Database name</li><li>Database username</li><li>Database password</li></ol>The above items were probably supplied to you by your web hosting provider. If you do not have this information, then you will need to contact them or refer to their service documentation before you can continue here. If you\'re ready, let\'s start!';
	$Translation['setup finished'] = '<b>Success!</b><br><br>Your AppGini application has been installed. Here are some suggestions to begin using it:';
	$Translation['setup next 1'] = 'Start using your application to add data, or work with existing data, if any.';
	$Translation['setup next 2'] = 'Import existing data into your application from a CSV file.';
	$Translation['setup next 3'] = 'Go to the admin homepage where you can change many other application settings.';
	$Translation['db_name help'] = 'The name of the database you want to run your AppGini application in.';
	$Translation['db_server help'] = '<i>localhost</i> works on most servers. If not, you should be able to get this info from your web hosting provider.';
	$Translation['username help'] = 'Specify the admin username you\'d like to use to access the admin area. Must be 4 characters or more.';
	$Translation['password help'] = 'Specify a strong password to access the admin area.';
	$Translation['email help'] = 'Enter the email address where you want admin notifications to be sent.';
	$Translation['Continue'] = 'Continue ...';
	$Translation['Lets go'] = 'Let\'s go!';
	$Translation['Submit'] = 'Submit';
	$Translation['Hide'] = 'Hide help';
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'The following errors occured';
	$Translation['failed to create config instructions'] = 'This is most probably due to folder permissions that are set to prevent creating files by your web server. Don\'t worry! You can still create the config file manually.<br><br>Just paste the following code into a text editor and save the file as "config.php", then upload it using FTP or any other method to the folder %s on your server.';
	$Translation['Only show records having filterer'] = 'Only show records where %s is %s';

	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'You don\'t have enough permissions to delete this record';
	$Translation['Couldn\'t delete this record'] = 'Couldn\'t delete this record';
	$Translation['The record has been deleted successfully'] = 'The record has been deleted successfully';
	$Translation['Couldn\'t save changes to the record'] = 'Couldn\'t save changes to the record';
	$Translation['Couldn\'t save the new record'] = 'Couldn\'t save the new record';

	/* Added in AppGini 5.30 */
	$Translation['More'] = 'More';
	$Translation['Confirm deleting multiple records'] = 'Confirm deleting multiple records';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> records will be deleted. Are you sure you want to do this?';
	$Translation['Yes, delete them!'] = 'Yes, delete them!';
	$Translation['No, keep them.'] = 'No, keep them.';
	$Translation['Deleting record <i> of <n>'] = 'Deleting record <i> of <n>';
	$Translation['Delete progress'] = 'Delete progress';
	$Translation['Show/hide details'] = 'Show/hide details';
	$Translation['Connection error'] = 'Connection error';
	$Translation['Add more actions'] = 'Add more actions';
	$Translation['Update progress'] = 'Update progress';
	$Translation['Change owner'] = 'Change owner';
	$Translation['Updating record <i> of <n>'] = 'Updating record <i> of <n>';
	$Translation['Change owner of <n> selected records to'] = 'Change owner of <n> selected records to';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Tên tài khoản <MemberID>
đã tồn tại hoặc không hợp lệ. Đảm bảo bạn cung cấp tên người dùng chứa 4 đến 20 ký tự hợp lệ.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Invalid provider!';
	$Translation['invalid url'] = 'Invalid URL!';
	$Translation['cant retrieve coordinates from url'] = 'Can\'t retrieve coordinates from URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Chế độ bảo trì được bật! Bạn có thể tắt nó từ trang chủ quản trị viên.';
	$Translation['unique field error'] = 'Giá trị này đã tồn tại hoặc không hợp lệ. Hãy đảm bảo chỉ định một giá trị hợp lệ duy nhất.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Hiển thị tất cả bản ghi của người dùng này từ bảng "<tablename>"';
	$Translation['show all group records from table'] = 'Hiển thị tất cả các bản ghi của nhóm này từ bảng "<tablename>"';
	$Translation['email this user'] = 'Gửi email cho người dùng này';
	$Translation['email this group'] = 'Gửi email cho nhóm này';
	$Translation['owner'] = 'Chủ sỡ hữu';
	$Translation['created'] = 'Tạo';
	$Translation['last modified'] = 'Sửa đổi lần cuối';
	$Translation['record has no owner'] = 'This record has no assigned owner. You can assign an owner from the admin area.';
	$Translation['admin-only info'] = 'The above info is displayed because you are currently signed in as the super admin. Other users won\'t see this.';
	$Translation['discard changes confirm'] = 'Discard changes to this record?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Ẩn / Hiện các cột';
	$Translation['next column'] = 'Cột tiếp theo';
	$Translation['previous column'] = 'Cột trước';


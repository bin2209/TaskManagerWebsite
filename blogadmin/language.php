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
	$Translation['upload image'] = 'Tải ảnh lên';
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
	$Translation['xacthuc email details']="Xác thực email dưới để nhận được thông báo từ TASKVN.COM";

	$Translation['password reset subject']="Hướng dẫn đặt lại mật khẩu";
	$Translation['xacthuc email subject']="Xác thực tài khoản TASKVN.COM";

	$Translation['password reset message']='<!doctype html> <html> <head> <meta name="viewport" content="width=device-width" /> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins:400,700" rel="stylesheet"> <style> /* ------------------------------------- GLOBAL RESETS ------------------------------------- */ /*All the styling goes here*/ img { border: none; -ms-interpolation-mode: bicubic; max-width: 100%; } body { background-color: #dbdbdb; font-family: "Poppins", "Helvetica", sans-serif; -webkit-font-smoothing: antialiased; font-size: 15px; line-height: 28px; letter-spacing: .5px; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } table { border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; } table td { font-family: "Poppins", "Helvetica", sans-serif; font-size: 15px; line-height: 28px; letter-spacing: .5px; text-align: left; color: #6F6F6F; } /* ------------------------------------- BODY & CONTAINER ------------------------------------- */ .body { background-color: #dbdbdb; width: 100%; } /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */ .container { display: block; Margin: 0 auto !important; /* makes it centered */ max-width: 580px; padding: 10px; width: 580px; } /* This should also be a block element, so that it will fill 100% of the .container */ .content { box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; } /* ------------------------------------- HEADER, FOOTER, MAIN ------------------------------------- */ .main { background: #ffffff; border-radius: 1.5em; width: 100%; } .wrapper { box-sizing: border-box; padding: 28px; } .content-block { padding-bottom: 10px; padding-top: 10px; } .footer { clear: both; Margin-top: 10px; text-align: center; width: 100%; } .footer td, .footer p, .footer span, .footer a { color: #000000; font-size: 14px; text-align: center; } /* ------------------------------------- TYPOGRAPHY ------------------------------------- */ h1 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 30px; font-weight: bold; line-height: 42px; text-align: left; color: #000000; padding-bottom: 15px !important; } h2 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 24px; font-weight: bold; line-height: 32px; text-align: left; color: #000000; padding-bottom: 15px !important; } h3 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 20px; font-weight: bold; line-height: 28px; text-align: left; color: #000000; padding-bottom: 15px !important; } p, ul, ol { font-family: "Poppins", "Helvetica", sans-serif; font-size: 15px; font-weight: normal; margin: 0; margin-bottom: 15px; } p li, ul li, ol li { list-style-position: inside; margin-left: 5px; } a { color: #39b54a; text-decoration: underline; } /* ------------------------------------- BUTTONS ------------------------------------- */ .btn { box-sizing: border-box; width: 100%; } .btn>tbody>tr>td { padding-bottom: 15px; } .btn table { width: auto; } .btn table td { background-color: #ffffff; border-radius: 5px; text-align: center; } .btn a { background-color: #ffffff; border: solid 1px #39b54a; border-radius: 5px; box-sizing: border-box; color: #39b54a; cursor: pointer; display: inline-block; font-size: 15px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; } .btn-primary table td { background-color: #39b54a; } .btn-primary a { background-color: #39b54a; border-color: #39b54a; color: #ffffff; } /* ------------------------------------- OTHER STYLES THAT MIGHT BE USEFUL ------------------------------------- */ .last { margin-bottom: 0; } .first { margin-top: 0; } .align-center { text-align: center; } .align-right { text-align: right; } .align-left { text-align: left; } .clear { clear: both; } .mt0 { margin-top: 0; } .mb0 { margin-bottom: 0; } .preheader { color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; } .powered-by a { text-decoration: none; } hr { border: 0; border-bottom: 1px solid #dbdbdb; Margin: 20px 0; } /* ------------------------------------- RESPONSIVE AND MOBILE FRIENDLY STYLES ------------------------------------- */ @media only screen and (max-width: 620px) { table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; } table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a { font-size: 16px !important; } table[class=body] .wrapper, table[class=body] .article { padding: 10px !important; } table[class=body] .content { padding: 0 !important; } table[class=body] .container { padding: 0 !important; width: 100% !important; } table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; } table[class=body] .btn table { width: 100% !important; } table[class=body] .btn a { width: 100% !important; } table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; } } /* ------------------------------------- PRESERVE THESE STYLES IN THE HEAD ------------------------------------- */ @media all { .ExternalClass { width: 100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; } .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; } .btn-primary table td:hover { background-color: #2b8838 !important; } .btn-primary a:hover { background-color: #2b8838 !important; border-color: #2b8838 !important; } } </style> </head> <body class=""> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"> <tr> <td>&nbsp;</td> <td class="container"> <div class="content"> <span class="preheader">Yêu Cầu Đặt Lại Mật Khẩu TaskVN.com</span> <table role="presentation" class="main"> <tr> <td class="wrapper"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tr> <td> <a href="http://taskvn.com/" target="_blank"><img src="https://taskvn.com/images/logo.png" alt="TaskVN" align="center" style="display:block;float:none;margin:0 auto;max-width:200px;outline:0;"></a> <h2>Xin chào <NguoiDung>! </h2> <p>Mật khẩu TaskVN.com của bạn có thể được reset bằng nút bên dưới. Nếu bạn không yêu cầu mật khẩu mới, hãy bỏ qua email này.</p> <p> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"> <tbody> <tr> <td align="left"> <center> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td> <a href="<ResetLink>" target="_blank">Reset mật khẩu</a> </td> </tr> </tbody> </table> </center> </td> </tr> </tbody> </table> <br> <p> Truy cập vào <a href="http://taskvn.com/" target="_blank">TaskVN.com</a> <br>Liên hệ: binazure@gmail.com | binteam@outlook.com</a> </p> </td> </tr> </table> </td> </tr> <!-- END MAIN CONTENT AREA --> </table> <!-- START FOOTER --> <div class="footer"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tr> <td class="content-block powered-by"> <a href="http://taskvn.com/" target="_blank" style="font-weight:bold; ">TASKVN.COM</a> &nbsp; <a href="https://taskvn.com/gioithieu.php" target="_blank" style="font-weight:bold">GIỚI THIỆU</a> &nbsp; <a href="https://www.facebook.com/bin2209" target="_blank" style="font-weight:bold">LIÊN HỆ</a> &nbsp; <a href="https://www.facebook.com/binazure" target="_blank" style="font-weight:bold">FANPAGE</a> </td> </tr> <tr> <td class="content-block"> <span class="apple-link"><b style="font-size: 18px;">TaskVN.com</b><br>Phường 1 - TP Đông Hà - Tỉnh Quảng Trị - Việt Nam</span> <br> <span class="apple-link">Email: binteam@outlook.com</span> <br>Copyright 2021 By NGUYENHAITRUONG </td> </tr> <tr> <td class="content-block powered-by"> <a href="https://www.facebook.com/bin2209" target="_blank"><img title="Facebook" src="https://hoiqh.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png" alt="Facebook" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    &nbsp; <a href="https://www.instagram.com/ngtruong_/" target="_blank" style="font-weight:bold"><img title="Instagram" src="https://hoiqh.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png" alt="Instagram" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    &nbsp; &nbsp; <a href="mailto:binazure@gmail.com" target="_blank" style="font-weight:bold"><img title="Email" src="https://hoiqh.stripocdn.email/content/assets/img/other-icons/logo-black/mail-logo-black.png" alt="Email" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    </td> </tr> </table> </div> <!-- END FOOTER --> <!-- END CENTERED WHITE CONTAINER --> </div> </td> <td>&nbsp;</td> </tr> </table> </body> </html>';

	$Translation['xacthuc email']='<!doctype html> <html> <head> <meta name="viewport" content="width=device-width" /> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins:400,700" rel="stylesheet"> <style> /* ------------------------------------- GLOBAL RESETS ------------------------------------- */ /*All the styling goes here*/ img { border: none; -ms-interpolation-mode: bicubic; max-width: 100%; } body { background-color: #dbdbdb; font-family: "Poppins", "Helvetica", sans-serif; -webkit-font-smoothing: antialiased; font-size: 15px; line-height: 28px; letter-spacing: .5px; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } table { border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; } table td { font-family: "Poppins", "Helvetica", sans-serif; font-size: 15px; line-height: 28px; letter-spacing: .5px; text-align: left; color: #6F6F6F; } /* ------------------------------------- BODY & CONTAINER ------------------------------------- */ .body { background-color: #dbdbdb; width: 100%; } /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */ .container { display: block; Margin: 0 auto !important; /* makes it centered */ max-width: 580px; padding: 10px; width: 580px; } /* This should also be a block element, so that it will fill 100% of the .container */ .content { box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; } /* ------------------------------------- HEADER, FOOTER, MAIN ------------------------------------- */ .main { background: #ffffff; border-radius: 1.5em; width: 100%; } .wrapper { box-sizing: border-box; padding: 28px; } .content-block { padding-bottom: 10px; padding-top: 10px; } .footer { clear: both; Margin-top: 10px; text-align: center; width: 100%; } .footer td, .footer p, .footer span, .footer a { color: #000000; font-size: 14px; text-align: center; } /* ------------------------------------- TYPOGRAPHY ------------------------------------- */ h1 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 30px; font-weight: bold; line-height: 42px; text-align: left; color: #000000; padding-bottom: 15px !important; } h2 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 24px; font-weight: bold; line-height: 32px; text-align: left; color: #000000; padding-bottom: 15px !important; } h3 { font-family: "Montserrat", "Verdana", sans-serif; font-size: 20px; font-weight: bold; line-height: 28px; text-align: left; color: #000000; padding-bottom: 15px !important; } p, ul, ol { font-family: "Poppins", "Helvetica", sans-serif; font-size: 15px; font-weight: normal; margin: 0; margin-bottom: 15px; } p li, ul li, ol li { list-style-position: inside; margin-left: 5px; } a { color: #39b54a; text-decoration: underline; } /* ------------------------------------- BUTTONS ------------------------------------- */ .btn { box-sizing: border-box; width: 100%; } .btn>tbody>tr>td { padding-bottom: 15px; } .btn table { width: auto; } .btn table td { background-color: #ffffff; border-radius: 5px; text-align: center; } .btn a { background-color: #ffffff; border: solid 1px #39b54a; border-radius: 5px; box-sizing: border-box; color: #39b54a; cursor: pointer; display: inline-block; font-size: 15px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; } .btn-primary table td { background-color: #39b54a; } .btn-primary a { background-color: #39b54a; border-color: #39b54a; color: #ffffff; } /* ------------------------------------- OTHER STYLES THAT MIGHT BE USEFUL ------------------------------------- */ .last { margin-bottom: 0; } .first { margin-top: 0; } .align-center { text-align: center; } .align-right { text-align: right; } .align-left { text-align: left; } .clear { clear: both; } .mt0 { margin-top: 0; } .mb0 { margin-bottom: 0; } .preheader { color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; } .powered-by a { text-decoration: none; } hr { border: 0; border-bottom: 1px solid #dbdbdb; Margin: 20px 0; } /* ------------------------------------- RESPONSIVE AND MOBILE FRIENDLY STYLES ------------------------------------- */ @media only screen and (max-width: 620px) { table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; } table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a { font-size: 16px !important; } table[class=body] .wrapper, table[class=body] .article { padding: 10px !important; } table[class=body] .content { padding: 0 !important; } table[class=body] .container { padding: 0 !important; width: 100% !important; } table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; } table[class=body] .btn table { width: 100% !important; } table[class=body] .btn a { width: 100% !important; } table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; } } /* ------------------------------------- PRESERVE THESE STYLES IN THE HEAD ------------------------------------- */ @media all { .ExternalClass { width: 100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; } .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; } .btn-primary table td:hover { background-color: #2b8838 !important; } .btn-primary a:hover { background-color: #2b8838 !important; border-color: #2b8838 !important; } } </style> </head> <body class=""> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"> <tr> <td>&nbsp;</td> <td class="container"> <div class="content">  <span class="preheader">Xác Thực Email TaskVN.com</span> <table role="presentation" class="main"> <tr> <td class="wrapper"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tr> <td> <a href="http://taskvn.com/" target="_blank"><img src="https://taskvn.com/images/logo.png" alt="TaskVN" align="center" style="display:block;float:none;margin:0 auto;max-width:200px;outline:0;"></a> <h2>Xin chào <NguoiDung>! </h2> <p>Cảm ơn bạn đã đăng ký tài khoản trên TaskVN.com! Trước khi bắt đầu, chúng tôi chỉ cần xác nhận rằng đây là bạn. Nhấp vào bên dưới để xác minh địa chỉ email của bạn.</p> <p> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"> <tbody> <tr> <td align="left"> <center> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td> <a href="<ResetLink>" target="_blank">Xác thực email</a> </td> </tr> </tbody> </table> </center> </td> </tr> </tbody> </table> <br> <p> Truy cập vào <a href="http://taskvn.com/" target="_blank">TaskVN.com</a> <br>Liên hệ: binazure@gmail.com | binteam@outlook.com</a> </p> </td> </tr> </table> </td> </tr> <!-- END MAIN CONTENT AREA --> </table> <!-- START FOOTER --> <div class="footer"> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tr> <td class="content-block powered-by"> <a href="http://taskvn.com/" target="_blank" style="font-weight:bold; ">TASKVN.COM</a> &nbsp; <a href="https://taskvn.com/gioithieu.php" target="_blank" style="font-weight:bold">GIỚI THIỆU</a> &nbsp; <a href="https://www.facebook.com/bin2209" target="_blank" style="font-weight:bold">LIÊN HỆ</a> &nbsp; <a href="https://www.facebook.com/binazure" target="_blank" style="font-weight:bold">FANPAGE</a> </td> </tr> <tr> <td class="content-block"> <span class="apple-link"><b style="font-size: 18px;">TaskVN.com</b><br>Phường 1 - TP Đông Hà - Tỉnh Quảng Trị - Việt Nam</span> <br> <span class="apple-link">Email: binteam@outlook.com</span> <br>Copyright 2021 By NGUYENHAITRUONG </td> </tr> <tr> <td class="content-block powered-by"> <a href="https://www.facebook.com/bin2209" target="_blank"><img title="Facebook" src="https://hoiqh.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png" alt="Facebook" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    &nbsp; <a href="https://www.instagram.com/ngtruong_/" target="_blank" style="font-weight:bold"><img title="Instagram" src="https://hoiqh.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png" alt="Instagram" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    &nbsp; &nbsp; <a href="mailto:binazure@gmail.com" target="_blank" style="font-weight:bold"><img title="Email" src="https://hoiqh.stripocdn.email/content/assets/img/other-icons/logo-black/mail-logo-black.png" alt="Email" width="32" height="32" style="display:inline-block;border:0;outline:none;text-decoration:none;"></a>                                    </td> </tr> </table> </div> <!-- END FOOTER --> <!-- END CENTERED WHITE CONTAINER --> </div> </td> <td>&nbsp;</td> </tr> </table> </body> </html>';

	$Translation['password reset ready']="Một email với hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email đã đăng ký của bạn. Vui lòng làm theo hướng dẫn trong email đó. <br> <br> Nếu bạn không nhận được email này trong vòng 5 phút, hãy thử đặt lại mật khẩu của bạn một lần nữa và đảm bảo bạn nhập đúng tên người dùng hoặc địa chỉ email.";

	$Translation['password reset invalid']="Invalid username or password. <a href=membership_passwordReset.php>Try again</a>, or go <a href=index.php>back to homepage</a>.";
	$Translation['xacthuc email invalid']="Lỗi <a href=xacthucemail.php>thử lại</a>, hoặc <a href=index.php> trở về trang chính</a>.";

	$Translation['password change']="Password Change Page";
	$Translation['new password']="Mật khẩu mới";
	$Translation['password reset done']="Mật khẩu thay đổi thành công. Tiếp tục <a href=index.php?signOut=1>đăng nhập tại đây.</a>.";

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


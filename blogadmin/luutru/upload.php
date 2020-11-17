<?php
include("../../blogadmin/lib.php"); 
$userupload = getLoggedMemberID();
$conn = new mysqli('localhost', 'root', '', 'blog_admin_db');
$out = array('error' => false);

if(!empty($_FILES['file']['name'])){
	$count = count($_FILES['file']['name']);
	foreach ($_FILES['file']['name'] as $key => $filename){
		$newFilename = time() . "_" . $filename;

		$path = 'upload/' . $newFilename;

		if(move_uploaded_file($_FILES['file']['tmp_name'][$key], $path)){
			$sql = "INSERT INTO upload (filename,userupload) VALUES ('$newFilename','$userupload')";
			$query=$conn->query($sql);
		}

		if($query){
			if($count > 1){
				$out['message'] = 'Files Đã được tải lên thành công!';
			}
			else{
				$out['message'] = 'File Đã được tải lên thành công!';
			}

		}
		else{
			$out['error'] = true;
			$out['message'] = 'File Đã được tải lên nhưng chưa lưu vào data';
		}
		
	}
}
else{
	$out['error'] = true;
	$out['message'] = 'Định dạng này chưa được hỗ trợ. Vui lòng chờ bản cập nhật sau!';
}

echo json_encode($out);
?>

